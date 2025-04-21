<?php

function sum($a, $b)
{
    return $a + $b;
}

echo "<b>Using Sum Function</b><br><br>";
$a = 10;
$b = 5;
echo "$a" . " + " . $b . " = " . sum($a, $b) . "<br>";

function printTable($num)
{
    echo "<b><br><br>Printing the table for '$num' using printTable function </b> <br> <br>";
    for ($i = 1; $i < 11; $i++) {
        echo $num . " x " . $i . " = " . $num * $i . "<br>";
    }
}

//Calling the function
printTable(11);
