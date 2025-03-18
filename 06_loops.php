<?php
// For loops
for ($i = 0; $i < 10; $i++) {   
    echo $i . " ";
}
// While loops
$i = 0;
while ($i < 10) {
    echo $i . " ";
    $i++;
}
// ForEach loops
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo $fruit . " ";   
}