<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . "//webKomik/ranya-comic-web/HTML file/header/header.php"?>
  
<form id="size" action="prc.php" method="POST" class="bg-secondary row g-3 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 rounded">
<h1 class="text-white">Login</h1>

  <div class="col-md-12 text-white">
    <label  type="email" class="form-label">Email</label>
    <input id="email" name="email" type="email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" class="form-control" id="email">
    <span class="text-danger d-none" id="emailError">Email not valid !!!</span>
  </div>
  <div class="col-md-12 text-white">
    <label for="inputPassword4" class="form-label">Password</label>
    <input id="pass" name="password" type="password" class="form-control" id="inputPassword4">
  </div>
    </div>
  </div>
  <div class="col-12">
    <button id="button" type="submit" class="btn btn-primary">Login</button>
  </div>
  <div class="col-12">
    <span class="text-white">Don't have an account? <a class="text-info" href="/webKomik/ranya-web-comic/sign up page/signUp.php">Sign Up</a></span>
  </div>
</form>
    
</body>
</html>