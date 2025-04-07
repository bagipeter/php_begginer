<?php

//variables | változók

$name = "Balázs";
$age = 23;
$isFather = true;
$money = 33.200;
$salary = null; 

//print the screen | kiiratás

/* echo $name;
echo 'Üdv.' . $name . '<br>';
echo "Üdv. {$name} <br>";
echo $age . '<br>';
echo $isFather . '<br>';
echo $money . '<br>';
echo $salary . '<br>'; */

//print variables type | változotipusok kiiratása

echo gettype($name). "<br>";
echo gettype($age). "<br>";
echo gettype($isFather). "<br>";
echo gettype($money). "<br>";
echo gettype($salary). "<br>";

?>