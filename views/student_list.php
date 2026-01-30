<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
        </tr>

        <?php foreach ($students as $sv): ?>
        <tr>
            <td><?= $sv['id'] ?></td>
            <td><?= $sv['fullname'] ?></td>
            <td><?= $sv['student_code'] ?></td>
            <td><?= $sv['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
