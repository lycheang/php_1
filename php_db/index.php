<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connect.php';
    echo "<h2>Database Connection Details</h2>";
    echo "<p>Host: $db_host</p><br>";
    echo "<p>User: $db_user</p><br>";
    echo "<p>Password: $db_password</p><br>";
    
    ?>
</body>
</html>