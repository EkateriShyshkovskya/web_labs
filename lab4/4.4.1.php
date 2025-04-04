<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];

    
    header("Location: 4.4.2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма ввода</title>
</head>
<body>
    <h1>Введите ваши данные</h1>
    <form method="post" action="">
        <label for="surname">Фамилия:</label><br>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Возраст:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>