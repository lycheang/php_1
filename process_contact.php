<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- //post method is used to send data and will not show data on the url -->
    <h2>Message Received</h2>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // Check if the form was submitted
        if (isset($_POST['submit'])) {
            var_dump(value:$_POST);
            // Get the values from the form
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Display the message
            echo "<h3>Thank you, $name!</h3>";
            echo "<p>Your message has been received:</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
            echo "<p>In a real application, this data would be processed, such as being saved to a database or sent via email.</p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
    } else {
        echo "<p>Please submit the form.</p>";
    }
    ?>
</body>
</html>