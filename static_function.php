<?php
class Calculator {
    public static $count = 0;

    public static function add($a, $b) {
        self::$count++;
        return $a + $b;
    }

    public static function subtract($a, $b) {
        self::$count++;
        return $a - $b;
    }

}

echo "Addition: " . Calculator::add(10, 5) . "<br>";  
echo "Subtraction: " . Calculator::subtract(10, 5) . "<br>";



?>