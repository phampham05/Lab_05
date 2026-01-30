<?php
namespace App\Models;

class Student extends BaseModel {
    public function getAll() {
        $sql = "SELECT * FROM students";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
}
