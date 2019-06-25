<?php

//session_start();

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "useraccount";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo"connected succesfully";


if (isset($_POST['submit'])) {
    $username = $_POST["user"];
    $password = $_POST["password"];

    $query = "SELECT user,password FROM login WHERE user='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
 
 if($row){
   
            header("location:/table.php", 301);

            }
            
            
       // if ($row['username' == $username]) {

          /*  $cookie_name = "username";
            $cookie_value = "$username";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $_SESSION['username'] = '$username'; */

         //}
    
 else {
        header("location:/index.php", 301);
    }
    
}


 

?>





