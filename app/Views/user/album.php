<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/album.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
  <script src="https://kit.fontawesome.com/6d2fa4f343.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/onclick.js"></script>
  <link rel="stylesheet" href="/css/beranda.css">
  <title>PhotoLur</title>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">
        <img src="/img/logo.png" alt="" width="45" height="45" class="d-inline-block align-text-top">
      </a>
      <div class="brand">PhotoLur</div>
      <ul class="navbar-nav ms-3 me-3 mb-lg-0 inihome">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto ms-3 mx-auto mb-lg-0">
        <li class="nav-item">
        <form class="d-flex" role="search" method="post" action="/search">
            <input class="form-control me-2 inisearch1" type="search" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success inisearch" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ms-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/profile">
            <img src="image_storage/<?= session()->get('foto') ?>" alt="user" width="45" height="45" class="d-inline-block align-text-top rounded-circle">
          </a>
        </li>
      </ul>
    </div>
  </nav>



</head>

<body>
  

  <div class="d-flex justify-content-center mt-3">
    <button onclick="buatalbum('/submitalbum/');" class="btn btn-lg btn-primary">Tambah</button>
  </div>
  <br>
  <div class="containerku d-flex gap-3">
    <?php foreach ($album as $a) : ?>
      <div class="cardalbum" onclick="redirectToPage('/bukaalbum/<?= $a['id_album']; ?>')">
        <div class="titlezone">
          <span class="title"><?= $a['nama_album']; ?></span>
          <span class="iconsetting" onclick="bukaAlbumSetting('<?= $a['id_album'] ?>')"><i class="fa-solid fa-gear"> </i></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

<script>
  function bukaAlbumSetting($id) {
    event.stopPropagation();
    albumSetting($id);
  }


  function albumSetting($id) {
    Swal.fire({
      title: "Setting Album",
      showDenyButton: true,
      confirmButtonText: "Edit",
      denyButtonText: "Hapus",
      denyButtonColor: "red",

    }).then((result) => {
      if (result.isConfirmed) {
        editalbum($id);
      } else if (result.isDenied) {
        hapusalbum($id);
      }
    });
  }

  function redirectToPage(pageUrl) {
    window.location.href = pageUrl;
  }

  function buatalbum(buatalbumUrl) {
    Swal.fire({
      input: "text",
      inputLabel: "Buat Album Baru",
      inputPlaceholder: "Nama Album...",
      showCancelButton: true,
      confirmButtonText: "Buat",
      cancelButtonText: "Cancel",
      inputAttributes: {
        autocomplete: "off"
      },
      inputValidator: (value) => {
        if (value == "") {
          resolve("nama album tidak boleh kosong");
        } else {
          const album = buatalbumUrl + value;
          window.location.href = album;
        }
      },
    });
  }



  function hapusalbum($id) {
    Swal.fire({
      title: "Are you sure",
      text: "You want to delete this album?",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        const deleteUrl = '/hapusalbum/' + $id;
        window.location.href = deleteUrl;
      }
    });
  }

  function editalbum($id) {
    Swal.fire({
      input: "text",
      inputLabel: "Edit Album",
      inputPlaceholder: "Enter album name...",
      showCancelButton: true,
      confirmButtonText: "Edit",
      cancelButtonText: "Batalkan",
      inputAttributes: {
        autocomplete: "off"
      },
      inputValidator: (value) => {
        if (value == "") {
          resolve("You need to enter an album name");
        } else {
          const editUrl = '/editalbum/' + $id;
          window.location.href = editUrl + '/' + value;
        }
      },
    });
  }
</script>

</html>