<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WELCOME</h1>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "WELCOME !!! <span style='color:red;font-ssize:32px'>" . htmlspecialchars(string: $_SESSION['username']);
        "</span> This is your dashboard";
        echo "<br><a href='profile.php'>View Profile</a><br>";
    } else {
        echo "You are not logged in.Please <a href='login.php'>Login</a>.";
    }

    ?>
</body>

</html>
