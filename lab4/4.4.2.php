<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SESSION['user_data'])) {
    header('Location: 4.4.1.php');
    exit;
}

$user = $_SESSION['user_data'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>4.4.2 - Просмотр данных</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px;
            line-height: 1.6;
        }
        .data { 
            background: #f0f0f0;
            padding: 15px;
            max-width: 300px;
            margin: 0 auto;
        }
        a { 
            display: inline-block;
            margin-top: 15px;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Ваши данные</h2>
    <div class="data">
        <p><strong>Фамилия:</strong> <?= htmlspecialchars($user['last_name'], ENT_QUOTES, 'UTF-8') ?></p>
        <p><strong>Имя:</strong> <?= htmlspecialchars($user['first_name'], ENT_QUOTES, 'UTF-8') ?></p>
        <p><strong>Возраст:</strong> <?= $user['age'] ?></p>
    </div>
    <a href="4.4.1.php">Вернуться к форме</a>
</body>
</html>