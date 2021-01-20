<?php

class DAO {

  // Properties
    private static $sharedPDO;
    protected $pdo;

    // Constructor
    function __construct() {

        if(empty(self::$sharedPDO)) {
            $dbHost = getenv('PHP_DB_HOST') ?: "localhost";
            $dbName = getenv('PHP_DB_DATABASE') ?: "highwheel";
            $dbUser = getenv('PHP_DB_USERNAME') ?: "highwheel";
            $dbPass = getenv('PHP_DB_PASSWORD') ?: "highwheeldb";

            self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbName=" . $dbName, $dbUser, $dbPass);
            self::$sharedPDO->exec("SET CHARACTER SET utf8");
            self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMPDE_EXCEPTION);
            self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        $this->pdo = &self::$sharedPDO;
    }

    // Methods
}
