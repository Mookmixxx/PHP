<?php
require "../config/db.php";

// รับ id จาก URL
$id = (int)$_GET["id"];

// ลบข้อมูล
$stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
