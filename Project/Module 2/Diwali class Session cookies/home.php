<?php
$username = "admin@com";
$passw = "admin";
session_start();
if(isset($_SESSION['user']))
{
    echo "welcome"."<h3 style='color:red' align='right'>".$_SESSION['user']."</h3>";
    echo "<h4>You are scrolling home page data</h4>";
    echo "<a href='product.php'>Click here for navigate to Product Details Page</a>";
    echo "<br><a href='logout.php'><input type=submit name=logout value=logout></a>";

}
else{
    if($username == $_POST['uname'] and $passw == $_POST['psw'])
    {
        $_SESSION['user'] = $username;
        echo "<script>location.href='home.php'</script>";
    }
    else{
        
        echo "<script>alert('invalid username and password!!!')</script>";
        echo "<script>location.href='login.html'</script>";
    }
}



?>