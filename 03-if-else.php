<?php
// Find maximum between two numbers

echo "1. Find Maximum between two numbers <br> <br>";
$a = 40;
$b = 45;

echo "a = " . $a . "<br>";
echo "b = " . $b . "<br>";
if ($a > $b) {
    echo "a is greater than b";
} elseif ($a == $b) {
    echo "a and b are equal";
} else {
    echo "b is greater than a";
}
echo "<br> <br> <b>###### Program Ends Here ######</b> <br> <br>";


echo "2. Check if a number is +ve, -ve or zero <br> <br>";

$num = 0;
echo "num = " . $num . "<br>";

if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Number is zero";
}
echo "<br> <br> <b>###### Program Ends Here ######</b> <br> <br>";

echo "3. program to check whether the alphabet is vowel or consonant. <br> <br>";


$vowelsstr = 'aeiouAEIOU';
$constr = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
$alphabet = "u";

echo "Alphabet = " . $alphabet . "<br>";

if (strpos($vowelsstr, $alphabet)) {
    echo "The alphabet \"" . $alphabet . "\" is a <b>vowel</b>";
} elseif (strpos($constr, $alphabet)) {
    echo "The alphabet \"" . $alphabet . "\" is a <b>consonant</b>";
}

echo "<br> <br> <b>###### Program Ends Here ######</b> <br> <br>";

echo "4. program to check whether a character is uppercase or lowercase <br> <br>";

$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase = "abcdefghijklmnopqrstuvwxyz";

$query = 'a';
if (strpos($uppercase, $query)) {
    echo "Your alphabet \"" . $query . "\" is uppercase";
} elseif (strpos($lowercase, $query)) {
    echo "Your alphabet \"" . $query . "\" is lowercase";
}

echo "<br> <br> <b>###### Program Ends Here ######</b> <br> <br>";
