<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data.php" method="post">
        <table>
            <tr>
                <input type="submit" name="submit" value="Start">
            </tr>
            <tr>
                <input type="reset" name="stop" value="Stop">
            </tr>
        </table>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    function password_generate($chars) 
    {

        $string = '1234567890';

        return substr(str_shuffle($string), 0, $chars);

    }
    $num1=password_generate(9);
    echo $num1;
    $num2=$num1;
    $num3=$num1%10;
    $num5=10;
    for ($i=0; $i < 5; $i++) { 
        $num2=$num2/10;
        $num4=$num2;
    
    }
    echo "<br>";
    $a=0;
    $b=10;
    while ($a <= 120) {
        
        echo (int)$num4." - ".$num5." + ". $num3;
        $num5=$num5+10;
        $num3=$num3*$num3;
        $a++;
        echo "<br>";
        // sleep($b);
        
    }
    header("refresh:120, url=data.php");
    
    
}
if (isset($_POST['stop'])) {
    die("Process Completed");
}

?>