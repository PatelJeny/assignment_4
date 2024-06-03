Q5. Scope Resolution Operator.
-> The scope resolution operator (::) is used to access static, constant, 
    and overridden properties or methods of a class. 

    <br>

-> Example

<br>

<?php

class MyClass {
    public static function myStaticMethod() {
        return 'Hello from static method!';
    }
}

echo MyClass::myStaticMethod();
?>