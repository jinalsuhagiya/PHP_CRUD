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

OR email LIKE '%$search%'

LIMIT $start,$limit";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Users List</title>

<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

rel="stylesheet">

<link rel="stylesheet"
href="css/style.css">

</head>

<body>

<div class="container mt-5">

<div class="card p-4">

<div class="d-flex
justify-content-between
align-items-center">

<h2>User List</h2>

<a href="add-user.php"

class="btn btn-primary">

Add User

</a>

</div>

<br>

<form method="GET">

<div class="row">

<div class="col-md-10">

<input type="text"

name="search"

class="form-control"

placeholder="Search Name or Email"

value="<?php
echo $search;
?>">

</div>

<div class="col-md-2">

<button type="submit"

class="btn btn-success w-100">

Search

</button>

</div>

</div>

</form>

<br>

<table class="table
table-bordered
table-hover
text-center">

<tr class="table-dark">

<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Gender</th>
<th>Email</th>
<th>Message</th>
<th>Action</th>

</tr>

<?php

if(mysqli_num_rows($result)>0){

while($row =
mysqli_fetch_assoc($result)){

?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>

<img
src="images/<?php
echo $row['image']; ?>"

width="70"
height="70"

class="rounded-circle">

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
<?php echo $row['message']; ?>
</td>

<td>

<a href=
"edit-user.php?id=
<?php echo $row['id']; ?>"

class="btn btn-warning btn-sm">

Edit

</a>

<a href=
"delete-user.php?id=
<?php echo $row['id']; ?>"

class="btn btn-danger btn-sm"

onclick=
"return confirm(
'Are You Sure ?')">

Delete

</a>

</td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="7">

No Record Found

</td>

</tr>

<?php
}
?>

</table>

<?php

$total_query = mysqli_query(

$conn,

"SELECT * FROM users

WHERE name LIKE '%$search%'

OR email LIKE '%$search%'"

);

$total_record =
mysqli_num_rows($total_query);

$total_page =
ceil($total_record / $limit);

?>

<nav>

<ul class="pagination
justify-content-center">

<?php

for($i=1; $i<=$total_page; $i++){

?>

<li class="page-item">

<a class="page-link"

href=
"users.php?page=<?php
echo $i;
?>

&search=<?php
echo $search;
?>">

<?php echo $i; ?>

</a>

</li>

<?php
}
?>

</ul>

</nav>

</div>

</div>

</body>
</html>