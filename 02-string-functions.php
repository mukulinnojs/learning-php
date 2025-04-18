<?php

//String Functions
echo "***String Functions**";
echo "<br>";
echo "<br>";


//1. strlen function
echo "1. strlen function:";
echo "<br>";

$name = "Mukul";
echo "name  = " . $name;
echo "<br>";

echo "The length of the string is = " . strlen($name);
echo "<br>";
echo "<br>";

//2. str_word_count function
echo "2. str_word_count function:";
echo "<br>";

$sentence = "lorem ipsum dolor frito";
echo "sentence  = " . $sentence;
echo "<br>";

echo "The word count of the string is = " . str_word_count($sentence);
echo "<br>";
echo "<br>";

//3. strrev function
echo "3. strrev function:";
echo "<br>";

$originalstr = "lorem ipsum dolor frito";
$reversedstr = strrev($originalstr);
echo "Original String  = " . $originalstr;
echo "<br>";

echo "Reversed String = " . $reversedstr;
echo "<br>";
echo "<br>";

//4. strpos function
echo "4. strpos function:";
echo "<br>";

$mystr = "frito lorem ipsum dolor";
$tofind = "lorem";
echo "String  = " . $mystr;
echo "<br>";

echo "position of \"" . $tofind . "\" in mystr = " . strpos($mystr, $tofind);
echo "<br>";
echo "<br>";

//5. strreplace function
echo "5. strreplace function:";
echo "<br>";

$ogstr = "frito lorem ipsum dolor";
$toreplace = "lorem";
$replacement = "Innojs";
echo " Original String  = " . $ogstr;
echo "<br>";

echo "Replaced string = " . str_replace($toreplace, $replacement, $ogstr); //This does not modify the original string, it returns a copy with the replacement.
echo "<br>";
echo " Original String  = " . $ogstr;
echo "<br>";
echo "Original string is not modified";
echo "<br>";
echo "<br>";

//6. str_repeat function
echo "6. str_repeat function:";
echo "<br>";

$word = "tralalero tralala <br>";
$repeatcount = 5;
echo "word  = " . $word;
echo "<br>";

echo "The string is repeated " . $repeatcount . " times:<br> " . str_repeat($word, 6);
echo "<br>";
echo "<br>";
