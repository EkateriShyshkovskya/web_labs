<?php
$wordCount = 0;
$charCount = 0;
$text = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['text'])) {
    $text = $_POST['text'];
    
    // Подсчет символов (включая пробелы)
    $charCount = mb_strlen($text);
    
    // Подсчет слов (учитываем многобайтовые символы для кириллицы)
    $words = preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);
    $wordCount = count($words);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Подсчет слов и символов</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2>Подсчет слов и символов</h2>
    
    <form method="post">
        <textarea name="text" placeholder="Введите текст здесь..."><?= htmlspecialchars($text) ?></textarea>
        <button type="submit">Подсчитать</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="result">
            <p>Количество символов: <?= $charCount ?></p>
            <p>Количество слов: <?= $wordCount ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
