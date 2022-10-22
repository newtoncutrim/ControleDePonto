<?php

class Database
{

    public static function getConection()
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if ($conn->connect_error) {
            die("error: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuerry($sql) {
        $conn = self::getConection();
        $result = $conn->query($sql);
        return $result;
    }
}