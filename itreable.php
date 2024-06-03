<?php

 function myIterable(iterable $iterable){

    foreach($iterable as $item){

    echo $item;
}

 }

 $arr = ["Jeny", " D", " Patel"];
 myIterable($arr);


?>