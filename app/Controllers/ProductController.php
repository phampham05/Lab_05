<?php
require_once __DIR__ . '/../Models/Product.php';

class ProductController {

    public function index() {
        $productModel = new Product();
        $products = $productModel->all();
        require __DIR__ . '/../../views/products/list.php';
    }

    public function detail() {
        $id = $_GET['id'] ?? null;
        if (!$id) return;

        $productModel = new Product();
        $product = $productModel->find($id);
        require __DIR__ . '/../../views/products/detail.php';
    }

    public function create() {
        require __DIR__ . '/../../views/products/add.php';
    }

    public function store() {
        if (empty($_POST['name']) || empty($_POST['price'])) {
            echo "Vui lòng nhập đầy đủ thông tin!";
            return;
        }

        $productModel = new Product();
        $productModel->insert($_POST);

        header("Location: index.php?page=product-list");
        exit;
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) return;

        $productModel = new Product();
        $product = $productModel->find($id);
        require __DIR__ . '/../../views/products/edit.php';
    }

    public function update() {
        $id = $_POST['id'] ?? null;
        if (!$id) return;

        $productModel = new Product();
        $productModel->update($id, $_POST);

        header("Location: index.php?page=product-list");
        exit;
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $productModel = new Product();
            $productModel->delete($id);
        }

        header("Location: index.php?page=product-list");
        exit;
    }
}
