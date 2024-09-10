<?php
$data = file_get_contents("data.json");
// print_r($data); //print in json format

$arr = json_decode($data, true);
print_r($arr);
echo $arr["Phone"][0] . "<br>";
echo $arr["Phone"][1];
