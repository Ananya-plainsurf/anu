
<!-- registration database file-->
<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "useraccount";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo"connected succesfully ";


$email = $_POST['email'];
$pname = $_POST['pname'];
$gmember  = $_POST['gmember'];
$gm_name = $_POST['gm_name'];
$startdate = $_POST['startdate'];
$enddate= $_POST['enddate'];
$status= $_POST['status'];
$password= $_POST['password'];

 $query = "INSERT INTO users1(email,pname,gmember,gm_name,startdate,enddate,status,password)VALUES('$email','$pname','$gmember','$gm_name','$startdate','$enddate','$status','$password')";
            if (mysqli_query($conn, $query)) {
                echo " records saved";
            } else {
                echo'not saved';
            }
    ?>