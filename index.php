<!DOCTYPE html
<html>
<head>
<title> LOGIN </title>

<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form action="login.php"method = "post">

<h2>LOGIN</h2>
<?php if(isset($_GET['error'])){ ?>
<p class="error"> <?php echo $_GET['error']; ?></p>
<?php } ?>
<label> Email </label>
<input type="text" name="email" placeholder="Email"><br>
<label>Password</label>
<input type="password"name="password" placeholder="Password"><br>
<button type="submit">Login</button>
<p> If not register click this<a href="registration.php"></a>
</form>

</body>
</html>