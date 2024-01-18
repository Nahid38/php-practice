<?php
$fruit=["orange","banana","garps"];
$veggie= ["red","green","blue"];
$newArray=array_combine($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";