<?php

class Route
{
    protected static $routes = array();
    public static function set($routes, $function)
    {
        self::$routes[] = $routes;
        if ($_GET['url'] == $routes) {
            $function->__invoke();
        }
    }
}
