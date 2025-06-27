<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {

        echo "<h2>User Name</h2>";
        echo "<p> " . htmlspecialchars(string: $_SESSION['username']) . "</p>";
        echo "<br><a href='dashboard.php'>Go back</a>";
    } else {
        echo "You are not logged in.";
    }
    ?>
</body>

</html>
