<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/profile.css">
    <title>Photo lur</title>
</head>

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
            <div class="card-body">
                <div class="row justify-content-center"> <!-- Center the entire row -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-left">
                                <form class="was-validated" method="post" action="/upload/save" enctype="multipart/form-data" >
                                <h3>Edit Profile</h3>
                                    <br>
                                    <div class="mb-3">
                                        <label for="Text" class="form-label">Judul</label>
                                        <textarea class="form-control" name="judul_foto" id="Text" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Text" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi_foto" id="Text" required></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <input type="file" name="lokasi_file" class="form-control" aria-label="file example" required >
                                        <div class="invalid-feedback">Masukan Foto</div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>