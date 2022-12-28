<?php
// Chess board -------------------------
// echo"<table align='center' style='border-collapse:collapse'>";
echo "<table align='center' width='270px'>";
for($row=1;$row<=8;$row++)
{
    echo"<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
        {
            echo "<td style = 'border:2px solid;background-color:black; height:30px;width:30px'></td>";
        }
        else
        {
            echo "<td style = 'border:2px solid;background-color:white; height:30px;width:30px'></td>";
        }
    }echo"</tr>";
}
echo"</table>";
?>