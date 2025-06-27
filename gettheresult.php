<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get_the_result</title>
</head>

<body>
    <!-- //get method is used to send data and wil show data on the url -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        var_dump(value: $_GET);
        $id = htmlspecialchars(string: $_GET['proid']);
        $name = htmlspecialchars(string: $_GET['proname']);
        echo "<br>";
        echo "The product ID we get from method get is ID: $id";
        echo "<br>";
        echo "and the product name is $name";
    } else {
        echo "Please use the form to submit data.";
    }
    ?>
</body>

</html>