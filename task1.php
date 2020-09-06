<?php

function reverseString (string $input) {

    $chars = str_split($input);
    $reversedChars = [];

    for ($i=strlen($input)- 1; $i >= 0; $i--) {
        array_push($reversedChars,$chars[$i]);
    }
    return implode($reversedChars);

}

echo reverseString("ivan");
