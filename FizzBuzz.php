<?php
/**
 * Created by PhpStorm.
 * User: lenovo E440
 * Date: 6/4/2019
 * Time: 11:31 AM
 */

for ($x = 1; $x <= 100; $x++) {
    if($x % 15 == 0){
        echo "FizzBuzz<br>";
    }elseif($x % 5 ==0){
        echo "Buzz<br>";
    }elseif($x % 3 ==0){
        echo "Fizz<br>";
    }else
        echo $x . "<br>";
}



?>

