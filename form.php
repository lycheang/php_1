<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
        body{margin:20px;
            margin-left: 20px;
        }
    form{
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        /* .form-output {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        border: 2px solid #007bff;
        border-radius: 10px;
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    } */
    .form-output h4 {
        color: #007bff;
        margin-bottom: 20px;
    }
    .form-output p {
        font-size: 16px;
        margin: 10px 0;
        color: red;
        font-weight: bold;
    }
    .form-output strong {
        color: black;
    }
    </style>
</head>
<body>
    <?php
$name = $email = $website = $comment = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //var_dump($_POST); // Show submitted data for debugging
    //all letter to big 
    $name = strtoupper($_POST['name']);
    //all letter convert small
    $email = strtolower($_POST['email']);
    // capitol to first letter
    $website = ucfirst($_POST['website']);
    //word count relate to comment input 
    $comment = $_POST['comment'];
    $commentLength = strlen($comment);

    
    
}
?>

</body>
</html>
<div class="container mt-5">
    <div class="row">
        <div class="col-2">
        </div>
         <div class="col-8">
            <h2 class="text-danger">FORM SUBMIT</h2>
            <form class="bg-light p-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    <div class="form-group">
                         Name: <input type="text" name="name" class="form-control">

                    </div>
                    <div class="'form-group">
                         E-mail: <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                            Website: <input type="text" name="website" class="form-control">
                    </div>
                    <div class="form-group">
                          Comment: <textarea name="comment" rows="5" cols="40" class="form-control"></textarea>
                    </div>

                     <input type="submit" value="submit" name="submit" class="btn btn-primary"/>
            
                   
           
            </form> 
        </div>
         <div class="col-2">
        </div>
    </div>
</div>

<?php
    echo '
<div class="form-output">
    <h4>Data Result:</h4>
    <p><strong>Name (UPPER):</strong> ' . htmlspecialchars($name) . '</p>
    <p><strong>Email (lower):</strong> ' . htmlspecialchars($email) . '</p>
    <p><strong>Website:</strong> ' . htmlspecialchars($website) . '</p>
    <p><strong>Comment:</strong> ' . nl2br(htmlspecialchars($comment)) . '</p>
    <p><strong>Comment Count-word:</strong> ' . $commentLength . ' characters</p>
</div>';
    ?>    