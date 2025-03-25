<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Form.css">
    <title>Sign up</title>
</head>
<body>
  <?php 
  include $_SERVER['DOCUMENT_ROOT'] . "/2025_CODE/HTML file/header/header.php"?>

<form id="size" action="process.php" method="POST" class="bg-secondary row g-3 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 rounded">
<h1 class="text-white">Create Account</h1>

  <div class="col-md-6 text-white">
    <label type="name" class="form-label">Username</label>
    <input name="name"  class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6 text-white">
    <label  type="email" class="form-label">Email</label>
    <input id="email" name="email" type="email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" class="form-control" id="email">
    <span class="text-danger d-none" id="emailError">Email not valid !!!</span>
  </div>
  <div class="col-md-8 text-white">
    <label for="inputPassword4" class="form-label">Password</label>
    <input id="pass" name="password" type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-8 text-white">
    <label for="inputPassword4" class="form-label">Confirm Password</label>
    <input id="cfmpass" name="confirm_password" type="password" class="form-control" id="inputPassword4">
    <span class="text-danger d-none" id="passwordError">Password wrong !!!</span>
  </div>
    </div>
  </div>
  <div class="col-12">
    <button id="button" type="submit" class="btn btn-primary">Sign in</button>
  </div>
  <div class="col-12 text-white">
    <span class="text-white">Already have an account? <a class="text-info" href="/2025_CODE/Login page/Login.php">Login</a></span>
  </div>
</form>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="form.js"></script>
</body>
</html>