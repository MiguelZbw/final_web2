<?php

class CancionModel {
    private $db;

    public function __construct()
    {
        $this -> db = new PDO('mysql:host='.DB_HOST.';'.'dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
    
    }
    
    public function getCancion()
    {
        return "algo";
    }
}