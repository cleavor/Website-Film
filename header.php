<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
        <?php echo $title ?> -
        <?php echo $sitename ?> |
        <?php echo $tagline ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav id="navbar" class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="assets/img/Original_Film_logo.png" />
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navcol-1" class="collapse navbar-collapse d-xxl-flex">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item item"><a id="link-home" class="nav-link active link" href="index.php">Home</a></li>
                <li class="nav-item item"><a class="nav-link link" href="#">Jadwal Tayang</a></li>
                <li class="nav-item dropdown item"><a class="dropdown-toggle nav-link dropdown" aria-expanded="false" data-bs-toggle="dropdown" href="#">Genre</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Romance</a>
                        <a class="dropdown-item" href="#">Comedy</a>
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item item">
                    <div class="nav-link link">
                        <div class="search-container">
                            <form action="search.php">
                                <input type="text" placeholder="Cari.." name="search">
                                <select name="channel">
                                    <option value="movie">Movie</option>
                                    <option value="tv">TV</option>
                                </select>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="nav-item d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start akun"><img id="akun" src="assets/img/akun.png" /></li>
                <li class="nav-item dropdown akun"><a class="dropdown-toggle nav-link dropdown" aria-expanded="false" data-bs-toggle="dropdown" href="#">Raka Jr</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="assets/bootstrap/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/script.min.js"></script>
</body>