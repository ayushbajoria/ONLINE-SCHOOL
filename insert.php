<?php
// if(!empty($username) || !empty($dob)){
    //     $host = "localhost";
    //     $dbusername = "root";
    //     $dbpassword = "";
    //     $dbname = "mini6";
    
    //     $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
//     if(mysqli_connect_error()){
    //         die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());}
    //         else{
        //             $SELECT = "SELECT username FROM reg WHERE username=? LIMIT=1";
        //             $INSERT = "INSERT INTO reg (username,dob)VALUES(?,?)";
        
        //             $stmt = $conn->prepare($SELECT);
        //             $stmt->bind_param("s",$username);
        //             $stmt->execute();
        //             $stmt->bind_result($username);
        //             $stmt->store_result();
        //             $stmt->fetch();
        //             $rnum = $stmt->num_rows;
        
        //             if($rnum == 0){
            //                 $stmt->close();
            //                 $stmt = $conn->prepare($INSERT);
            //                 $stmt->bind_param("ssssii",$username, $dob);
            //                 $stmt->execute();
            //                 echo "New record inserted sucessfully.";
            
            //             }
            // else {
                //                 echo "Someone already registers using this email.";
                //             }
                //             $stmt->close();
                //             $conn->close();
                //         }
                // }
                // else{
                    //     echo "All field acquired";
                    //     die();
                    // }
                    // if(isset($_POST['username'])){

                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "mini6";
                    
                    // Create a database connection
                    $con = mysqli_connect($server, $username, $password,$database);
                    
                    // Check for connection success
                    if(!$con){
                        die("connection to this database failed due to" . mysqli_connect_error());
                    }
                    
                    // echo "Connection Successfull";
                    $username = $_POST['username'];
                    $dob = $_POST['dob'];

                    // $sql = "INSERT INTO `reg`. `reg` (`username`, `dob`) VALUES ('$username', '$dob');";

                    // echo $sql;

                    // if($con->query($sql) == true){
                    //     echo "Successfully inserted";}
                    // else{
                    //     echo "ERROR: $sql <br> $con->error";
                    // }
                    //     $con->close();

                        $db=mysqli_select_db($con,"mini6");
$query="insert into reg3 values('$username','$dob')";
if(!($query))
{
die("error in connecting to DB");
}
else
{
print "<i style='color:green'>Thanks,your information is saved successfull</i><br />";
}
mysqli_query($con,$query);
                    // }
                    ?>