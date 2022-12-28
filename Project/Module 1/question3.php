<?php
function decimalToBinary($n){
    echo decbin($n) . "<br>";
}
function binaryToDecimal($n){
    echo bindec($n) . "<br>";
}
$n = 25;
echo decimalToBinary($n)."<br>";

$num = 1001001;
echo binaryToDecimal($num)."<br>";

$fnum=225.129;
echo sprintf("%0.8f",$fnum)."<br>";
echo sprintf("%0.2f",$fnum)."<br>";
echo sprintf("%0.0f",$fnum);
?>