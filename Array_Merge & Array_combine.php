<?php
$fruit=['a'=>"orange",'b'=>"banana",'c'=>"garps"];
$veggie=["carrot","pea"];
$newArray=array_merge($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";