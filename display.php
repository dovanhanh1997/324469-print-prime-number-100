<?php
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}


function printNumber($n){
    for ($i = 0;$i <= $n; $i++){
        if (isPrime($i)){
            echo $i.' ';
        }
    }
}

printNumber(100);