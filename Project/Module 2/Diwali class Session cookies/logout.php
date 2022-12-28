<?php
session_start();
if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
    echo "<script>location.href='login.html'</script>";

}
else{
    echo "<script>location.href='login.html'</script>";
}

?>