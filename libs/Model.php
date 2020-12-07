<?php

class Model {

    private static $con;

    public function __construct() {
        $user = env('db_user');
        $pw = env('db_pw');
        $host = env('db_host');
        $db = env('db_database');
        self::$con = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pw);
    }

    public static function getDB() {
        return self::$con;
    }

}
