<?php
$wordCount = 0;
$inputText = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['user_text'])) {
        $inputText = $_POST['user_text'];
        $wordCount = str_word_count($inputText);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word </title>
    <style>
        body { font-family: sans-serif; background-color: #9cf0f3; display: flex; justify-content: center; padding-top: 50px; height: 100vh; box-sizing: border-box;}
        .container { background: white; padding: 30px; border-radius: 10px; width: 100%; max-width: 500px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); height: fit-content;}
        textarea { width: 100%; height: 150px; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; resize: vertical; }
        
        .btn-count { background-color: #55ade9; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px; margin-right: 10px; }
        .btn-count:hover { background-color: #a0dbf3; }

       
        .btn-reset { 
            background-color: #67bef8; 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            text-decoration: none; 
            display: inline-block;
        }
        .btn-reset:hover { background-color: #77d0eb; }

        .result { margin-top: 20px; padding: 15px; background-color: #8beedd; color: #000000; border: 1px solid #d4efdf; border-radius: 5px; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>Word Counter ni JUSTINE</h1>

    <form method="POST" action="">
        <label for="user_text">Enter your text below:</label>
        
        <textarea name="user_text" id="user_text" placeholder="Type here..."><?php echo htmlspecialchars($inputText); ?></textarea>
        
        <br>
        
        <button type="submit" class="btn-count">Count Words</button>
        
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn-reset">Clear</a>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="result">
            Total Words: <?php echo $wordCount; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>