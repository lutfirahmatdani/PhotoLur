<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Photolur</title>
</head>

<body>
    <form action="/auth/valid_login" method="post" >
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
                <div class="card-body">
                    <div class="row justify-content-center"> <!-- Center the entire row -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-left">
                                <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Login</h1>
                            </div>
                            <div class="form-group row">
                                    <div class="form-group mt-2">
                                        <input autocomplete="off" type="text" required name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                        <input autocomplete="off" type="password" required name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                                    <div class="text-left mb-3">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-left mb-3">
                                        <a class="small" href="/register">Buat Akun</a>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="js/onclick.js"></script>

</body>

</html>