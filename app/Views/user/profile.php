<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/profile.css">
    <title>profile</title>
</head>

<?php 
$ProfilePhoto = session()->get('foto'); 
$iduser = session()->get('id_user'); 
?>

<body>
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body">
            <div class="row justify-content-center"> <!-- Center the entire row -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-left">
                            <div class="text-center">
                                <div class="container text-center mt-5">
                                    <img src="image_storage/<?= session()->get('foto') ?>" alt="" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                                    <div class="mt-3">
                                        <h3><?= session()->get('username'); ?></h3>
                                        <div class="row d-flex justify-content-center text-center">
                                            <p class="profile-username text-black ">@<?= session()->get('username'); ?></p>
                                        </div>
                                        <button class="profile-batten-1 ms-2 me-2" type="button" onclick="redirectToPage('/editprofile')">Edit Profile</button>
                                        <button class="profile-batten-1" type="button" onclick="redirectToPage('/logout')">Logout</button>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md d-flex justify-content-center">
                                        <button class="profile-batten-2 active-2" type="button" onclick="redirectToPage('/user/album/<?= $iduser ?>')">Album</button>
                                        <button class="profile-batten-2 ms-2 me-2" type="button" onclick="redirectToPage('/user/like/<?= $iduser ?>')">Liked</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="js/onclick.js"></script>
</body>

</html>