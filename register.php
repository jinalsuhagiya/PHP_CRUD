<?php

include("db.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $message = $_POST['message'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file(
        $tmp,
        "images/".$image
    );

    $sql = "INSERT INTO users
    (name,gender,email,password,image,message)

    VALUES

    ('$name','$gender','$email',
    '$password','$image','$message')";

    mysqli_query($conn,$sql);

    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Register</title>

<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

rel="stylesheet">

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card p-4">

<h2 class="text-center mb-4">
Register Form
</h2>

<form method="post"
enctype="multipart/form-data">

<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"

class="form-control"
required>

</div>

<div class="mb-3">

<label>Gender</label>
<br>

<input type="radio"
name="gender"
value="Male">

Male

<input type="radio"
name="gender"
value="Female">

Female

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"

class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"

class="form-control"
required>

</div>

<div class="mb-3">

<label>Image</label>

<input type="file"
name="image"

class="form-control">

</div>

<div class="mb-3">

<label>Message</label>

<textarea
name="message"

class="form-control">
</textarea>

</div>

<button type="submit"
name="register"

class="btn btn-primary w-100">

Register

</button>

<br><br>

<a href="login.php">

Already Account Login

</a>

</form>

</div>

</div>

</div>

</div>

</body>
</html>