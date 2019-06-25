<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM users1");
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Project Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <button type="button" onclick="window.location.href = 'index.php';" class="btn btn-primary" >
            Home
        </button>
        <div>
            <table action="connect.php" align="center" border="1px" style="width: 800px" line-height="80px">
                <div class="body-content">
                    <div class="module">
                        <div class="row">
                            <div class="col-md-6">
                                <tr>
                                    <th colspan="9">
                                        <h2>Projects Information</h2>
                                </tr>
                                </th>
                                <tr>

                                    <th>Email</th>
                                    <th>Project Name</th>
                                    <th>Group Members</th>
                                    <th>Members name's</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                                <?php
                                $i = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($i % 2 == 0)
                                        $classname = "even";
                                    else
                                        $classname = "odd";
                                    ?>
                                    <tr class="<?php if (isset($classname)) echo $classname; ?>">

                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo $row['gmember']; ?></td>
                                        <td><?php echo $row['gm_name']; ?></td>
                                        <td><?php echo $row['startdate']; ?></td>
                                        <td><?php echo $row['enddate']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                                        <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>

                                </table>

                                <button type="button" onclick="window.location.href = 'json.php';" class="btn btn-primary" >
                                    Export
                                </button>
                                <button type="button" onclick="window.location.href = 'load_json.php';" class="btn btn-primary" >
                                    Import
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </body>
</html>
