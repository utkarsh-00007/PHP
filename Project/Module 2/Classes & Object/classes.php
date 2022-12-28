<?php
class test{
    public $data ='hello';
    public $count=24;
    // echo $data;
    public function __construct(){
        echo "in a method";
        echo $this->data='new'; 
        
    }
    public function __destruct(){
        echo "Destroy";
        /*
        to destroy memory used by constructor
        run at end/termination of code/closing
        run same no of times as constructor
        no run for manual calling of constructor

        */
    }

}

// $obj_test_one= new test; // workk on only non-para
// var_dump($obj_test);
// $obj_test_one->__destruct();
// $obj_test_one->__construct();
$obj_test_two= new test(); // work on both para n non para
var_dump($obj_test_two);
// echo $obj_test_one->data;
// $obj_test_two->data='welcome';
// echo $obj_test_one->data."<br>";
// echo $obj_test_two->data;
// $obj_test_one->display();
// echo $obj_test_two->data;

/* 
Explain workiing of pseudo variable availble in php ie $this : to work on any property of class inside class works like object inside class
also access private property of class because it is inside class
magic functions: start with pair of underscore,self calling
cant give our name to constructor and dstructor, it uses by default name

Type of constructor
parameterize 
non-parameterized 
copy
*/

//------------------------------------------------------------------

// class test{
//     public $num;
//     public $count;
//     public function __construct(int $val_one,int $val_two){
//         echo ($this->init(30)."Class");
//         $this->count=$val_one;
//     }
//     public function init($value){
//         echo "Welcome";
//         $this->num=$value;
//     }
//     public function __destruct(){
//         echo $this->num+$this->count;
//     }
// }

// $obj_test=new test(40,30,40);
// echo $obj_test->num;
// $obj_test->__destruct();
// $obj_test->count=20;
// $obj_test->__destruct();







?>