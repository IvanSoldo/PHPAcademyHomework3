<?php

function factorial (int $number) {
    if ($number <= 1){
        if ($number < 0) {
            return "Can't calculate factorials of negative numbers.";
        }
        return 1;
    }
    else {
        return $number * factorial($number - 1);
    }
}

echo factorial(3);
