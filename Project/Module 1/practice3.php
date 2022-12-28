<?php
// questions

// declare strict_types = 1;

// $num=85;
// if($num>0){
//     echo ($num-1)%9+1;
// }else{
//     echo "0";
// }

// $arr=[1,2,3,4,6,7,8];
// $n = count($arr);
// $l = 0; $h = $n - 1;
 
//     while ($h > $l)
//     {
 
//         $mid = floor($l + ($h - $l) / 2);
//         if ($arr[$mid] - $mid == $arr[0])
//         {
//             if ($arr[$mid + 1] - $arr[$mid] > 1)
//                 return $arr[$mid] + 1;
//             else
//             {
//                 $l = $mid + 1;
//             }
//         }
//         else
//         {
//             if ($arr[$mid] - $arr[$mid - 1] > 1)
//                 echo "$arr[$mid] - 1";
//             else
//             {
//                 $h = $mid - 1;
//             }
//         }
//     }
 
//     // No missing element found
//     // return -1;
//     echo "-1";
// $arr=[1,2,3,6,7,8,12];
// $new=range(min($arr),max($arr));
// print_r(array_diff($new,$arr));
// $num=20;
// $num2=0;
// for($i=1;$i<$num;$i++){
    
//     for($j=0;$j<$i;$j++){
        
//         echo "$i ";
//         // echo "<br>";
//         // $num2++;
        
//     }
//     echo "<br>";
// }


// echo "<style>
// table, th ,td {
//   border: 4px solid black;
//   border-collapse : collapse;
//   padding: 30px;
// }
// </style>";

// // $num=12;
// $value = 1;
// echo "<table align = 'center'>";
// for($i = 1; $i <= 8; $i++){
//     echo "<tr>";
//     for($j = 1; $j <=8; $j++)
//     {
//         echo "<th>";
//         echo "$value";
//         $value++;
//         echo "</th>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// echo "<br>";

// echo "<table align = 'center' style='border:2px solid cadet blue; border collapse-collapse'>";
// for($i = 1; $i <= 8; $i++){
//     echo "<tr>";
//     for($j = 1; $j <=8; $j++)
//     {
//         // echo "<th>";
//         if(($i+$j) %2==0){
//         echo "<td style='border:2px solid cadet black; background-color : white>";
//         }else{
//             echo "<td style='border:2px solid cadet white; background-color : black>";
//         }
        
//         // echo "$value";
//         // $value++;
//         // echo "</th>";
//     }
//     echo "</tr>";
// }



// if(5){
//     break;//only in loop : break and continue
// }

// for ($i=1; $i <8 ; $i++) { 
//     for($count=1;$count<=8;$count++){
//         // echo "hi ";
//     if($i==4 or $i=2){
//         break;
//     }
//     echo $i.$count;
//     }
//     echo "<br>";
// }

// for ($i=1; $i <5 ; $i++) { 
//     for($count=1;$count<=5;$count++){
//         echo "inside outer loop ";
//     if($i==4 or $res=2){
//         echo "inside if ";

//         break 2; //parameter of break n : it breaks n no of nested loops
//         // same working for continue
//     }
//     echo $i.$count;
//     }
//     echo "outside inner loop ";

//     echo "<br>";
// }
// echo " loop termination";

// # define : # --> directive  define --> preprocessor

// function msg(){
//     // if(5)
//     echo "Hello";
// }

// msg();

// function msg(){
//     // if(5)
//     echo "Hello ";
// }

// msg();
// msg1(5,6);
// function msg1(int $a){
//     // if(5)
//     echo "Hello ";
// }
// function add1(){
//     $a=5;
//     $b=6;
//     $c=$a+$b;
//     echo $c;
//     echo $a+$b;
// }
// add1();
// //actual & formal

// function add(){
//     $a=5;
//     $b=8;
//     $c=$a+$b;
//     return $c;
// }
// // $u=add();
// // echo "$u";
// // echo $u;
// echo add(50,60);

// declare strict_types=1;

// declare strict_types = 1;

// echo add(50,60);
// function add($a,$b){
    
//     $c=$a+$b;
//     return $c;
// // }
// require_once("def.php");
// require_once("jkl.php");
// require_once("abc.php");

// declare(strict_types=1);
// function addNumbers(int $a,int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days");













?>