<?php 
    include "connect.php"
        if(!empty($_GET)){
            $value = $_GET["name"];
        }
        $stmt = $pdo->prepare("SELECT * FROM memeber WHERE username = $value");
        $stmt->execute();
?>