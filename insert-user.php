<?php

include("db.php");

$name = $_POST['name'];

$gender = $_POST['gender'];

$email = $_POST['email'];

$password =
md5($_POST['password']);

$message = $_POST['message'];

$image =
$_FILES['image']['name'];

$tmp =
$_FILES['image']['tmp_name'];

move_uploaded_file(
$tmp,
"images/".$image
);

$sql = "INSERT INTO users

(name,gender,email,password,
image,message)

VALUES

('$name','$gender','$email',
'$password','$image','$message')";

mysqli_query($conn,$sql);

header("location:users.php");

?>