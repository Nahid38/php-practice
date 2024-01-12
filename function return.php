<?php
/*function hello($Fname,$Lname){
    $v= "$Fname $Lname";
    return $v;
}
echo hello("Nahid","Boss");*/

function sum($math,$eng,$bang){
    $a=$math+$eng+$bang;
    return $a;
}
function percentage($st){
    $per= $st / 3;
    echo $per;

}
$total=sum(10,20,30);


percentage($total);
echo $total;
