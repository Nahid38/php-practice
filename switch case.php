<?php
$age=18;
switch(true){
    case ($age >=15 && $age <20):
    echo "You are Eligible";
    break;
    case ($age >=21 && $age <30):
        echo "Yor are not Eligible";
    break;
    default:
    echo "Enter the Valid age";

}