<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str1="i love cambodia";
    $str2="the best place to live";
    $combine=$str1.",because ".$str2;
    echo $combine;

    //esap character...
    //double quote is double quote
    //$content ="the result "PHP" is 40"; first problem and we will fix 
    // to fix we use \

    $content="the result\"php\" is 40";
    echo $content;
    //another 
    //$content ="the result is "php" is 40";

    $content= 'the result\'php\' is 40';
    echo "<br>$content";
    echo "<br>";
    $money=1000;
    echo 'i have $money';
    echo "<br>";

    echo "<br>.........................<br>";
    echo "i have $money";
    echo "<br>......................";
    

    //$content ="my docs in c:\documents\mydoc\";
    echo "<br>";
    $content="my docs in c:\\documents\\mydoc\\";
    echo $content;
    //another example it is ok because ? mark isn't 

    echo "<br>...........................<br>";
    $myname="bunchheang";
    $content="are you $myname?";
    echo $content;
    echo "<br>......................<br>";

    //but it will erro if is meet legal character;
    $fruit="apple";
    //using this way, error
    //$content ="there are a few $fruits";
    $content="there are a few {$fruit}s";
    echo "<br>$content";
    
    ?>
</body>
</html>