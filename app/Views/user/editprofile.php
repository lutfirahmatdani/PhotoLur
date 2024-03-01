<!DOCTYPE html>
<html lang="en">

<?php
$ProfilePhoto = session()->get('foto');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Photolur</title>
    <style>
        body {
            background: rgb(48, 154, 209);
            background: linear-gradient(90deg, rgba(48, 154, 209, 1) 0%, rgba(15, 151, 176, 1) 49%, rgba(16, 204, 226, 1) 100%);
        }
    </style>
</head>

<body class="bg">
        <section id="pengaduan" class="d-flex align-items-center">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/editprofile/save" enctype="multipart/form-data">
                            <h3>Edit Profile</h3>
                            <br>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input autocomplete="off" type="text" name="nama" id="nama" class="form-control" placeholder="Ubah Nama Anda" style="font-size: 15px">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input autocomplete="off" type="text" name="username" id="username" class="form-control" placeholder="Ubah Username Anda" style="font-size: 15px">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input autocomplete="off" type="email" name="email" id="email" class="form-control" placeholder="Ubah Email Anda" style="font-size: 15px">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input autocomplete="off" type="text" name="alamat" id="alamat" class="form-control" placeholder="Ubah Alamat Anda" style="font-size: 15px">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                                <!-- <input type="text"> -->
                            </div>
                            <div class="d-flex justify-content-end form-check">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="js/onclick.js"></script>
        </section>
    </body>
</body>

</html>

