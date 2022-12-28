<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter the file name:</label>
        <input type="text" name="fname">
        <label>Enter the message:</label>
        <input type="textarea" name="msg">
        <label for="slct">Slect the task:</label>
        <select name="slct" id="slct">
            <option value="create">Create</option>
            <option value="read">Read</option>
            <option value="append">Append</option>
        <input type="submit" name="select" value="select">
    </form>
</body>
</html>

<?php

if(isset($_POST['select']))
{
$file_name=$_POST['fname'];
$message=$_POST['msg'];
echo "clicked";

$selected=$_POST['slct'];

if(($selected == "create"))
{
    if(!file_exists($file_name))
    {
        fopen($file_name,"a+");
        fwrite($file_name,$message);
        echo "file created";
    }
    else
    {
        echo"file already exists";
    }
}

if(($selected == "read"))
{
    if(!file_exists($file_name))
    {
        echo "File does not exists";
    }
    else
    {
       $handle=fopen($file_name,"r");
       echo fread($handle,filesize($file_name));
    }
}

if(($selected=="append"))
{
    $file=fopen($file_name,"a+");
    fwrite($file,$message);

}
}
else
{
    echo "not selected";
}
?>