<?php

class SQLconnection {
    private $BDD_C;
    private $host = 'localhost';
    private $dbname = 'projet_web';
    private $username = 'root';
    private $password = 'cesi';

    // Constructor
    public function __construct() {
        try {
            $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $this->BDD_C = new PDO($dns, $this->username, $this->password);
            $this->BDD_C->exec("SET NAMES utf8");
            $this->BDD_C->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getHost() { return $this->host; }
    public function getDbname() { return $this->dbname; }
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getBDD() { return $this->BDD_C; }
}
