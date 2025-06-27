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
    if (isset($_POST['username'])) {
        $username = htmlspecialchars(string: $_POST['username']);

        if ($username == 'admin1') {
            $_SESSION['username'] = $username;
            header(header:'location:dashboard.php');
        } else {

            echo 'In valide username';
        }
    }

    ?>
    <form method="post" action="">
        <label for="username">User name</label>
        <input type="text" id="username" name="username"></input>

        <button type="submit">
            login
        </button>
    </form>
</body>

</html>
