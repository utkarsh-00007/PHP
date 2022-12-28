<?php

// Driver Code

$num = $_POST["adam"];
$e=checkAdamNumber($num);
if ($e==0){
    echo "Adam Number";
}
else{
    echo "Not a Adam Number";
}

// To check Adam Number
function checkAdamNumber($num)
{
    // Square first number and square
    // reverse digits of second number
    $a=pow($num,2);
    // echo $a;
    // echo "<br>";
    $b=strrev($num);
    // echo $b;
    // echo "<br>";
    $c=pow($b,2);
    // echo $c;
    // echo "<br>";
    $d=strrev($c);
    // echo $d;
    // echo "<br>";
     
    // If reverse of c equals a then
    // given number is Adam number
    if ($a == $d){
        return 0;
    }else {
        return -1;
    }
}

?>