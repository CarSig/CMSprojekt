<?php

/**
 * Redirect to another URL on the same site
 * @param string $path The path to redirect to
 * @return void
 */

// magic dave solution
function redirect($path)
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

$subfolder ="/php_dave_udemy";
//   $subfolder= "/udemy/php_dave/00_cms" ;  //ovo izmedu $_SERVER['HTTP_HOST']. &.$path ako je uncomment
    header("Location: $protocol://" . $_SERVER['HTTP_HOST'].$subfolder . $path);
    exit;
}


