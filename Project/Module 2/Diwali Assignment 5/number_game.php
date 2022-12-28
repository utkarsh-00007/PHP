
<?php

$guess= $_POST['choice'];
    
    
$random_num=rand(10,100);

    
if($guess>$random_num ){
    echo "Guess is higher."."<br>";
    echo "The correct number is $random_num";
    header("refresh: 5,url=number_game.html");
    
}else if($guess<$random_num){
    echo "Guess is less."."<br>";
    echo "the correct number is $random_num";
    header("refresh: 5,url=number_game.html");

}else{
    echo "Guess is correct.<br> The End!";
}



?> 