<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>PHOTOLUR</title>
</head>


<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
            <div class="card-body">
                <div class="row justify-content-center"> <!-- Center the entire row -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" action="/auth/valid_register" method="post">
                                <div class="form-group row">
                                <div class="form-group mt-2">
                                        <input autocomplete="off" type="text" name="nama_lengkap" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input autocomplete="off" type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <input autocomplete="off" type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                </div>
                                <div class="form-group mt-2">
                                    <input autocomplete="off" type="alamat" name="alamat" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat">
                                </div>
                                <div class="form-group row mt-2">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input autocomplete="off" type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input autocomplete="off" type="password" name="ulangi" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <div class="form-group text-center mt-3"> <!-- Add text-center class here -->
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/onclick.js"></script>

</body>

</html>