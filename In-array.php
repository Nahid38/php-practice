<?php
$food=array("Orange","banana","apple","55","grapes");
// same search query er jonno 3rd parameter use korte hobe
if(in_array(55,$food,true)){
    echo "Find Succcesfull";
}else{
    echo "Can't Find";
}
