<?php
abstract class EmailAbstractModel {

    protected $email;
    protected static $con;

    public function __construct() {
        self::$con = (new Model())::getDB();
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
