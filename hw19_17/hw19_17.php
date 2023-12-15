<?php

$states = "Mis-sissippi Alabama Texas Massachusetts Kansas";

$statesArray = [];

// Task a

preg_match('/\b\w*xas\b/i', $states, $matches);

$statesArray[0] = $matches[0];

// Task b

preg_match('/\bk\w+5\b/i', $states, $matches);

$statesArray[1] = $matches[0];

// Task c

preg_match('/\bM\w+s\b', $states, $matches);

$statesArray[2] = $matches[0];

// Task d

preg_match('/\b\w*a\b/', $states, $matches);

$statesArray[3] = $matches[0];

// Task e

preg_match('/^M\w+/', $states, $matches);

$statesArray[4] = $matches[0];

// Output the array

print_r($statesArray);

?>