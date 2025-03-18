<?php
// Single line comment
/*
    Multi line comment
*/  

// what is a variable
/*
string
integer
boolean
float or double
null

array
Object
Resource
*/

$name = 'John Doe';
$age = 20;
$isFather = true;
$money = 100.50;
$salary = null;

// Print the variables.
echo $name;
echo "Hello " . $name . "!<br>";
echo "Hello {$name}!<br>";
echo 'Hello $name! <br>';
echo $age."<br>";
echo $isFather."<br>";  //devuelve 1 si es true en la web y 0 si es false
echo $money."<br>";
echo $salary."<br>";
// Print types of variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isFather)."<br>";
echo gettype($money)."<br>";
echo gettype($salary)."<br>";
// Print the whole variable --Imprimir toda la variable
print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
// Change the value and print the type
$name = 32;
echo gettype($name);
echo "<br>";
// Variable checking functions
var_dump(is_string($name));
echo "<br>";
var_dump(is_string($age));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_bool($isFather));
echo "<br>";
var_dump(is_double($money));
echo "<br>";
var_dump(is_float($money));
echo "<br>";
// Check if variable is definied
var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($address));