<!-- My demo test of 1st weak of php-->
<html>
    <head>
        <title>I am learning php</title>
        <script type="text/javascript">
<?=
'alert("The php Experiment");';
?>
        </script>
    </head>
    <body>
        <h1 <?= 'style="color:blue;"' ?>> I am having php demo</h1>
        <hr <?= 'style="color:green;"' ?>>
        <?php
        echo "<p> Here i am having php demo. Because i am having a weekness of forgeting many things so i am checking whether i can remember things or not. As, i wanna
        learn many things testing my self is important</p>";
        ?>
<?php "<p>" ?>
        hello there i am learning php for myself using udmey.
<?php "</p>" ?>
        <h1<?= 'style="color:Blue;"'?>>Here we will be using Local,Global and static Variables </h1>
<hr <?='style="color:green;"'?>>
<?php
// variables
$name="Sachin";
$age= 23;
$work="Army officer";
echo "$name is an $work and his age is $age .<br> ";
//function
function print_name1(){
    $name= "Asha";
    $age="20";
    echo "<br> $name is the sister of Sachin and her age is $age .";
}
print_name1();
?>
<?php
//local variable
$name ="ashwini";
function name(){
    $name="php!";
    echo "$name is the language that i am learning";
}
echo "<br>$name is learning $name<br>";//eg of local variable where local variable doesnot work in the function so t include the local variable into function we need to add Global variable
name();
?>

<?php
//global variable
global $name1, $last1;
$name1="Annana";
$last1="Mondal";
function php(){
//    echo "<br>$name1 $last1 is learning php!";// here the prblm is the function hasent recognized about the $name and $last so we have to declare global variable here even

    global $name1, $last1;
    echo "<br> $name1 $last1 is learning php! <br>";
}
php();
echo "<br><br>$name1 $last1 will be learning many languages at a time and she will do that!!!!<br>";
?>

<?php  
//stactic variables (so here we will be adding number of counts)
function counter1(){
//    $count1=1;//so here as in output we can see that the $count is taking only 1 count but is not taking +1 so here comes the role of static variable
  static $count1=1;
    echo "<br>Count Multiplication=$count1<br>";
    $count1=$count1+1;
    echo "<br> Count =$count1";
    $count1=$count1*2;
}
counter1();
counter1();
counter1();
counter1();
counter1();

?>
    </body>
</html>