<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "crud_project"
);

if(!$conn){

    die("Database Connection Failed");
}

?>