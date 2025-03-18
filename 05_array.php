<?php
// Indexed Array
$fruits = array("apple", "banana", "cherry");
echo $fruits[0] . '<br>';
$fruits[3] = "orange";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Mixed Type Array
$mixArray = array("apple", "banana", "cherry", 1, true, 3);
echo '<pre>';
var_dump($mixArray);
echo '</pre>';

// Associative Array
$user = [
    'name' => 'John Doe',
    'age' => 30,
    'hobbies' => ['Coding', 'Reading', 'Swimming']
];
echo $user['name'] . '<br>';
echo '<pre>';
var_dump($user);
echo '</pre>';

