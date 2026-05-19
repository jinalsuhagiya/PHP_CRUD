<?php

session_start();

include("db.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];

    $password =
    md5($_POST['password']);

    $sql = "SELECT * FROM users

    WHERE email='$email'

    AND password='$password'";

    $result =
    mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['user'] = $email;

        header("location:dashboard.php");

    }else{

        echo "<script>
        alert('Invalid Login');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

rel="stylesheet">

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card p-4">

<h2 class="text-center mb-4">
Login Form
</h2>

<form method="post">

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"

class="form-control">

</div>

<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"

class="form-control">

</div>

<button type="submit"
name="login"

class="btn btn-success w-100">

Login

</button>

<br><br>

<a href="register.php">

Create New Account

</a>

</form>

</div>

</div>

</div>

</div>

</body>
</html>