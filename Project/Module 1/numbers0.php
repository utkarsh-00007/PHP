<?php

echo "<table align = 'center' border= '3px' cellpadding='3px' cellspacing='0px'>";
for($i=0;$i<=9;$i++){
    echo "<tr>";
    for($j=0;$j<=9;$j++){
        $k=$i.$j;
        echo "<th>";
        echo $k;
        // $num++;
        echo "</th>";
    }
    echo "</tr>";
}

echo "</table>";

?>