<?php

// from basic to string, switch case,operators

/*
$num_one=30;
var_dump($num_one);
//  new_num=78;
define("fix_val",90);
var_dump(fix_val);
echo(print("Hello "));
$res=print(" hi ");
echo $res;
print("$res");
*/

/* 
if($num_one){
}else{
}
Section is full with brilliant students.
*/
// echo(print(print(printf("%x",printf("Php Examination")))));
// print(printf(printf("Php Examination")));
/*
$res=0;
$res=sprintf(printf("%x",print("Hello World")));
echo $res;
var_dump($res);
*/

/*
define("new_val",20);
$new_val = new_val + 5;
echo $new_val;
*/
/*
$sideA=3;
$sideB=4;
$sideC=5;
$sp=($sideA+$sideB+$sideC)/2;
$area=$sp*($sp-$sideA)*($sp-$sideB)*($sp-$sideC);
echo sqrt($area);
*/
/*
$a = 32;
echo var_dump($a) . "<br>";

$b = "Hello world!";
echo var_dump($b) . "<br>";

$c = 32.5;
echo var_dump($c) . "<br>";

$d = array("red", "green", "blue");
echo var_dump($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";

// Dump two variables
echo var_dump($a, $b) . "<br>";
*/

// $one=10;
// $two="8";
// echo var_dump($one + $two);
/*
lab 26 august ---------------------------------:
Strings in php :
1-Single quoted : never parse variable or escape sequence
2-double quoted : parse variable 
3-doc(documentation) syntax string : 
3.1-now syntax : single quotation
3.2-here syntax : double quotation -> default (if we dont use any quotation)

escape sequence in php :
\e,u,v : secondary working start 
*/
// $var='hello class';
// echo 'Value of variable\'s is : $var';
/*
$var='hello class welcome to "php" tutorial \'s class';

//nesting of single quotations
echo ' Value of variable is : $var <br>'; 

//nesting of  double quotations
echo " Value of \$ \"variable\" is : $var "; 
*/
//documentation string
/*
$var =<<<'identifier' 
...
...
...
identifier;
*/
/* no need to use quotation or escape sequence while using double quotation 
 where we write to big-big paragraph(large amount of text) with or without variables
*/
// echo <<<END
//     a
// END;
 /*
$num =5;
$var =<<<"mystring"
hello class welcome to php  <br>
"tutorial" $num
mystring;

echo $var;
*/
/*
Functions in string :-
*/
// $var= "hello class welcome to php 'tutorials' students";
// $var=68;
//needs string and list of character in string, add backslashes at that character
// echo addcslashes($var,"st"); 

//only 1 parameter string, add backslashes 
// echo addslashes($var);

//encoding functions of php , convert it into hexadecimal code(crypt)
// echo bin2hex($var); 

//print char of ascii value
// echo chr(104); 

//print string of ascii value
// echo ord($var);

//divide in small parts,needs 3 parameters, string length(length of chunks), separator(here commma) by default space
// echo chunk_split($var,4,',');

// $var= "hello class 'welcome' to php students";

//works with right end,terminates/deletes right character until that char appears at last
// echo chop($var,'st');// righttrim(rtrim)
//echo rtrim($var,'nst');

//works with left end,terminates/deletes left character until that char appears at last
// echo ltrim($var,'he');  
// echo trim($var,'hel');

// echo,print,printf,sprintf-string class
// printf($var); 
// print($var);
// print_r($var);
// $res=sprintf($var);
// echo $res;

//difference bw vardump and print_r in terms of array
// $arr=[10,20,40];
// var_dump($arr);
// echo "<br>";
// print_r($arr);
// echo "<br>";
// echo count_chars("ABCDE");


// default working is mod 2, rest 1,3
// echo ord(".");
// print_r(count_chars("FABCDE1FF",1)); //only ascii value
// echo "<br>";
// echo count_chars("FABCDE1FF",1);
// print_r(count_chars("FABCDEFF1",0)); //no of characters infront of ascii value character present in string rest O(Zero)
// echo "<br>";
// print_r(count_chars("FABCDEFF1",3)); // incresing order of values on basis of ascii value


// $var= "hello class 'welcome' to php students";
// print_r(explode("e","$var")); //dividde on basis of space or e(separator)
// echo implode("e",$var); //merge,(glue,pieces) 
// echo join(); // same as implode
// $var= "hello class 'welcome' to php students";
// //encoding 
// echo md5($var);
// echo sha1($var);
// echo convert_uuencode("utkarsh");
// $res= convert_uuencode("utkarsh"); //encode
// echo $res;
// echo convert_uudecode($res); //decode only uuencoded data
// echo crc32($var); //cyclic redundancy 
// echo crypt($var);
// echo sha1_file // encode file
// echo md5_file

// $var="Hello";
// // $var .= "Class";
// $var2 = " Class 1";
// echo $var.=$var2;
// $arr=[10,20,30,"10"=>800,78,25];
// $arr=[100,200,300,'56'];
// $arr_two=[100,200,300,56];
// var_dump($arr_two === $arr);
// $arr1 = ['a' => 'Apple', 'p' => 'Pineapple', 'k' => 'Kiwi'];
// $arr2 = ['p' => 'Pineapple', 'k' => 'Kiwi', 'a' => 'Apple'];
// var_dump($arr1===$arr2);
// $val=3;
// $res=print($val=2)?"yes":"No";
// echo $res;
// $name = $fullname ?? $first ?? $last ?? 'John';
// echo $name; // 'John';
// null coelscing operators
// var_dump(false ?? 'default');   // false
// var_dump(true ?? 'default');   // true
// var_dump('' ?? 'default');   // ""
// var_dump(0 ?? 'default');   // 0
// var_dump([] ?? 'default');   // array()
// var_dump(null ?? 'default');  
        // $a = 11; 
	    // $b = 25; 
	    // $c = 20; 
	    // // Swich allows expression 
	    // switch($a>$b AND $b>$c){ 
	    //     case TRUE: echo "$a is bigger"; 
	    //                break; 
	    //     case FALSE: switch($b>$c){ 
	    //         case TRUE: echo "$b is bigger"; 
	    //                    break; 
	    //         case FALSE: echo "$c is bigger"; 
	    //                     break; 
	    //     }     
	    // }


		// echo 9 <=> 8 ; // spaceship operators
?>