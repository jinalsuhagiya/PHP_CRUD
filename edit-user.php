<?php

include("db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM users
WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit User</title>

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

Edit User

</h2>

<form
action="update-user.php"

method="post"

enctype="multipart/form-data">

<input type="hidden"
name="id"

value="<?php
echo $row['id'];
?>">

<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"

class="form-control"

value="<?php
echo $row['name'];
?>">

</div>

<div class="mb-3">

<label>Gender</label>

<br>

<input type="radio"
name="gender"
value="Male"

<?php

if($row['gender']=="Male"){

echo "checked";

}

?>>

Male

<input type="radio"
name="gender"
value="Female"

<?php

if($row['gender']=="Female"){

echo "checked";

}

?>>

Female

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"

class="form-control"

value="<?php
echo $row['email'];
?>">

</div>

<div class="mb-3">

<label>Current Image</label>

<br><br>

<img
src="images/<?php
echo $row['image'];
?>"

width="100"
height="100">

</div>

<div class="mb-3">

<label>New Image</label>

<input type="file"
name="image"

class="form-control">

</div>

<div class="mb-3">

<label>Message</label>

<textarea
name="message"

class="form-control"><?php
echo $row['message'];
?></textarea>

</div>

<button type="submit"

class="btn btn-primary w-100">

Update User

</button>

<br><br>

<a href="users.php"
class="btn btn-dark w-100">

Back

</a>

</form>

</div>

</div>

</div>

</div>

</body>
</html>