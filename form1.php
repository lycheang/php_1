<!DOCTYPE html>
<html>
<head>
    <title>Mini PHP String Manipulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px auto;
            max-width: 700px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        textarea, input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .output-box {
            background-color: #eee;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h2>Mini PHP String Manipulator</h2>
    <hr>

    <?php
    $originalText = "Hello world! This is a test. My secret number is 1234567890 and my email is test@example.com.";
    $searchWord = "sample";
    $replaceWord = "demo";
    $newText = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $originalText = $_POST['originalText'];
        $searchWord = $_POST['searchWord'];
        $replaceWord = $_POST['replaceWord'];

        // Replace only the first occurrence
        $pos = strpos($originalText, $searchWord);
        if ($pos !== false) {
    $newText = substr_replace($originalText, $replaceWord, $pos, strlen($searchWord));
        } else {
    $newText = $originalText; // word not found, return original
    }

    }
    ?>

    <form method="post">
        <label><strong>Original Text:</strong></label>
        <textarea name="originalText" rows="4" required><?php echo htmlspecialchars($originalText); ?></textarea>

        <h4>Single Word Replacement:</h4>
        <label>Search for:</label>
        <input type="text" name="searchWord" value="<?php echo htmlspecialchars($searchWord); ?>" required>

        <label>Replace with:</label>
        <input type="text" name="replaceWord" value="<?php echo htmlspecialchars($replaceWord); ?>" required>

        <button type="submit">Perform Single Replace</button>
    </form>

    <?php if ($newText): ?>
        <h4>Replacement Paragraph:</h4>
        <div class="output-box"><?php echo htmlspecialchars($newText); ?></div>
    <?php endif; ?>

</body>
</html>
