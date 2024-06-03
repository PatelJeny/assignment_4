<?php
class parentClass{
    protected $name;

    public function __construct($name){
        $this->name= $name;
        echo "parent constructor called Name: $name <br>";

    }
    public function getName(){
        return  $this->name;
    }
}


?>