<?php
require_once 'app/Controllers/ProductController.php';

$page = $_GET['page'] ?? 'product-list';
$controller = new ProductController();

switch ($page) {
    case 'product-list':
        $controller->index();
        break;

    case 'product-detail':
        $controller->detail();
        break;

    case 'product-add':
        $controller->create();
        break;

    case 'product-store':
        $controller->store();
        break;

    case 'product-edit':
        $controller->edit();
        break;

    case 'product-update':
        $controller->update();
        break;

    case 'product-delete':
        $controller->delete();
        break;

    default:
        echo "404 - Page not found";
}
