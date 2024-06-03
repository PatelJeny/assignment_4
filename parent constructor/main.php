<?php
include 'parent.php';
include 'child.php';

$child = new childClass("jeny patel" , 18);

echo $child->getName();
echo $child->getAge();

?>