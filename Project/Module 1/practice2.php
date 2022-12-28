<?php

// from array to do while for each loop 

// $data=["GaRry"=>89,"rohit"=>85,"tushar"=>10,12,18,22];
// $data=[1,2,3,1,4,3,2,5,4,33=>3];
// $data2=[10,20,30,40];
// $data3=["GaRry"=>89,"rohit"=>85,"tushar"=>10];
// print_r($data2);
// print_r($data3);
// var_dump($data2);
// var_dump($data3); // error it doesnt work on associative array
$ar1=[10,20,30,"garry"];
$ar2=[100,200,300,400];
// $rem=[10,"garry"];
// //1-uppercase 0-lowercase
// print_r(array_change_key_case($data,1));
// echo "<br>";
// echo "<br>";
// print_r(array_change_key_case($data,0));
// echo "<br>";
// echo "<br>";
// print_r(array_chunk($data,3));
// echo "<br>";
// echo "<br>";
// print_r(array_combine($ar1,$ar2));
// echo "<br>";
// echo "<br>";
// print_r(array_count_values($data));
// echo "<br>";
// echo "<br>";
// // print_r(array_column($data,"")); //not allowed
// //second arr will be made from element of Ist array
// print_r(array_diff($ar2,[5=>100,200]));
// echo "<br>";
// echo "<br>";
// print_r(array_diff($ar2,[100,200]));
// echo "<br>";
// echo "<br>";
// print_r(array_diff($ar1,$rem));
// echo "<br>";
// echo "<br>";
// $data=["GaRry"=>89,"rohit"=>85,"tushar"=>10,12,18,22];
// print_r(array_diff_assoc($data,["tushar"=>10,10]));
// echo "<br>";
// echo "<br>";
// print_r(array_diff_assoc($data,[10]));
// echo "<br>";
// echo "<br>";

// $data=["GaRry"=>89,"rohit"=>85,"tushar"=>10,45=>12,18,22];
$data=["GaRry"=>2,"rohit"=>3,"tushar"=>4,45=>1,5,6];
// $ar1=[10,9,8,"abc",2.005];
// $ar2=[100,200,300];
$ar1=[1,2,3,4,5,6,7,8];
$ar2=[100,200,300,400,500];
$rem=[10,"garry"];
$data1=["tushar"=>10];
// print_r(array_diff_key($data,$data1));
// print_r(array_diff_key($data,["tushar"=>10,45=>12]));
// echo "<br>";
// echo "<br>";
// $arrr=array_fill(5,3,89);
// print_r($arrr);
//pop work from end
// echo "<br>";
// echo "<br>";
// print_r(array_intersect($ar1,$ar2));
// print_r(array_sum($ar1));
// echo "<br>";
// print_r(array_product($data));
// echo "<br>";
// print_r(array_replace($ar1,$ar2,$data));
// echo "<br>";
// print_r(array_merge($ar1,$ar2,$data));
// echo "<br>";
// print_r(array_search(8,$ar1));
// print_r(array_splice($ar1,1,5,$ar2));
// echo "<br>";
// print_r($ar1);
// echo "<br>";//insert values from 1 to 2nd array
// print_r($ar2);
// print_r(array_slice($ar1,1,3));
//sort,rsort,ksort,krsort(ascending,descending,associative: ascending on basis of key)
// $cars=array("Volvo","BMW","Toyota",226);
// sort($cars);
// print_r($cars);
// $temp_files = array("temp15.txt","Temp10.txt",
// "temp1.txt","Temp22.txt","temp2.txt");

// natsort($temp_files);
// echo "Natural order: ";
// print_r($temp_files);
// echo "<br />";

// natcasesort($temp_files);
// echo "Natural order case insensitve: ";
// print_r($temp_files);
//asort:on basis of values
// echo "<br>";
// sort($ar1);
// rsort($ar1);
// ksort($data);
// asort($data);
// print_r($data);
// $data=["GaRry"=>89,"rohit"=>85,"tushar"=>10,12,18,22];
// $ar1=[10,9,8,7,6,5,4,3];
// $ar2=[100,200,300,400];
// $rem=[10,"garry"];
// $data1=["tushar"=>10];
// asort($data);
// print_r($data);
//natcasesort()
// $val=5;
// if(sizeof($val)>-1){ //"null",0,-1,1
//     echo "Inside if ";
// }else{
//     echo "Inside else ";
// }
// echo "Outside if - else";

// int main()
// {
//     int val=5;
//     int vale=sizeof(val);
//     printf("%d",vale);
// if(sizeof(val)<-1){ //"null",0,-1,1
//     printf("Inside if ");
// }else{
//     printf("Inside else ");
// }

//     return 0;
// }

// loop counter : variable we initialize 
// test condition 
// counter updation 
// for each used over array(designed)
// while,do while,for,
//entry controlled loop : entry checked at entry time (for ,while) ,exit controlled loop(do while)
// $count =1;
// while($count<=10){
// echo "$count Hello";
// echo "<br>";
// echo "<br>";
// $count++;
// }

// do{
//     print("$count hello")."<br>";
//     $count++;
// }while($count <=10)
// echo "<table style='border 2px solid black;'>";
// $i=1;
// for($count =1;$count<=10;$count++){
//     echo "<tr>";
//     for($i=1;$i<=10;$i++){
//     $a=$count * $i;
//     print("$i * $count = $a ");
//     // echo "<br>";
//     }
//     echo "</tr>";
//     echo "<br>";
// }
// echo "</table>";
// echo "most distrubing element section H Sahil";
// $marks=array();
// $marks=[];
// echo count($marks);
// print_r($marks);
// var_dump($marks);


// $arr = array(1, 2, 3, 4);
// foreach ($arr as &$value) {
//     // $value = $value * 2;
//     echo $value;
// }

// $a = array(
//     "one" => 1,
//     "two" => 2,
//     "three" => 3,
//     "seventeen" => 17
// );

// foreach ($a as $key => $value) {
//     echo "\$a[$key] => $value.\n";
// }











?>