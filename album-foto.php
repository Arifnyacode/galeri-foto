<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Galeri Foto</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beranda galeri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="album-foto.php">Album</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Hai Arif!</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success" type="submit">Logout</button>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            
            <div class="card m-2" style="width: 18rem;">
                <img src="image/img-test.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul Album</h5>
                    <p class="card-text">Some quick example text to build on the Judul Foto and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
                <img src="image/img-test.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul Album</h5>
                    <p class="card-text">Some quick example text to build on the Judul Foto and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
            
        </div>
    </div>
    <br>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>