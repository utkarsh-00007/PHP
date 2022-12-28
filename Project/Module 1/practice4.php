<?php
// echo sprintf("aakash");
// $a=sprintf("aakash");
// echo $a;
// $a=10;
// $b="8a";
// echo $a+$b;

// function checkNum($num)
// {
//     $rem = 0;
//     $sum = 0;
//     while ($num > 0) {
//         $rem = $num % 10;
//         $sum = $sum + ($rem * $rem);
//         $num = intval($num / 10);
//     }
//     return $sum;
// }
// // $num = readline("Enter the number: ");
// $num =82;
// $n = $num;
// while ($n != 1 && $n != 4) {
//     $n = checkNum($n);
// }
// if ($n == 1)
//     print($num . " is a happy number");
// else if ($n == 4)
//     print($num . " is not a happy number");

// $a=0;
// $a=5>2?$b=6:$b=8;
// print("$a $b");

// if(4>5)
//     print("hurray..\n");
//     print("yes");
// declare(strict_types=1);
// function gla_work(string $val_one,$val_two){
//     $value=printf("%x","$val_one");
//     echo $value;
//     echo "<br";
//     if($value <> $val_two AND $value==1){
//         $data=str_split("$val_one",1);
//         asort($data);
//         foreach($data as $new_data){
//             echo $new_data;
//             echo "<br>";
//         }
//     }else {
//         $data=str_split("$val_one",1);
//         ksort($data);
//     }
//     $data=implode(" ",$data);
//     echo count_chars($data,3)."<br>";
//     print_r(count_chars($val_one,3));
//     echo "<br>";
//     return $val_two+$value;
// }
// var_dump((float)gla_work("WELcome Phpexam",85));

// $value=printf("%x","WELcome Phpexam");
// echo $value;

// for ($i=1; $i < 100; $i++) { 
//     if ($i %3==0 && $i%5==0) {
//         echo "FULLSTACK ";
//     }elseif ($i%3==0) {
//         echo "FRONTEND ";
//     }elseif ($i%5==0) {
//         echo "BACKEND ";
//     }else {
//         // echo $i;
//         continue;
//     }
// }


// PHP program to find largest among four
// numbers using ternary operator 
// variable declaration
// Largest among n1, n2, n3 and n4
// Print the largest number


// $n1 = 15;
// $n2 = 20;
// $n3 = 25;
// $n4 = 30;
// $max = ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) ?
//              $n1 : (($n2 > $n3 && $n2 > $n4) ?
//              $n2 : ($n3 > $n4 ? $n3 : $n4));
// echo "Largest number among ". $n1. ", ". $n2. ", ".
//                   $n3.  " and ". $n4. " is " .$max;


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }


?>
