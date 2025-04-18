<?php
//Variables
$name = "Innojs";
echo "Hello from $name";
echo "<br>";

//DataTypes
echo "**Datatypes**";
echo "<br>";
echo "<br>";
// 1. Integers
echo "//1. Integers";
echo "<br>";
echo "<br>";
$num1 = 25;
$num2 = 10;
echo "num1 = " . $num1;
echo "<br>";
echo "num2 = " . $num2;
echo "<br>";
echo "Datatype of num1 is: ";
echo var_dump($num1);
echo "<br>";
echo "num1 - num2 = " . $num1 - $num2;
echo "<br>";
echo "<br>";

// 2. Strings
echo "//2. Strings";
echo "<br>";


$string1 = "Mukul";
echo "The value inside string1 is = " . $string1;
echo "<br>";
echo "Datatype of string1 is: ";
echo var_dump($string1);
echo "<br>";


echo "<br>";

// 3. Float
echo "//3. Floats";
echo "<br>";
$float1 = 10.5;
$float2 = 11.5;

echo "<br>";
echo "float1 = " . $float1;
echo "<br>";
echo "float2 = " . $float2;
echo "<br>";
echo "Datatype of float1 is: ";
echo var_dump($float1);
echo "<br>";
echo "<br>";

// 4. Boolean
echo "//4. Boolean";
echo "<br>";
$bool1 = true;
$bool2 = false;
echo "<br>";
echo "bool1 = " . $bool1; //Outputs 1
echo "<br>";
echo "bool2 = " . $bool2; //This will "NOT" output 0 because false is a boolean value and it returns "" (an empty string) for false.
echo "<br>";
echo "Datatype of bool1 is: ";
echo var_dump($bool1);
echo "<br>";
echo "Datatype of bool2 is: ";
echo var_dump($bool2);
echo "<br>";
echo "<br>";


//5. Arrays 
echo "//5. Arrays";
echo "<br>";
echo "<br>";
$array1 = array(1, 2, 3, 4, 5);
echo "Value at index 0 = " . $array1[0];
echo "<br>";
echo "Value at index 1 = " . $array1[1];
echo "<br>";
echo "Value at index 2 = " . $array1[2];
echo "<br>";
echo "Datatype of array1 is: ";
echo var_dump($array1);
echo "<br>";
echo "<br>";

//6. Null 
echo "//6. NULL";
echo "<br>";
echo "<br>";
$nullvar = NULL;

echo "Datatype of nullvar is: ";
echo var_dump($nullvar);
echo "<br>";
echo "<br>";
?>