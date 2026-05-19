<?php

include("db.php");

$limit = 3;

$page = isset($_GET['page'])
? $_GET['page'] : 1;

$start = ($page - 1) * $limit;

$search = "";

if(isset($_GET['search'])){

    $search = $_GET['search'];
}

$sql = "SELECT * FROM users

WHERE name LIKE '%$search%'

LIMIT $start,$limit";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Users</title>

<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card p-4">

<div class="d-flex
justify-content-between">

<h2>User List</h2>

<a href="add-user.php"
class="btn btn-primary">

Add User

</a>

</div>

<br>

<form method="get">

<div class="row">

<div class="col-md-10">

<input type="text"
name="search"

class="form-control"

placeholder="Search Name">

</div>

<div class="col-md-2">

<button class="btn btn-success w-100">

Search

</button>

</div>

</div>

</form>

<br>

<table class="table
table-bordered
table-hover">

<tr class="table-dark">

<th>ID</th>
<th>Name</th>
<th>Gender</th>
<th>Email</th>
<th>Image</th>
<th>Message</th>
<th>Action</th>

</tr>

<?php

while($row =
mysqli_fetch_assoc($result)){

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo $row['name']; ?>
</td>

<td>
<?php echo $row['gender']; ?>
</td>

<td>
<?php echo $row['email']; ?>
</td>

<td>

<img
src="images/<?php
echo $row['image']; ?>"

width="80"
height="80">

</td>

<td>
<?php echo $row['message']; ?>
</td>

<td>

<a href=
"edit-user.php?id=
<?php echo $row['id']; ?>"

class="btn btn-warning">

Edit

</a>

<a href=
"delete-user.php?id=
<?php echo $row['id']; ?>"

class="btn btn-danger">

Delete

</a>

</td>

</tr>

<?php
}
?>

</table>

<?php

$total_query =
mysqli_query($conn,
"SELECT * FROM users");

$total_record =
mysqli_num_rows($total_query);

$total_page =
ceil($total_record / $limit);

for($i=1; $i<=$total_page; $i++){

?>

<a href=
"users.php?page=<?php echo $i; ?>"

class="btn btn-dark">

<?php echo $i; ?>

</a>

<?php
}
?>

</div>

</div>

</body>
</html>