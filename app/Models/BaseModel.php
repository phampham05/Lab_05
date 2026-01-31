<?php

class BaseModel {
    protected $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            "mysql:host=127.0.0.1;dbname=buoi2_php;charset=utf8",
            "root",
            ""
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
