<?php

session_start();

if(!isset($_SESSION['user'])){

    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card p-5 text-center">

<h1 class="mb-4">

Welcome Dashboard

</h1>

<a href="add-user.php"
class="btn btn-primary mb-3">

Add User

</a>

<a href="users.php"
class="btn btn-success mb-3">

Display Users

</a>

<a href="logout.php"
class="btn btn-danger">

Logout

</a>

</div>

</div>

</body>
</html>