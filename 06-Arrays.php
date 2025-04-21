<?php

//Associative arrays
// Associative arrays are used to establish association between related things.

echo " <b>Associative Arrays</b><br>";
$arr = array("Mukul" => 1, "Akash" => 2, "Aniket" => 3);
foreach ($arr as $key => $item) {
    echo "KEY = " . $key . "; Value = " . $item . "<br>";
}
echo " <br><b>MultiDimensional Arrays</b><br><br>";

$multiarr = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Printing the Matrix Using for loop<br> <br>";
for ($i = 0; $i < count($multiarr); $i++) {
    for ($j = 0; $j < count($multiarr[$i]); $j++) {
        echo $multiarr[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br><br>Printing the Matrix Using foreach loop<br> <br>";

foreach ($multiarr as $row) {
    foreach ($row as $col) {
        echo "$col ";
    }
    echo "<br>";
}
