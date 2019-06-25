                         
<html>
    <head>
        <title>Load Json file</title>
    </head>
    <body>
        <div style="padding-bottom:5px;">
            <a href="table.php">project info</a>
        </div>

        <?php
        $data = file_get_contents("data.json");
        $array = json_decode($data, TRUE);
        /* echo '<pre>';
          print_r($data);
          echo '</pre>'; */

        foreach ($array as $row) {
            echo "Project Name : ";
            echo $row['pname'];
            echo '<br>' . $row['email'] . '<br>' . $row['gmember'] . '<br>' . $row['gm_name'] . '<br>' . $row['startdate'] . '<br>' . $row['enddate'] . '<br>' . $row['status'] . '<br>' . '</br>';
        }
        ?>

    </body>
</html>