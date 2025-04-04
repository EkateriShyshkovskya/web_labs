<?php
session_start(); 


$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : 'Не указано';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Не указано';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : 'Не указано';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Данные пользователя</title>
</head>
<body>
    <h1>Ваши данные</h1>
    <p>Фамилия: <?php echo htmlspecialchars($surname); ?></p>
    <p>Имя: <?php echo htmlspecialchars($name); ?></p>
    <p>Возраст: <?php echo htmlspecialchars($age); ?></p>

    <!-- Кнопка для возврата к форме -->
    <a href="4.4.1.php">Вернуться к форме</a>

</body>
</html>