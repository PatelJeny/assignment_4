<?php

class childClass extends parentClass{
    private $age;

    public function __construct($name,$age)
    {
        parent::__construct($name);
        $this->age=$age;
        echo "child constructor called Age: $age <br>";
    }
    public function getAge(){
        return $this->age ;
    }
}
?>