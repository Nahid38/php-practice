<?php
$member=[
    [1,"Nahid","Science","Dhaka"],
    [2,"Hasan","Arts","Bogra"],
    [3,"abul","Commerce","Jessor"]
];
foreach($member as $value){
    foreach($value as $value2){
    echo $value2 . " ";
    }
    echo "<br>";
};