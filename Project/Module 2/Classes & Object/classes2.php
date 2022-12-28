<?php
// class Fruit {
//   public $name;
//   protected $color;
//   private $weight;
// }

// $mango = new Fruit();
// echo $mango->name = 'Mango'; // OK
// echo $mango->name;
// // $mango->color = 'Yellow'; // ERROR
// // echo $mango->color='Yellow';
// // $mango->weight = '300'; // ERROR

class Fruit {
    public $name;
    public $color;
    public $weight;
  
    public function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit();
  var_dump($mango);
  echo $mango->set_name('Mango'); // OK
//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR
?>