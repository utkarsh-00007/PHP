<?php
$text=$_POST['first'];
$email=$_POST['second'];
$password=$_POST['third'];
$radio=$_POST['fourth'];
$check=$_POST['fifth'];
$file=$_POST['sixth'];

if (isset($_POST['submit'])) {
    echo $text;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $password;
    echo '<br>';
    echo $radio;
    echo '<br>';
    echo $check;
    echo '<br>';
    echo $file;
    echo '<br>';
}




?>