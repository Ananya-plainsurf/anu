<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>
            Expressions and Operators
        </title>
    </head>
    <body>
<!--
        <h1 <?= 'style= "color:red;"' ?> >Exercise 1: How to Use the Operators</h1>
        <hr <?= 'style= "color:blue;"' ?>> 
        <h2>Add two numbers using Arithmetical Operators:</h2>
        <?php
        $first1 = 10;
        $second1 = 20;
        $add = $first1 + $second1;
        echo $add;
        //Assignment Operator
        $first1 += $second1;
        echo "<br>", $first1;
        ?>

        <h2>Find Student passed or failed using Conditional Operators:</h2>
        <?php
        $marks = 34;
        $passing = 35;
        echo ($marks >= $passing) ? "Student is Passed with $marks" : "Student is Failed with $marks as passing is $passing";
        ?>

        <h2>Show a number is even or odd using Comparison Operators:</h2>
        <?php
        $even = 118;
        $odd = 2;
        $div = $even % $odd;
        echo ($div == 0) ? "$even is an Even number" : "$even is an Odd Number";
        ?>

        <h2>Check if user has access and login rights using Logical Operators:</h2>
        <?php
        $access = FALSE;
        $right = FALSE;
        echo ($access && $right) ? "Access is Granted " : "Access is Denied";

        $login = TRUE;
        $acc = false;
        echo ($login && $acc) ? "<br>Hello user" : "<br>hello guest u can login but cannot access the list";
        ?>

        <h2>Assign a integer value and increment by 10 using Assignment Operator:</h2>
        <?php
        $num = 20;
        $sum = 30;
        $num += $sum;
        echo $num;
        ?>

        <h1 <?= 'style="color:red;"' ?> >Exercise 2: How to Use the Operators</h1>
        <hr <?= 'style="color:blue;"' ?>
            <h2>Decrement a number using Decrement Operator:</h2>
            <?php
            for ($count = 20; $count >= 10; $count--) {
                echo "<br>" . $count;
            }
            ?>

        <h2>Show the negative of 5 using Bitwise Operator:</h2>
        <?php
        $fiv = 5;
        echo ~$fiv;
        $number -= 4;
        echo "<br>" . ~$number;
        ?>


        <h2>Execute a dos or linux command using Execution Operator:</h2>
        <?php
        echo `dir`;
        ?>

        <h2>Raise and Error and control it using Execution Operators:</h2>
        <?php
        $qwe = 1 / 0;
        echo $qwe;
        echo $php_errormsg;
        ?>
        <h2>Show an example of Operator Precedence Operator:</h2>
        <?php
        $pre = 6 + 2 - 4 * 7;
        echo $pre;
        ?>-->
        <h1 <?= 'style="color:red;"' ?>>Exercise 3: Submission</h1>
        <hr <?= 'style="color:blue;"' ?>>
        <h2> 1) Show Examples using Arithmetical Operator</h2>
        <?php
        $q= 10+20;
        echo $q;
        
        $q1= 10-20;
        echo "<br>" . $q1;
        
        $q2= 10*20;
        echo "<br>" . $q2;
        
        $q3= 10/20;
        echo "<br>" . $q3;
        ?>
        <h2>2) Show Examples using Conditional Operator</h2>
        <?php
        $marks1 = 34;
        $passing1 = 35;
        echo ($marks1 >= $passing1) ? "Student is Passed with $marks1" : "Student is Failed with $marks1 as passing is $passing1";
        ?>
        <h2>3) Show Examples using Comparison Operator</h2>
        <?php
        $re=19%2;
        echo ($re == 0) ? "The number is Even " : "The number is Odd";
        ?>
        <h2>4) Show Examples using Logical Operator</h2>
        <?php
         $access = FALSE;
        $right = FALSE;
        echo ($access && $right) ? "Access is Granted " : "Access is Denied";
        ?>
        <h2>5) Show Examples using Assignment Operator</h2>
        <?php
        $one=10;
        $two=60;
        $one += $two;
        echo $one;
        
        $nam = "Annana";
        $nam .= ",";
        $nam .= "Mondal";
        echo "<br>". $nam;
        ?>
        <h2>6) Show Examples using Increment and Decrement Operator</h2>
        <?php
        $count=2;
        echo $count++;
        echo "<br>". $count;
        ?>
        <h2>7) Show Examples using Bitwise Operator</h2>
        <?php
        $first=1;
        $sec=2;
        echo $first | $sec;//if we take single "|" then it gives the value 
        echo $first || $sec;// if we take "||" then it gives answer in bit
        
        ?>
        <h2>8) Show Examples using Execution Operator</h2>
        <?php
        echo `dir`;
        ?>
        
        <h2>9) Show Examples using Error Control Operator</h2>
        <?php
        @$qw1 = 1 / 0;
        echo $qw1;
        echo $php_errormsg;
        ?>
       
    </body>
</html>
