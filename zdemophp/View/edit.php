<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
include_once '../Controller/control.php';
?>
<html>
    <head>
        <title>Update Project info</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    </head>
    <body>
        
        <a href="table.php" class="btn btn-primary">project info</a>
        <form name="frmUser" method="post" action="../Model/edit_t.php">
            <div>
                <?php
            if (isset($_GET["update"])) {

                $id = $_GET["id"] ?? null;
                $where = array("id" => $id,);
                $row = $data->select_record("user", $where);
               
                ?>
               
                
                </div>
                
            <h2> Update List</h2>
                Username: <br>
                <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                <input type="text" name="id"  value="<?php echo $row['id']; ?>">
                <br>
                Project Name: <br>
                <input type="text" name="pname" class="txtField" value="<?php echo $row['pname']; ?>">
                <br>
                Group Members :<br>
                <input type="text" name="gmember" class="txtField" value="<?php echo $row['gmember']; ?>">
                <br>
                Members name's:<br>
                <input type="text" name="gm_name" class="txtField" value="<?php echo $row['gm_name']; ?>">
                <br>
                Start Date:<br>
                <input type="text" name="startdate" class="txtField" value="<?php echo $row['startdate']; ?>">
                <br>
                End Date:<br>
                <input type="text" name="enddate" class="txtField" value="<?php echo $row['enddate']; ?>">
                <br>
                Status:<br>
                <input type="text" name="status" class="txtField" value="<?php echo $row['status']; ?>">
            <br>
            <input type="submit" name="submit" value="Submit" class="buttom">

        </form>
        <?php
            }
            ?>
    </body>
</html>
