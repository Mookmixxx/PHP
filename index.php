<?php
require "../config/db.php";

// ดึงข้อมูลงานทั้งหมด
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Task Manager</title>
</head>
<body>

<h2>Task Manager</h2>

<form action="add.php" method="post">
    <input type="text" name="title" placeholder="New task..." required>
        <button type="submit">Add</button>
        </form>

        <ul>
        <?php while($row = $result->fetch_assoc()){ ?>
            <li>
                    <?= htmlspecialchars($row["title"]) ?>
                            <a href="delete.php?id=<?= $row["id"] ?>">[delete]</a>
                                </li>
                                <?php } ?>
                                </ul>

                                </body>
                                </html>
                                