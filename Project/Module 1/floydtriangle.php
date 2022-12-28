<?php


/*
Floyd Triangle :
1
2,  3,
4,  5,  6,
7,  8,  9,  10,
11, 12, 13, 14,  15,
*/

$num=12;
$value = 1;
echo "<table align = 'center' border= '3px' cellpadding='5px' cellspacing='0px'>";
for($i = 1; $i <= $num; $i++){
    echo "<tr>";
    for($j = 1; $j <= $i; $j++)
    {
        echo "<th>";
        echo "$value";
        $value++;
        echo "</th>";
    }
    echo "</tr>";
}
echo "</table>";
?>