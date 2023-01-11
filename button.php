<html>
<head>
	<title>Info Hover Button</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
session_start();
// header('location:login.php');

$servername = "localhost";
$username = "root";
$password = "";
$database = "mini6"; 
$con = mysqli_connect($servername, $username, $password,$database);
$db=mysqli_select_db($con,"mini6");

$username = $_POST['username'];
$dob = $_POST['dob'];

$s="select * from reg3 where username='$username' && dob='$dob'";

$result = mysqli_query($con,$s);


$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username'] = $usernames;
    header('location:app.php');
}
else{
    header('location:SignupLogin.php');
}

?>
   <!-- <div class="card">
   	<span>&#8505;</span>
   	<h1>Welcome Horizonite,To 6th Sem</h1>
   	<p>“Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young.”

<br>- Henry Ford.</br></p>
   	<p>Please click To access classroom; <button>COURSES</button>&nbsp;<img src="icon.png"></p>
   	
   </div> -->



</body>
</html>