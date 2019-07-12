<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Table</title>
        <link rel="stylesheet" href="../assets/css/style_table.css" type="text/css"> 
    </head>
    <body>
        <table action=" " id="project" align="center">
            <div>
                <div class="body-content">
                    <div class="module">
                        <div class="row">
                            <div class="col-md-6">

                                <tr>
                                    <th colspan="9">
                                        <h2>Project List</h2>
                                    </th>
                                </tr>

                                <tr>

                                    <th>Email</th>
                                    <th>Project Name</th>
                                    <th>Group Members</th>
                                    <th>Members name's</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Acton</th>
                                </tr>
                                <?php
                                include_once '../Controller/control.php';
                                ?>


                                <?php
                                $data = new display;
                                $post_data = $data->select('user');
                                //  print_r($post_data);
                                foreach ($post_data as $row) {
                                    ?>
                                    <tr class="<?php if (isset($classname)) echo $classname; ?>">

                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['pname']; ?></td>
                                        <td><?php echo $row['gmember']; ?></td>
                                        <td><?php echo $row['gm_name']; ?></td>
                                        <td><?php echo $row['startdate']; ?></td>
                                        <td><?php echo $row['enddate']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><a href="../View/edit.php?update_table=1&id=<?php echo $row["id"]; ?>">Update</a></td>
                                        <td><a href="delete.php?delete_table=1&id=<?php echo $row["id"]; ?>">Delete</a> </td>
                                    </tr>
                                    <?php
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
        </table>
    </body>
</html>
