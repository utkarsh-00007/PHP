<?php
setcookie("hello","Utkarsh study in GLA",time()+3600);
// setcookie("hello",get_current_user(),time()+3600);
// setcookie("hello",getenv("REMOTE_ADDR"),time()+3600);
if(isset($_COOKIE['hello'])){
    echo $_COOKIE['hello'];
}else {
    echo "create";
}
?>