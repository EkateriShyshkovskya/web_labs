<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обработка русских букв
    $_SESSION['user_data'] = [
        'last_name' => preg_replace('/[^а-яёА-ЯЁ\s-]/u', '', trim($_POST['last_name'])),
        'first_name' => preg_replace('/[^а-яёА-ЯЁ\s-]/u', '', trim($_POST['first_name'])),
        'age' => (int)$_POST['age']
    ];
    header('Location: 4.4.2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>4.4.1 - Ввод данных</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            line-height: 1.6;
        }
        form { 
            max-width: 300px; 
            margin: 0 auto;
        }
        input, button { 
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        button { 
            background: #4CAF50; 
            color: white; 
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .note {
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <h2>Введите данные</h2>
    <form method="post" accept-charset="UTF-8">
        <input type="text" name="last_name" placeholder="Фамилия" 
               pattern="[А-Яа-яЁё\s-]+" title="Только русские буквы" required>
        <div class="note">Только русские буквы, пробелы и дефисы</div>
        
        <input type="text" name="first_name" placeholder="Имя" 
               pattern="[А-Яа-яЁё\s-]+" title="Только русские буквы" required>
        <div class="note">Только русские буквы, пробелы и дефисы</div>
        
        <input type="number" name="age" placeholder="Возраст" min="1" max="120" required>
        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>