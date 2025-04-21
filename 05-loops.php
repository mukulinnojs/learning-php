<?php
// Q1. Create a script that displays 1 2 3 4 5 6 7 8 9 10 on new line.

// Answer: 

$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

echo "<b>Question 1 ends </b> <br> <br>";

// Q2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.

// Answer: 

$sum = 0;
for ($i = 0; $i < 30; $i++) {
    $sum += $i;
}
echo "Sum of all the integers between 0 and 30 = " . $sum;

echo "<br> <br><b>Question 2 ends </b> <br> <br>";

// 3. Create a script to construct the following pattern, using nested for loop.

// *  
// * *  
// * * *  
// * * * *  
// * * * * *

// Answer: 

//outer loop that changes the lines
for ($i = 1; $i < 6; $i++) {
    //Inner loop that prints the stars
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br> <br><b>Question 3 ends </b> <br> <br>";


// For each loop 

$myarr = array(1, 2, 3, 4, 5);
foreach ($myarr as $item) {
    echo "$item <br>";
}


