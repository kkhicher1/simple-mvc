<?php

class BlogController extends Controller
{
    public static function view($view)
    {
        $data = Database::query('SELECT * FROM users');
        require '../Views/' . $view . '.view.php';
    }
}
