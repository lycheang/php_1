<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- compare between switch and if else -->
    <?php
    //case switch 
    function style($content): void{
        echo "<h2 style='color:green;font-size=3rem'>$content</h2>";
    }
    $nameofday=date(format:'l');
    switch ($nameofday){
        case 'Tuesday':
            style(content:'Teaching php at chao srey vibol');
            break;
        case 'Thursday':
            style(content: strtoupper(string:'Teaching php at Banteay Somre'));
            break;
        case 'Friday':
            style(content:'Teaching php at Banteay Srey');
            break;
            default:
            style(content:'No class today');
            break;
    }

    //case if and if else
    if($nameofday=='Tuesday'){
        style(content:'Teaching php at chao srey vibol');
    }else if($nameofday=='Thursday'){
        style(content: strtoupper(string:'Teaching php at Banteay Somre'));
    }else if($nameofday=='Friday'){
        style(content:'Teaching php at Banteay Srey');
    }else{
        style(content:'No class today');
    }
    $filename="doc.pdf";
    $delimiter='.';

    //case example of type file image 
    $parts=explode(separator:$delimiter, string:$filename);
    //echo $parts[0];
    if(count(value:$parts)>1){
        $extension=end(array:$parts);
        //output pdf
        switch ($extension){
            case 'jpg':
            case 'gif':
            case 'png':
                echo "<h2>This is an image file</h2>";
                break;
            case 'doc':
            case 'docx':
                echo "<h2>This is a document file</h2>";
                break;
            case 'pdf'&&'jpg':
                echo "<h2>This is a pdf file</h2>";
                break;
            case 'txt':
                echo "<h2>This is a text file</h2>";
                break;
            default:
                echo "<h2>No file found</h2>";
                break;
        }
    }
        else {
            echo style(content:"<h2>No delimiter found</h2>");//no delimiter found;
        }
    
    //another example of swtich 
    function showgrade($score): void {
        switch (true){
            case $score>=90&&$score<=100:
                echo "<h2 style='color:green'>You got A</h2>";
                break;
            case $score>=80&&$score<90:
                echo "<h2 style='color:blue'>You got B</h2>";
                break;
            case $score>=70&&$score<80:
                echo "<h2 style='color:orange'>You got C</h2>";
                break;
            case $score>=60&&$score<70:
                echo "<h2 style='color:yellow'>You got D</h2>";
                break;
            case $score>=0&&$score<60:
                echo "<h2 style='color:red'>You got F</h2>";
                break;
        }
    }
    
    function score($listening, $reading, $writing, $speaking): float|int {
        $avg = ($listening + $reading + $writing + $speaking)/4;
        return $avg;
        
    }
    $total=score(listening: 80, reading: 90, writing: 70, speaking: 60);
    showgrade(score: $total);
    echo "<h2 style='color:blue'>Your average score is $total</h2>";
    
    //the use of while and do while
    //the use of for, foreach in case having key


    ?>
</body>
</html>