<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css" />
    
</head>

<body>
<form action="" method="POST">

        <div class="login">
            <h1>Log-in</h1> 

            <input type="text" id="username" name="username" placeholder ="Username">
            <br>
            <input type="password" id="password" name="pwd"  placeholder =" kata sandi">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input type="submit" id ="masuk" name="commit" value="masuk" data-disable-with="Please wait...">

            <p>  belum punya akun?</p>
            <a href="daftar.php">Daftar disini</a>
          
        
        </div>
        
    </form>
    <?php
    if (isset($_POST['commit'])) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
    }
    ?>

</body>

</html> 