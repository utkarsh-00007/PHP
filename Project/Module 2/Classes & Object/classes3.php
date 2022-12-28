<?php
class gla{
    public $msg="hello";
    private $data=24;
    private function display(){
        echo $this->data;
    }
}

$new_obj=new ReflectionMethod('gla','display');
$new_obj->setAccessible(true);
$new_obj->invoke(new gla);

$property = new ReflectionProperty("gla", "data");
$property->setAccessible(true);
echo $property->getValue(new gla);


?>