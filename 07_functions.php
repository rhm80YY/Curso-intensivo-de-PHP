<?php
// simple function
function myFunction() {
    echo "Hello world!" . "<br>";
}
myFunction();   


// function with parameters
function myFunction2($fname, $lname) {
    echo $fname . " " . $lname. "<br>";
}
myFunction2("John", "Doe");

// Parameter with default value
function myFunction3($fname = "John", $lname = "Doe") {
    echo $fname . " " . $lname. "<br>"; 

}   
myFunction3();

// Return from function
function multiply($a, $b) {
    return $a * $b;
}
$result = multiply(2, 3);
echo $result;   


