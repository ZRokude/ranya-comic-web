<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Header.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My List</a>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Action</a>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          <?php 
          if (isset($_SESSION['email'])) { ?>
            <img src="profil/profil.jpg" alt="" class="profil">
            <a href="/2025_CODE/HTML file/header/logout.php" ><button class="btn btn-outline-info" type="submit">Logout</button></a>
          <?php } else {?>
            <a href="/2025_CODE/Login page/Login.php"><button class="btn btn-outline-success" type="submit">Login</button></a>
          <?php }?>
          </div>
        </div>
      </nav>
</body>
</html>