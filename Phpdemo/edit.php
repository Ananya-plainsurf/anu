<?php
include_once 'connect.php';
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE users1 set id='" . $_POST['id'] . "', pname='" . $_POST['pname'] . "', gmember='" . $_POST['gmember'] . "', gm_name='" . $_POST['gm_name'] . "' ,startdate='" . $_POST['startdate'] . "' ,enddate='" . $_POST['enddate'] . "' ,status='" . $_POST['status'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM users1 WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update Project info</title>
    </head>
    <body>
        <form name="frmUser" method="post" action="">
            <div>
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </div>
            <div style="padding-bottom:5px;">
                <a href="table.php">project info</a>
            </div>
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
    </body>
</html>