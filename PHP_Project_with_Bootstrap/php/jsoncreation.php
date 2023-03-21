<?php

// extracting number of questions
$n = $_POST['NumberOfQuestion'];

// extracting the content of the json file
$data = file_get_contents('../jsonfiles/answers.json');

// decoding a json file into an array
$json = json_decode($data);

$json = null;

// creating an empty json file 
file_put_contents('../jsonfiles/answers.json', $json);

// creating an array object
$array = array();

// if we pass an array to json_encode method then it will convert it into a json string
$json = json_encode($array);

// appending the json strings to an array
file_put_contents('../jsonfiles/answers.json', $json);

?>