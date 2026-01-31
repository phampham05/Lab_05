<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Chi tiết sản phẩm</h2>

<p><strong>Tên:</strong> <?= $product['name'] ?></p>
<p><strong>Giá:</strong> <?= number_format($product['price']) ?>đ</p>
<p><strong>Mô tả:</strong> <?= $product['description'] ?? '' ?></p>

<img src="<?= $product['image'] ?>" class="img-fluid mb-3"
     onerror="this.src='https://via.placeholder.com/300'">


<a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>

</body>
</html>
