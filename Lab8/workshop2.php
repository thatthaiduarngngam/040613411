<!DOCTYPE html>
<?php include "connect.php";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop2</title>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while($row = $stmt->fetch()){
    ?>
        ชื่อสมาชิก: <?=$row['name']?> <br>
        ที่อยู่: <?=$row['address']?> <br>
        อีเมล์: <?=$row['email']?> <br>
        
        <hr>
        <?php }?>
        <br>
        6404062610081 ธัชไธย์ ดวงงาม
</body>
</html>