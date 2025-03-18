<?php
// if-else + comparison operators
// ==, ===, != or <>, !==, <, >, <=, >=

$age = 10;
if ($age <= 12) {
    echo "Too young to watch Harry Potter" . "<br>";
} else if ($age < 15 ) {
    echo "You may watch Harry Potter" . "<br>";
} else {
    echo "You should watch Harry Potter" . "<br>";
}

// Logical operators
// && - and
// || - or
// ! - not

$age1 = 15;
$watched = true;
if ($age1 >= 15 && !$watched) {
    echo "You MUST watch Harry Potter" . "<br>";
}        

if ($age1 >= 15 || !$watched) {
    echo "You should watch Harry Potter" . "<br>";
}
// Switch statement

$day =3;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Not a valid day";
        break;
}

