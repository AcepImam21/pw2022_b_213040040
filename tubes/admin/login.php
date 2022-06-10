<?php
session_start();
require 'functions.php';
$conn = koneksi();


if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha512/224', $row['username'])) {
		$_SESSION['login'] = true;
	}
}


if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie
				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha512/224', $row['username']), time() + 60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

?>


<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../asset/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(../asset/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Zebulon</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Sudah Punya Akun?</h3>
						<form action="" class="signin-form" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="username" id="username" name="username" required>
							</div>
							<div class="form-group">
								<input id="password" type="password" class="form-control" placeholder="password" id="username" name="password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3" id="login" name="login">Login</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked name="remember" id="remember">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; belum Punya Akun? &mdash;</p>
                        <div class="d-grid gap-2 col-7 mx-auto px-5 mb-3">
                            <a href="registrasi.php" class="btn btn-primary">Register</a>
                        </div>
						<p class="w-100 text-center">&mdash; Follow Me On social Media &mdash;</p>
						<div class="social d-flex text-center">
							<a href="https://web.facebook.com/profile.php?id=100004510716292" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
							<a href="https://www.instagram.com/acepimam/" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Instagram</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../asset/js/jquery.min.js"></script>
	<script src="../asset/js/popper.js"></script>
	<script src="../asset/js/bootstrap.min.js"></script>
	<script src="../asset/js/main.js"></script>

</body>

</html>