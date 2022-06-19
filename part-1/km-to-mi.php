<?php

$km = $argv[1] ?? false;

if ($km) {
    $mi = (int)$km * 0.62;
    echo sprintf("%.2f Kilometers in Miles is: %.2f miles\n", $km, $mi);
} else {
    echo "Please pass in a km value to convert.";
}
