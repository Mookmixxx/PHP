<?php
require "../config/db.php";

// รับค่าจากฟอร์ม
$title = trim($_POST["title"]);

// ป้องกันค่าว่าง
if($title != ""){
    $stmt = $conn->prepare("INSERT INTO tasks(title) VALUES (?)");
        $stmt->bind_param("s", $title);
            $stmt->execute();
            }

            header("Location: index.php");
            