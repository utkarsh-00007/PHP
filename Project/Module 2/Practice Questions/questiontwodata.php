<?php
$firstnum=$_POST["first"];
$secondnum=$_POST["second"];
$thirdnum=$_POST["third"];

$min=minimum($firstnum,$secondnum,$thirdnum);
echo "$min is minimum";

function minimum(int $firstnum,int $secondnum,int $thirdnum){
    $minnum= $firstnum<$secondnum?($firstnum<$thirdnum?$firstnum:$thirdnum ):($secondnum<$thirdnum?$secondnum:$thirdnum);
    return $minnum;
}

?>