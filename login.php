<?php
session_start();
include 'db_conn.php';
if(isset($_POST['email']) && isset($_POST['password'])){
    function validata($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }
}

$email = validata($_POST['email']);
$pass = validata($_POST['password']);

if(empty($email)){
    header ("Location: index.php?error=Email is required");
    exit();
}
elseif(empty($pass)){
    header ("Location:index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)=== 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['email'] === $email && $row['password'] === $pass){
        echo 'Logged In';
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("location: home.php");
        exit();

    }
    else{
        header("Location: index.php?error=Incorrect email or password");
        exit();
    }
}
else {
    header("Location:index.php");
    exit();
}