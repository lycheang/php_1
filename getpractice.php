<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratice_GET</title>
</head>
<body>
   <form method="get" action="gettheresult.php">
       <label for="id">Product ID:</label>
       <input type="text" id="proid" name="proid" required>
       <br>
       <label for="name">Product Name:</label>
       <input type="text" id="proname" name="proname" required>
       <br>
       <button type="submit">Search by ID and Name</button>

   </form> 
</body>
</html>