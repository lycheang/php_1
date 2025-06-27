<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function style($content): string {
        return "<h2 style='color:green;font-size=3rem'>$content</h2>";
    }

    $bool=false;
    // while($bool){
    //     echo 'Test clas Thursday';
        
    // }
    do{
        echo style(content:'Test');
    }
    while($bool);
    ?>
    <?php
    $chars=array('a','b','c','d','e');
    $i=0;
    $count=count(value:$chars);
    while($i<$count){
        echo style(content:$chars[$i]);
        $i++;
        if($i==6){
            break; // exit the loop when i equals 3
        }
       
    }
   
    echo "<br>------------------------------<br>";
    ?>
    <?php
    $dayofweek1=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    foreach($dayofweek1 as $index => $day){
        echo style(content:"Day  is $day");
    }
    echo "<br>------------------------------<br>";
    for($i=0; $i<count(value:$dayofweek1); $i++){
        echo style(content:"Day  is $dayofweek1[$i]");
    }
    echo "<br>------------------------------<br>";


    $multi=array('KMH'=>'Khmer Currency','USD'=>'United State Dollar','THB'=>'Thai Baht');
    foreach($multi as $single){
        echo style(content:"Currency is $single");
    }
    echo "<br>------------------------------<br>";
    foreach($multi as $key => $value){
        echo style(content:"$key is $value");
    }
    ?>
</body>
</html>