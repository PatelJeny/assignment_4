<?php
trait hello{
    public function sayHelloo(){
        echo "Hi";
    }
}

trait world{
    public function sayWorld(){
        echo "jeny";
    }
}

class MyClass{
    use hello,world;
    public function mark(){
    echo "!";
}
}

$class= new MyClass();
$class->sayHelloo();
$class->sayWorld();
$class->mark();

?>