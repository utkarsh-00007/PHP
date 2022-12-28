<?php
session_start();
if(!isset($_SESSION['count']))
$_SESSION['count']=rand(1,100);
?>

<?php
if(isset($_POST['b1']) || isset($_POST['b2']))
{

   echo "<form action='AA.php' method='post'>";
   echo "<input style='height: 50px;width: 200px  margin-left: 500px margin-top: 250px' type='text' name='t1'>";
   echo "<input style='height: 50px;width: 100px  margin-left: 500px margin-top: 250px' type='submit' value='Check' name='b2'>";
   echo "</form>";
}
?>

<?php
if(isset($_POST['b2']))
{
       
   $a=$_SESSION['count'];
$ar = $_POST['t1'];
   for($i=1;$i<=1;$i++){
       if ($ar < $a) {
           echo "<h1 style='font-size:17px'>Your Number Is Small</h1>";
       }
       elseif ($ar > $a) {
           echo "<h1 style='font-size:17px'>Your Number Is Higher</h1>";
       }
       else{
           echo "<h1 style='font-size:17px'>Your Data Is Correct</h1>";
           session_destroy();
           break;

       } 
   }
   
}
?>