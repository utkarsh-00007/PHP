<?php
if(isset($_POST["button1"])){
    $string1=$_POST["string1"];
    echo md5($string1);
}

if(isset($_POST["button2"])){
    $number1=$_POST["number1"];
    $decimal=$_POST["decimal"];
    $decimalpoint=$_POST["decimalpoint"];
    $separator=$_POST["separator"];
    echo number_format($number1,$decimal,$decimalpoint,$separator);
}

if(isset($_POST["convert"])){
    $string2=$_POST["string2"];
    echo ord($string2);
}

if(isset($_POST["trim"])){
    $string3=$_POST["string3"];
    $string4=$_POST["string4"];
    echo rtrim($string3,$string4);
}

if(isset($_POST["replace"])){
    $string5=$_POST["string5"];
    $string6=$_POST["string6"];
    $string7=$_POST["string7"];
    echo str_replace($string5,$string6,$string7);
}

if(isset($_POST["length"])){
    $string8=$_POST["string8"];
    echo strlen($string8);
}

if(isset($_POST["compare"])){
    $string9=$_POST["string9"];
    $string10=$_POST["string10"];
    echo strcasecmp($string9,$string10);
}

if(isset($_POST["search"])){
    $string11=$_POST["string11"];
    $string12=$_POST["string12"];
    echo strrpos($string11,$string12);
}

if(isset($_POST["lower"])){
    $string13=$_POST["string13"];
    echo strtolower($string13);
}

if(isset($_POST["binhex"])){
    $string14=$_POST["string14"];
    echo bin2hex($string14);
}





?>