<?php
$name=$_POST['uname'];
$passwr=$_POST['psw'];

// echo $name;
// echo $passwr;
$connection=mysqli_connect("localhost","root","","extraclass");
if(!$connection){
    die("Problem in connection");
}

if(isset($_POST['save'])){
    // echo "Write insert query";

   $insert_query= "INSERT INTO userdata(uname,passw) VALUES('$name','$passwr')";
   if(mysqli_query($connection,$insert_query)){
        echo "successful";
        header("refresh: 5,url=form.html");
   }else{
    echo "Unable to Register";
    }

}


if(isset($_POST['display'])){
    // echo "Write Display query";

    $display_query="SELECT * FROM userdata";
    $data=mysqli_query($connection,$display_query);
    var_dump($data);
    echo "<br>";
    echo "<br>";
    if (mysqli_num_rows($data)>0) {
        while ($result = mysqli_fetch_assoc($data)) {
            //single dimension associative array: $result;
            //$result=['id'=>114, 'uname'=> utkarsh,'passw'=>123456];
            //use table tag for alignment
            echo $result['id'];
            echo " ";
            echo $result['uname'];
            echo " ";
            echo $result['passw'];
            echo "<br>";
        }
    }else {
        echo "no record found";
    }
}




?>