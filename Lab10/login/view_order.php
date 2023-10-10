<?php session_start(); 
    include "connect.php";
    // ตรวจสอบว่ามีชื่อใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
    if (empty($_SESSION["username"]) ) { 
        header("location: login-form.php");
    }
    ?>

<html>
<body>
    <h1>สวัสดี Admin <?=$_SESSION["fullname"]?></h1>

    หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a><br><br>


    <hr>
    <br>

    <?php 
           
           $user = $_GET['username'];
    ?>
    นี่คือ Order ของผู้ใช้ <?php echo $user ?> <br>
    <?php
           $stmt = $pdo->prepare("SELECT member.username, product.pname, price, quantity
           FROM orders
           INNER JOIN member ON member.username = orders.username
           INNER JOIN item ON item.ord_id = orders.ord_id
           INNER JOIN product ON product.pid = item.pid
           WHERE member.username = ?
           ");
           $stmt->bindParam(1, $user);
           $stmt->execute();
        
           while ($row = $stmt->fetch()) {
               echo "ชื่อสินค้า: " . $row ["pname"] . "<br>";
               echo "ราคา: " . $row ["price"] . " บาท <br>";
               echo "จำนวน: " . $row ["quantity"] . " ชิ้น <br>";
               echo "<hr>\n";
           }
    
    ?>
</body>
</html>
