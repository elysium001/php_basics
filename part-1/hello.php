<?php

// echo 'Hello World!';

// Now let's explore functions, arguments,
// string variables and string concatenation.
function my_func($name = false)
{
    $greeting = 'Hello';

    if ($name) {
        $greeting .= " $name!\n";
    }

    return $greeting;
}//end my_func()

echo my_func('Omar');
