<?php
// ไฟล์เชื่อมต่อฐานข้อมูล
$host = "localhost";
$user = "root";
$pass = "";
$db   = "task_manager";

$conn = new mysqli($host, $user, $pass, $db);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Database connection failed");
    }
    