<?php

echo "<form action = 'code.php' method='POST'>
Numerator:<input type = 'number' name = 'num'><br><br>
Denominator: <input type = 'number' name = 'deno'><br><br>
<input type = 'submit' name='calculate' value='result'></form>";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $num = $_POST['num'];
    $den = $_POST['deno'];
    class NumberIsGreater extends Exception{
        function errorMessage(){
            return $this->getMessage();
        }
    }
    class NumberIsNegative extends Exception{
        function errorMessage(){
            return $this->getMessage();
        }
    }
    class NumberIsZero extends Exception{
        function errorMessage(){
            return $this->getMessage();
        }
    }    

    try{
        if($den==0){
            throw new NumberIsZero(message:"please provide a valid number except zero");
        }
        if($den>$num){
            throw new NumberIsGreater(message:"please give a valid to denominator i.e less than numerator");
        }
        if($den<0){
            throw new NumberIsNegative(message:"please provide a positive enter value greater than 0 and less");
        }
    echo $num/$den;
    }
    catch(NumberIsZero $ez){
        echo $ez->getMessage();

    }
    catch(NumberIsGreater $eg){
        echo $eg->getMessage();
    }
    catch(NumberIsNegative $en){
        echo $en->getMessage();
    }
    finally{
        echo" Thank You";

    }
}
?>