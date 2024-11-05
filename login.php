<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"content="width=device-width,initial-scale=1">
<title>website galeri foto</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootsrap.min.css">
<head>
</body>
<nav class="navbar nafbar-expand-ig bg-body-tertiary">
<div class="container">
<a class="navbar-brand" href="#">navbar</a>
<button class="navbar-tonggler" type="button" data-bs-tonggle="collapse" data-bs-target="#navbarNavA1tmarkup" aria-controls="navbarNavA1tmarkup" aria-expanded="false" aria-label="togle navigation">
<span class="navbar-toggler-icon></span>
</button>
<div class="collapse navbar-collapse mt-2"id="nafbarNavA1tmarkup">
<div class="navbar-nav me-auto">

</div>
<a href="register.php" class="btn btn-outline-primary m-1> daftar</a>
<a href="login.php" class="btn btn-outline-succes m-1> masuk</a>
</div>
</div>
</nav>

<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
<div class="card-body bg-light">
<div class="text-center">
<h5> login aplikasi </h5>
</div>
<form action="" method="POST">
<label class="form.label">username</label>
<input type="text" name="username" class="form-control" required>
<label class="form.label">password</label>
<input type="password" name="password" class="form-control" required>
<div class="d-grid mt-2">
<button class="btn btn-primary" type="submit" name="kirim">masuk</button>
</div>
</form>
<hr>
<p> belum punya akun?<a href="register.php">daftar disini!</a></p>
</div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy;ukk rpl 2024 | nama peserta</p>
</footer>
<script type="text/javascript" src="assets/js/boostrap.min.js"></script>
</body>
</html>