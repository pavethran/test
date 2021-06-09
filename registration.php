<?php
include('db_conn.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //gathering data from form

    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
	$email = $_POST['EmailID'];
    $password = $_POST['Password'];
    $dob=$_POST['Dob'];
    $gender=$_POST['Gender'];
    $mobile=$_POST['MobileNumber'];

   
    
    // database insertion
    $sql=" INSERT INTO `user_registration`(`Firstname`, `Lastname`, `Email`, `Password`, `dob`, `Gender`, `Mobile`) VALUES ('$fname','$lname','$email','$password','$dob','$gender','$mobile')";
	$result=$conn->query($sql);
    if($result){
		echo "registration success" ;
		header('location:index.php');
	}
	else{
		echo"registration failed";
	}
}
?>
<!DOCTYPE html
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="./Js/global.js"></script>
</head>

<body>         
    <h2>Registration form</h2>
    <div class="container">
        <form name="reg_form"  method="POST" action="#" >
                First Name:<input type="text" name="FirstName" maxlength="50" placeholder="firstname"required />&nbsp; (Max 50 Characters Allowed) </br></br> 

                Last Name:<input type="text" name="LastName" maxlength="50" placeholder="lastname"required />&nbsp; (Max 50 CharactersAllowed)</br></br>
                
                Email ID:<input type="email" name="EmailID" maxlength="100" placeholder="email"required />&nbsp;</br></br>
                
                Password:<input type="password" name="Password" maxlength="12"minlength="8" placeholder="********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required/> &nbsp;(Must contain samll,caps,number and special character)</br><br>
                
                Date of Birth(DOB):<input type="date" name="Dob" id="Dob" required >
                
                Gender:<input type="radio" name="Gender" value="Male" />Male<input type="radio" name="Gender" value="Female" />
                
                Female<input type="radio" name="Gender" value="Other" />Other &nbsp;</br></br>
                
                Mobile Number:<input type="tel" name="MobileNumber" maxlength="10" placeholder="790xxxxxxx" required  />&nbsp; (10 Digits Allowed)</br> </br>
                
                <center><input type="submit" name="submit" value="submit" onclick="validateForm()"></center>
            </form>
    </div>
</body>
</html>