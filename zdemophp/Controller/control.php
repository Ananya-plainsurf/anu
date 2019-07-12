<?php

include_once '../database/database.php';

class User extends Databases {

    public function insert($email, $pname, $gmember, $gm_name, $startdate, $enddate, $status, $password) {
        $ret = mysqli_query($this->con, "insert into user(email,pname,gmember,gm_name,startdate,enddate,status,password) values('$email','$pname','$gmember','$gm_name', '$startdate','$enddate','$status','$password')");
        return $ret;
    }

}

class database1 extends Databases {

    public function required_validation($field) {
        $count = 0;
        foreach ($field as $key => $value) {
            if (empty($value)) {
                $count++;
                $this->error .= "<p>" . $key . " is required</p>";
            }
        }
        if ($count == 0) {
            return true;
        }
    }

    public function can_login($table_name, $where_condition) {
        $condition = '';
        foreach ($where_condition as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        /* This code will convert array to string like this-  
          input - array(
          'id'     =>     '5'
          )
          output = id = '5' */
        $query = "SELECT * FROM " . $table_name . " WHERE " . $condition;
        $result = mysqli_query($this->con, $query);
        if (mysqli_num_rows($result)) {
            return true;
        } else {
            $this->error = "Wrong Data";
        }
    }

}

class display extends Databases {

    public function select($table_name) {
        $array = array();
        $query = "select *from " . $table_name . "";
        $result = mysqli_query($this->con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }

        return $array;
    }

}

class update extends Databases {

    public function record_select($table, $where) {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $query = "SELECT * FROM " . $table . " WHERE " . $condition;
        $result = mysqli_query($this->con, $query);
        return $row;
    }

    public function record_update($table, $where, $field) {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "= '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            $sql .= $key . "='" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " . $table . " SET " . $sql . " WHERE " . $condition;
        echo $sql;

        if (mysqli_query($this->con, $sql)) {

            return true;
        }
    }


    
        }

?>