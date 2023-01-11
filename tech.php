<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin1.css">
        <style>
                td {
                        padding: 15px;
  text-align: center;
}
table {
  border-collapse: collapse;
}
tr:hover {background-color: yellow;}
tr:nth-child(even) {background-color: lightblue;}
/* tr:nth-child(even) {background-color: #f2f2f2;} */
th {
  background-color: #04AA6D;
  color: white;
}
table {
  width: 100%;
}

th {
  height: 70px;
}
        </style>
</head>
<body>
<?php
$username=$_POST['username'];
$dob=$_POST['dob'];
// $ID=$_POST['ID'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "mini6";   


            $con = mysqli_connect($servername, $username, $password,$database);
if(!($con))
{
die("error in connecting to DB");
}
else
{
print "<i style='color:green'>connection successfull</i><br />";
}


$db=mysqli_select_db($con,"mini6");
// $query="insert into doctab values('$username','$dob',$ID)";
// if(!($query))
// {
//     die("error in connecting to DB");
//     }
//     else
//     {
//         print "<i style='color:green'>inserted successfull</i><br />";
//         }
        // mysqli_query($con,$query);
        // if($num==1){
        //     echo "username already taken";
        // }
$result=mysqli_query($con,"select * from reg3");
$rows=mysqli_num_rows($result);
echo "<i style='color:blue'></i>";
echo "<i style='color:blue'></i>";
echo "<i style='color:red',font-size=15px>Students who are present today</i>";
echo "<table ><tr><th>username</th><th>USN</th></tr>";
for($row=1;$row<=$rows;$row++)
{
$rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<tr><td>".$rowv['username']."</td>";
echo "<td>".$rowv['dob']."</td>";
// echo "<td>".$rowv['ID']."</td></tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>