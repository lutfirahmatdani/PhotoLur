<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FotoModel;
use App\Models\AuthModel;
use App\Models\KomentarModel;
use App\Models\LikeModel;
use App\Models\AlbumModel;
    

class Start extends BaseController
{

    protected $fotoModel;
    protected $session;
    protected $validation;
    protected $AuthModel;

    protected $KomentarModel;
    protected $LikeModel;
    protected $AlbumModel;


    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->fotoModel = new FotoModel();
        $this->AuthModel = new AuthModel();
        $this->session = session();
        $this->KomentarModel = new KomentarModel();
        $this->LikeModel = new LikeModel();
        $this->AlbumModel = new AlbumModel();
       

    }

    public function index()
    {
        
        return view('home/start');

    }
    
    public function register()
    {
        return view('home/register');
    }

    public function profile()
    {
        return view('user/profile');
        
    }

    public function login()
    {
        return view('home/login');
    }

    public function beranda()
    {
        $foto = $this->fotoModel->findAll();

        $data = [
            'foto' => $foto
        ];

        return view('user/beranda', $data);
    }

    public function upload()
    {
        return view('user/upload');
    }

    public function album($id)
    {
        $album = $this->AlbumModel->where(['id_user' => $id])->findAll();
        $data = [
            'album' => $album
        ];
        return view('user/album', $data);
    }

    public function liked($id)
    {
        $like = $this->LikeModel->where(['id_user' => $id])->findAll();
        $foto = [];
        foreach ($like as $l) {
            $foto[] = $this->fotoModel->find($l['id_foto']);
        }
        $foto = array_reverse($foto);

        $data = [
            'foto' => $foto
        ];
        return view('user/liked', $data);
    }

    public function editprofile()
    {
        return view('user/editprofile');
    }

    

    Public function save()
    {
         // ambil gambar
       $fileDokumen = $this->request->getFile('lokasi_file');
       $newName = $fileDokumen->getRandomName();
       $fileDokumen->move('foto_storage', $newName);

       $this->fotoModel->save([
           "judul_foto" => $this->request->getVar('judul_foto'),
           'deskripsi_foto' => $this->request->getVar('deskripsi_foto'),
           'tanggal_unggah' => date('Y-m-d'),
           'lokasi_file' => $newName,
            'user_id' => session()->get('user_id')
        ]);
        
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect()->to('/home');
    }
    


    public function posting($id)
    {
        $db = \Config\Database::connect(); // Mendapatkan objek database
        $sql = "SELECT * FROM komentar JOIN user ON komentar.id_user = user.id_user";
        $query = $db->query($sql);
        $komentar = $query->getResult();
        $komentar = json_decode(json_encode($komentar), true);
        $komentar = array_filter($komentar, function ($var) use ($id) {
            return ($var['id_foto'] == $id);
        });

        $iduser = session('id_user');
        $like = $this->LikeModel->getLikeByPost($id);
        $jumlahlike = count($like);
        $liked = $this->LikeModel->hasUserLikedPost($iduser, $id);
        $album = $this->AlbumModel->where(['id_user' => $iduser])->findAll();

        $data = [
            'foto' => $this->fotoModel->find($id),
            'komentar' => $komentar,
            'terlike' => $liked,
            'totallike' => $jumlahlike,
            'album' => $album,
        ];
        return view('user/posting', $data);
        
    }



    
    public function editprofilesave()
    {

        
        // ambil gambar
        $fileDokumen = $this->request->getFile('foto');
        $newName = $fileDokumen->getRandomName();
        $fileDokumen->move('image_storage', $newName);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $newName
        ];

        ([
            'id_user' => session()->get('id_user'),
            'nama_lengkap' => $data['nama'],
            'username' => $data['username'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'password' => session()->get('password'),
            'foto' => $data['foto'] 
        ]);



        session()->set([
            'id_user' => session()->get('id_user'),
            'username' => $data['username'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'foto' => $data['foto'],
            'logged_in' => TRUE
        ]);

        return redirect()->to('/home');
    }

    public function valid_register()
    {
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'password' => $this->request->getVar('password'),
            'confirm' => $this->request->getVar('confirm'),
            'foto' => 'default.jpg'
        ];

        // cek apakah password dan ulangi password sama
        if ($data['password'] != $data['confirm']) {
            session()->setFlashdata('pesan', 'Password dan Ulangi Password tidak sama');
            return redirect()->to('/register');
        }

        // enkripsi password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(10));

        $email = \Config\Services::email();
        $email->setTo($data['email']);
        $email->setSubject('Registrasi Akun');
        $email->setMessage('Selamat Datang ' . $data['username'] . ' di SourcePicture, akun anda berhasil dibuat. Silahkan Activasi akun anda dengan klik link berikut :' . base_url() . 'auth/activate/' . $token);
        $email->send();

        // simpan ke database
        $this->AuthModel->save([
            'nama_lengkap' => $data['nama_lengkap'],
            'username' => $data['username'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'password' => $data['password'],
            'foto' => $data['foto']
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/login');
    }

    public function valid_login()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];

        $user = $this->AuthModel->where(['username' => $data['username']])->first();

        // cek apakah username ada
        if ($user) {
            // cek apakah password benar
            if (password_verify($data['password'], $user['password'])) {
                session()->set([
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'email' => $user['email'],
                    'alamat' => $user['alamat'],
                    'password' => $user['password'],
                    'foto' => $user['foto'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/home');
            } else {
                session()->setFlashdata('pesan', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {

            session()->setFlashdata('pesan', 'Username tidak ditemukan.');
            return redirect()->to('/login');
                 
        }
    }

    public function komentarsave($id)
    {

        // ambil id_user dari session
        $id_user = $this->session->get('id_user');
        // ambil komentar dari session
        $isi_komentar = $this->request->getPost('isi_komentar');
        // simpan data
        $data = [
            'id_foto' => $id,
            'id_user' => $id_user,
            'isi_komentar' => $isi_komentar
        ];

        $this->KomentarModel->insert($data);

        return redirect()->back();
    }
}





