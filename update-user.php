<?php

include("db.php");

$id = $_POST['id'];

$name = $_POST['name'];

$gender = $_POST['gender'];

$email = $_POST['email'];

$message = $_POST['message'];

$image = $_FILES['image']['name'];

$tmp = $_FILES['image']['tmp_name'];

if($image != ""){

    move_uploaded_file(
    $tmp,
    "images/".$image
    );

    $sql = "UPDATE users SET

    name='$name',

    gender='$gender',

    email='$email',

    image='$image',

    message='$message'

    WHERE id='$id'";

}else{

    $sql = "UPDATE users SET

    name='$name',

    gender='$gender',

    email='$email',

    message='$message'

    WHERE id='$id'";
}

mysqli_query($conn,$sql);

header("location:users.php");

?>