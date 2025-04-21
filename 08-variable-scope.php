<?php
$a = 10; //Global Variable

function printNum()
{
    // $a = 11; //Local Variable
    global $a; //global keyword is used in php to access global scope variables
    echo "The value of a is $a <br>";
}

printNum();
echo "<br> The value of the global variable is $a<br><br>";


echo var_dump($GLOBALS); //Prints all the global variables
echo "<br>";
echo "<br>";
echo ($GLOBALS["a"]); //Prints the value of global variable a in the current file
