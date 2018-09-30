<body bgcolor="#f9f1c5">
<?php 
	session_start();
	error_reporting(0);
		$user = array("user" => "septimaudip",
					  "pass" =>"1234567" );
	if (isset($_POST['submit'])) {
		if ($_POST['username']==$user['user'] && $_POST['password'] == $user['pass']) {
			$_SESSION["username"]=$_POST['username'];
			echo "<h1>APLIKASI SUKA-SUKA</h1><br>";
			echo "Anda Berhasil login $_POST[username]<br>";
			echo "Silahkan isi form terlebih dahulu untuk mengetahui suka-suka anda. <a href ='proses.php'>Klik isi form</a>";
			# code...
		}else{
			display_login_form();
			echo "<p.Username atau password tidak benar</p>";
		}
		# code...
	}else{
		display_login_form();
	}
	function display_login_form(){ ?>
		<?php echo "<h1> LOGIN </h1><br>"; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
		<label for="username">Username </label>
		: <input type="text" name="username" id="username"><br><br>
		<label for="password">Password</label>
		: <input type="password" name="password" id="password"><br><br>
		<input type="submit" name="submit" value="Login">	
		</form>

	<?php } ?>	

<body bgcolor="#f9f1c5">
