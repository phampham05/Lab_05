<?php
namespace App\Controllers;

use App\Models\Student;

class StudentController {
    public function index() {
        $students = (new Student())->getAll();
        include 'views/student_list.php';
    }
}
