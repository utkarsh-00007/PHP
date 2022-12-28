<?php

// numbers from 1-100

$num=1;
echo "<table align = 'center' border= '3px' cellpadding='3px' cellspacing='0px'>";
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        echo "<th>";
        echo "$num";
        $num++;
        echo "</th>";
    }
    echo "</tr>";
}
echo "</table>";

?>