<?php
require __DIR__ . '/Cow.php';


$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
// echo $bessie;