<?php

//Table from 2 to 20

$num=20;
// $num2=0;
echo "<table align = 'center' border='1px' cellpadding='3px' cellspacing='0px' >";
for($i=1;$i<=$num;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        $count = $i*$j;
        echo "<td>";
        echo "$i * $j =  $count ";
        // echo "<br>";
        // $num2++;
        echo "</td>";
        
    }
    echo "</tr>";
    // echo "<br>";
}
echo "</table>";

?>