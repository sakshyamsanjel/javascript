<?php
class car{
    public $make;
    public $model;
    public $year;
     public function __construct($make, $model,$year) {
        $this->make = $make;
        $this->model= $model;
        $this->year = $year;
    }
    public function display(){
        echo "this is a {$this->year} {$this->make} {$this->model}.";
    }
    public function __drive(){
        echo " this{$this->model} car is running ";
    }

}
$mycar = new car ("toyota","fknas",2022);
echo $mycar->make;
$mycar->display();
?>