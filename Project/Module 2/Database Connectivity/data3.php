<?php

$connection=mysqli_connect('localhost','root','','sectionh');
if(!$connection){
    die('Unable to establish the connnection');
}
if(isset($_POST['save'])){
    $name=$_POST["username"];
    $pass=$_POST["num"];
    $insert_query="INSERT into registration(uname,psw) values('$name','$pass')";
    if(mysqli_query($connection,$insert_query)){
        echo "success";
        header("refresh: 5,url=form3.html");
    }else{
        echo "fail";
    }
}
if(isset($_POST['display']))
{
    $display_query="SELECT * FROM registration";
    $data=mysqli_query($connection,$display_query);
    var_dump($data);
    echo "<br>";
    echo "<br>";
    if (mysqli_num_rows($data)>0) {
        while ($result = mysqli_fetch_assoc($data)) {
            echo $result['uname'];
            echo " ";
            // echo "||";
            echo " ";
            echo $result['psw'];
            echo "<br>";
        }
    }else {
        echo "no record found";
    }
}
if(isset($_POST['display']))
{

}

if(isset($_POST['display']))
{
    
}


?>