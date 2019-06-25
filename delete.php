<!-- delete file -->
<?php
$conn=new mysqli('localhost','root','123','useraccount');
//check connection

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
            
}
echo "";

$sql = "delete FROM users1 WHERE id = '$_GET[id]'";

if(mysqli_query($conn, $sql)){
    header("refresh:1;url=table.php");
}
else{
    echo"not deleted";
}