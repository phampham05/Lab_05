<!DOCTYPE html> 
<html> 
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    </head> 
    
    <body class="container mt-4"> 
        <h2>Danh sách sản phẩm</h2> 
        <a href="?page=product-add" class="btn btn-success mb-3">+ Thêm mới</a> 
        <table class="table table-bordered table-striped"> 
            <tr> 
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
             </tr> 
             <?php foreach ($products as $p): ?> 
                <tr> 
                    <td><?= $p['id'] ?></td> 
                    <td><?= $p['name'] ?></td> 
                    <td><?= number_format($p['price']) ?>đ</td> 

                    <td>
                        <img src="<?= $p['image'] ?>"
                            width="80"
                            onerror="this.src='https://via.placeholder.com/80'">
                    </td>

                    <td> <a href="?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-info btn-sm">Chi tiết</a> 
                         <a href="?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Sửa</a> 
                         <a onclick="return confirm('Xóa?')" href="?page=product-delete&id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">Xóa</a> 
                    </td> 
                </tr> 
            <?php endforeach; ?> 
        </table> 
    </body> 
</html>