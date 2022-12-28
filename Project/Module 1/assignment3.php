<?php
// 1-
// echo strtoupper("Hello my name is Utkarsh");
// echo strtolower("Hello my name is Utkarsh");
// echo ucfirst("hello my name is Utkarsh");
// echo ucwords("hello my name is Utkarsh");

// 2-
// $string = '082307';
// echo substr(chunk_split($string, 2, ':'), 0, -1);

// 3-
// $string1="The quick black fox jumps over the white dog.";
// $string2="over";
// echo strstr($string1,$string2);
// // or
// $str1 = 'The quick brown fox jumps over the lazy dog.';
// if (strpos($str1,"over") !== false) 
//  {
//     echo "Present";
//  }else{
//     echo "Not Present";
//  }

// 4-
// $x =  100;
// var_dump($x);
// $str1 = (string)$x;
// var_dump($str1);

// 5-
// $string = "ak@creation.com";
// echo substr($string,12);

// 6-
// $value1=65.45;
// $value2=104.35;
// echo sprintf("%1.2f", $value1+$value2);

// 7-
// function password_generate($chars) 
// {
// //   $string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// $string = '1234567890';

//   return substr(str_shuffle($string), 0, 9);
// }
//   echo password_generate(8)."\n";
//   echo rand(10000000,100);

// 8-
// $x=0;
// $string = "the moon is round in shape";
// echo str_ireplace("the","That",$string,$x);
// echo $x;

// 9-
// $string1="facebook";
// $string2="faceboll";
// $string1 = 'facebook';
// $string2 = 'faceboll';
// $str_pos = strspn($string1 ^ $string2, "\0");
// $str_pos = strspn($string1,$string2);
// printf('First difference between two strings at position %d: "%s" vs "%s"',$str_pos, $string1[$str_pos], $string2[$str_pos]);


// 10
// $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// $arra1 = explode("\n", $str);
// var_dump($arra1);
 


?>