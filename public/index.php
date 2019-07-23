<?php

function __autoload($class)
{
    if (file_exists('../Classes/' . $class . '.php')) {
        require '../Classes/' . $class . '.php';
    } else if (file_exists('../Controllers/' . $class . '.php')) {
        require '../Controllers/' . $class . '.php';
    } elseif (file_exists('../Core/' . $class . '.php')) {
        require '../Core/' . $class . '.php';
    }
}
require '../Core/Router.php';
