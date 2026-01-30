<?php
require 'vendor/autoload.php';

use App\Controllers\StudentController;

$page = $_GET['page'] ?? 'students';

if ($page === 'students') {
    (new StudentController())->index();
} else {
    echo "404 - Page Not Found";
}
