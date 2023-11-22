<?php
include 'connect.php';
if (insstr ($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into "
}
?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label for=>Name</label> 
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
    </div>
    <div class="form-group">
    <label for=>Email</label> 
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
    </div>
    <div class="form-group">
    <label for=>Mobile</label> 
    <input type="mobile" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label for=>Password</label> 
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
</div>

  <button type="submit" class="btn btn-primary" name=submit>Submit</button>
</form>
    </div>

  </body>
</html>