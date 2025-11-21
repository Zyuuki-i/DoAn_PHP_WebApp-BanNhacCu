<?php
    $config = require __DIR__ . '/scripts/connection.php';
?>
<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zyuuki Music Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container mt-4">
    <?php
    if (isset($isConnected) && $isConnected) {
        require __DIR__ . '/templates/home.php';

        $sql = 'SELECT * FROM `nguoi_dung`';
        $stmt = $pdo->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "<div class=\"mb-2\">Mã: " . htmlspecialchars($row['ma_nd']) . " - Tên: " . htmlspecialchars($row['tennd']) . " - Email: " . htmlspecialchars($row['email']) . "</div>";
        }
    } else {
        echo "<div class=\"alert alert-danger\">Kết nối cơ sở dữ liệu thất bại!!!</div>";
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

