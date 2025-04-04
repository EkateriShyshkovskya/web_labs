<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['user_data'] = [
        'last_name' => $_POST['last_name'],
        'first_name' => $_POST['first_name'],
        'age' => $_POST['age']
    ];
    
    
    header('Location: 4.4.2.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ввод данных</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 20px auto; }
        input { padding: 5px; margin: 5px 0; width: 200px; }
        button { padding: 5px 15px; margin-top: 10px; }
    </style>
</head>
<body>
    <h2>Введите ваши данные</h2>
    <form method="POST">
        <div>
            <label>Фамилия:</label><br>
            <input type="text" name="last_name" required>
        </div>
        <div>
            <label>Имя:</label><br>
            <input type="text" name="first_name" required>
        </div>
        <div>
            <label>Возраст:</label><br>
            <input type="number" name="age" min="1" max="120" required>
        </div>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>