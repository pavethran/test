<?php
session_start();
if(isset($_SESSION['id'])&& isset($_SESSION['email'])){
?>
<!DOCTYPE html
<html>
<head>
<title> Home</title>

<link rel="stylesheet" type="text/css" href="./css/page.css">

</head>
<body>
<div className="App">
<form method="$_POST" action="#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <div className="container">
        <div className="description">
          <label>My Weight is
          <div id = "display"> </div>
          
          <span className="button">kg</span>
          </label></div>

        <input
          type="range"
          min="1"
          name="weight"
          max="100"
          value="50"
          onchange = "showValue (this.value)"

        >
      </div>

      <div className="container">
        <div className="description">
          <label>My Gender</label>
        </div>
        <label>
          <img src="./img/male.jpg"  width="100px" height="100px" />
          <input
            type="radio"
            name="Gender"
            value="Male"
            
          />
        </label>
        <label>
          <img src= "./img/female.jpg" width="100px" height="100px" />           <input
            type="radio"
            name="Gender"
            value="Female"
          />
        </label>
      </div>

      <div className="container">
        <div className="description">
          <label>Weather Type</label>
        </div>

        <label>
          <img src="./img/hot.png" width="100px" height="100px" />
          <input
            type="radio"
            name="Weather"
            value="Hot"
          />
        </label>
        <label>
          <img src="./img/cold.png" width="100px" height="100px" />
          <input
            type="radio"
            name="Weather"
            value="Cold"
            
          />
        </label>
      </div>


      </div>
      <input type="submit" name="submit" value="submit"> 
    </div>
</form>
<script> function showValue(val) {
  console.log(val)
  document.getElementById("display").innerHTML = val;
} </script>
<!--<a href="logout.php">Logout</a>-->
</body>
</html>
<?php
}
else{
    header("Location: index.php");
    exit();
}
?>


