<?php
$fruit=['a'=>"orange",'b'=>"banana",'c'=>"garps"];
$veggie=['b'=> ['color'=>["red","green","blue"]],

        'e'=>"pea"];
$newArray=array_merge_recursive($fruit,$veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";