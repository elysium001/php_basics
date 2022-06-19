<?php
// var_dump($argv);
$fahrenheit = (int) $argv[1];

if ($fahrenheit) {
    $celsius = ($fahrenheit - 32) * (5/9);
    $celsius = round($celsius);
    echo sprintf("The temperature is %.2f °C.", $celsius);
} else {
    echo "Please enter a Fahrenheit temp to convert.";
}
