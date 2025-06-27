<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h2>Contact US </h2>
    <form action="process_contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"  row="5 " cols="40" require></textarea>
        <br>
        <button type="submit" name="submit">Send Message</button>
    </form>
</body>
</html>