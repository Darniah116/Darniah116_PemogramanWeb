<?php
	session_start();
	if (isset($_SESSION['in'])) {
		header('Location: index.php');
		exit;
	}
	$username = 'admin';
	$password = 'admin01';

	if (isset($_POST['submit'])) {
		if ($_POST['username'] == $username && $_POST['password'] == $password){
			$_SESSION["admin"] = true;
			$_SESSION["username"] = $username; 
			echo "<script>
					alert('Login Berhasil');
					document.location.href = 'hal admin.php';
				</script>";
		} else {
			// Tampilkan Pesan Error
			display_login_form();
			echo "<script> alert('Username/Password Salah!');
            document.location.href = 'login.php';
        </script>";
}
}    
else { 
display_login_form();
}
?>	
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="web.css">
<title>admin</title>
</head>
<style>
body{
background-image: url("https://t3.ftcdn.net/jpg/02/84/69/52/360_F_284695228_Mk8bgUjv33bT1opqAu4fVAGftgbxUiqg.jpg");
}
</style>
<body>
<?php
function display_login_form(){ ?>
<article>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <div class="form-header">
          <h1>LOGIN ADMIN</h1>
          <br>
          <br>
        </div>
        <div class="login-admin">
            <div class="form-area">
                <div class="form-label">
                    <label for="username">Username</label>
                </div>
                <br>
                <div class="form-input">
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
            </div>
            <br>
            <div class="form-area">
                <div class="form-label">
                    <label for="password">Password</label>
                </div>
                <br>
                <div class="form-input">
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
            </div>
            <br>
            <div class="form-button">
                <button type="submit" name="submit" value="submit"><a href="hal admin.php"></a>Login</button>
            </div>
        </div>
    </form>
    <br>
        <a href="index.php"><button class="logout">Logout</button></a>
    </article>
<?php } ?>
</body>
</html>