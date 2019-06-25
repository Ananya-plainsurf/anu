<html>
    <head>
        <title>create json file</title>
    </head>
    <body>
<div style="padding-bottom:5px;">
                <a href="table.php">project info</a>
            </div>
    
<?php  
 //  
 function get_data()  
 {  
      $connect = mysqli_connect("localhost", "root", "123", "useraccount");  
      $query = "SELECT * FROM users1";  
      $result = mysqli_query($connect, $query);  
      $employee_data = array();  
      while($row = mysqli_fetch_array($result))  
      {  
           $employee_data[] = array(  
                'email' => $row["email"],
	'pname' => $row["pname"],
	'gmember' => $row["gmember"],
	'gm_name' => $row["gm_name"],
	'startdate' => $row["startdate"],
	'enddate' => $row["enddate"],
	'status' => $row["status"] 
           );  
      }  
      return json_encode($employee_data);  
 }  
 $file_name =  "data.json";  
 if(file_put_contents($file_name, get_data()))  
 {  
      echo $file_name . ' File created';  
 }  
 else  
 {  
      echo 'There is some error';  
 }  
 ?> 
</body>
</html>