<?php

class Controller
{
    public static function view($view)
    {
        require '../Views/' . $view . '.view.php';
    }
}
