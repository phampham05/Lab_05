<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Sửa sản phẩm</h2>

<form method="POST" action="index.php?page=product-update">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <div class="mb-3">
        <label>Tên</label>
        <input type="text" name="name" class="form-control"
               value="<?= $product['name'] ?>">
    </div>

    <div class="mb-3">
        <label>Giá</label>
        <input type="number" name="price" class="form-control"
               value="<?= $product['price'] ?>">
    </div>

    
    <div class="mb-3">
        <label>Link hình ảnh</label>
        <input type="url" name="image" class="form-control"
            value="<?= $product['image'] ?>">
    </div>


    <button class="btn btn-primary">Cập nhật</button>
    <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
</form>

</body>
</html>
