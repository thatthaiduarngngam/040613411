<!DOCTYPE html>
<?php include "connect.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop1</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
    ?>
        <table border='1'>
        <tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>รายละเอียด</th><th>ราคา</th></tr>
            <?php
            while($row = $stmt->fetch()){
            ?>
            <tr><td><?=$row['pid'] ?></td><td><?=$row['pname'] ?></td><td><?=$row['pdetail'] ?></td><td><?=$row['price'] ?></td></tr>
            <?php } ?>
        </table>
        <br>
        6404062610081 ธัชไธย์ ดวงงาม
</body>
</html>