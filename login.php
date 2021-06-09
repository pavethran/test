<?php
session_start();
include 'db_conn.php';
if(isset($_POST['Email']) && isset($_POST['Password'])){
    function validata($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }
}
$email = validata($_POST["Email"]);
$password = validata($_POST['Password']);

if(empty($email)){
    header ("Location: index.php?error=Email is required");
    exit();
}
elseif(empty($password)){
    header ("Location:index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM user_registration WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)=== 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['Email'] === $email && $row['Password'] === $password){
        echo 'Logged In';
        $_SESSION['email'] = $row['Email'];
        
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