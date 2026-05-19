<!DOCTYPE html>
<html>

<head>

<title>Add User</title>

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

<h2 class="text-center">

Add User

</h2>

<form action="insert-user.php"
method="post"

enctype="multipart/form-data">

<div class="mb-3">

<label>Name</label>

<input type="text"
name="name"

class="form-control">

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

class="form-control">

</div>

<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"

class="form-control">

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

<button class="btn btn-primary w-100">

Add User

</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>