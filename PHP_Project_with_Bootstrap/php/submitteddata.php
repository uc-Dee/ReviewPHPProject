<?php

// retriving the value of the question number using http post method
$que = $_POST['questionNo'];

// Retriving the value of the choice using http post method
$ans = $_POST['choice'];

// Storing the value of the answer.json file in the old variable
$old = file_get_contents('answer.json');

// Decoding the json file in the form of an array
$array = json_decode($old);

// First we are matching the data of array in the form of a json file and then we are again converting it in the form of an array
$array = json_decode(json_encode($array), true);

echo "<br>";

// 
if($ans != -1)
$array[0][$que] = $ans; 
$name = "answer";
$file_name = $name . '.json';
file_put_contents("$file_name", json_encode($array));

?>