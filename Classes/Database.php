<?php

class Database
{
    public static function connect()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=oop-blog', 'root', '');
        return $pdo;
    }
    public static function query($query, $params = array())
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
        if (explode(" ", $query)[0] == "SELECT") {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
    }
}
