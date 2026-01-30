<?php
namespace App\Models;

use PDO;

class BaseModel {
    protected $conn;

    public function __construct() {
        $this->conn = new PDO(
            "mysql:host=127.0.0.1;dbname=buoi2_php;charset=utf8",
            "root",
            ""
        );
    }
}
