<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

  <a href="/buatalbum" class="btn btn-primary">Upload</a>

</head>
<body>
    
</body>
</html>