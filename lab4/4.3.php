<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Text Analyzer</title>
</head>
<body>
    <form method="POST">
        <textarea name="textarea" cols="50" rows="15"><?= 
            isset($_POST['textarea']) ? htmlspecialchars($_POST['textarea']) : 'Write something here' 
        ?></textarea>
        <button>Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['textarea'])) {
        $text = $_POST['textarea'];
        
        
        $chars = mb_strlen($text);
        
        
        $chars_no_spaces = mb_strlen(str_replace(' ', '', $text));
        
        
        $words = preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY);
        $wordCount = count($words);
        
        echo "<p>Characters (with spaces): <b>$chars</b></p>";
        echo "<p>Characters (without spaces): <b>$chars_no_spaces</b></p>";
        echo "<p>Words: <b>$wordCount</b></p>";
    }
    ?>
</body>
</html>