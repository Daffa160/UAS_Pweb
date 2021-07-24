<?php
	require 'function.php';

	//cek login
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password = '$password' ");

		$hitung = mysqli_num_rows($cekdatabase);

		if($hitung > 0)
		{
			$_SESSION['log'] = 'true';
			//header(index)
			echo "login berhasil";
		}
		else{
			echo "login gagal";
		}
	}
?>



<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form method="POST">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email" id="email" name="email" placeholder="email@gmail.com" required></p>
				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" placeholder="password"></p>
				<p><input type="submit" name="login" value="Sign In"></p>

			</fieldset>

		</form>

	</div>

</body>	
</html>