<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//variable declaration
$name = "helloooo php";
$message = 1;
//echo $message . "<br>";
$message = "i am learning php very head to seal job";

echo "Name to the variable = $name "."<br>";
echo "$message" . "<br>";//here i have comented the $message 
//so it check 1st $message and then 2nd $message .. 
//NOTE: Php always prints the 2nd message is the variable name is same

//define into string as integer php supports string an integer

$length = "10";
$breadth=20;
$area = $length * $breadth;
echo "Area = $area " . "<br>";

//php is case sencitive



$Name = "php says hello to every one " . "<br>";
echo "$name is same as $Name" . "<br>";

//local variable
$open= "John Smith";
function print_open(){
    //echo "$open". "<br>";
    /*it will give error over here because the nature of function is that it doesnot consider the 
     * value of variable out side the function ///////// and the value of variable inside the
     * function dies as soon as the function ends
     */
    
    $open= "i have changed the value of $/open inside the function". "<br> ";
    echo "$open";
}
print_open();
echo "$open";


//global variables
function print_open1(){
    global $open;
    echo "<br>" . "i have used the value of $/open" ."<br>";
    //here i have used the global varable into php so that the variable can be used globaly
}
print_open1();

//static variable (to use the variable staticaly or increment it)

$count = 3;
function print_static(){
    static $count=4;// always remember the value of static variable shoud be declared and given there an tere not like global 1st declare and then give value
    echo $count . "<br>";
    $count = $count + 1;
    
}
print_static();
print_static();
print_static();
print_static();

//prdefined variable

function predefine(){
    echo $GLOBALS['name' ] . "<br>" ;
    echo $GLOBALS['message' ];
}
predefine();



