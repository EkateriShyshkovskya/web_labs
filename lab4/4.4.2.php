<?php
session_start();


if (!isset($_SESSION['user_data'])) {
    header('Location: 4.4.1.php');
    exit;
}

$user = $_SESSION['user_data'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Просмотр данных</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 20px auto; }
        .data { background: #f5f5f5; padding: 15px; }
    </style>
</head>
<body>
    <h2>Ваши данные</h2>
    <div class="data">
        <p><strong>Фамилия:</strong> <?= htmlspecialchars($user['last_name']) ?></p>
        <p><strong>Имя:</strong> <?= htmlspecialchars($user['first_name']) ?></p>
        <p><strong>Возраст:</strong> <?= htmlspecialchars($user['age']) ?></p>
    </div>
    <a href="form.php">Вернуться к форме</a>
</body>
</html>