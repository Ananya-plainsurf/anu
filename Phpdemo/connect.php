<!-- table database connection-->
<?php
$servername ="localhost";
$username ="root";
$password ="123";
$db ="useraccount";

//check connection
$conn = new mysqli($servername, $username,$password,$db);
if(!$conn)
{
die("Error on the Connection". $conn->connect_error); 
}




?>
