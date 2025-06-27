<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //function strpos only case sensitive
    $e="my name is chheang";
    echo strpos(haystack:$e, needle:'n');
    echo $e; // return position of string
    echo "<br>-----------------------------<br>";
    //function strchr
    $e="hello here is website of school which is www.school.edu.kh";
    $e=strchr(haystack:$e, needle:'.');
    echo $e; // return string after the first occurrence of the needle
    echo "<br>-----------------------------<br>";
    //function strpos 
    $text="hello here is website of school which is www.school.edu.kh";
    $search_rep=str_replace(search:'here',replace:'there', subject:$text);
    echo $search_rep; // replace string
    echo "<br>-----------------------------<br>";
    //function  
    $setofchar="websiteofint@gov.kh";
    echo "old of setchar {$setofchar}"; // return string
    $pos=strpos(haystack:$setofchar, needle:'gov.kh');
    $length=strlen(string:'gov.kh');
    echo "<br>-----------------------------<br>"; 
    echo "length to replace {$length}"; // return length of string
    $new=substr_replace(string:$setofchar,replace:'edu.kh', offset:$pos, length:$length);
    echo "<br> new of setchar   {$new}"; // replace string with offset and length
    echo "<br>-----------------------------<br>";

    $text="hello i am student of AIB shift evening";
    echo "old of text {$text}"; // return string
    $pos=strpos(haystack:$text, needle:'AIB');
    $length=strlen(string:'AIB');
    echo "<br>-----------------------------<br>";
    echo "length to replace {$length}"; // return length of string
    $new=substr_replace(string:$text,replace:'AUB', offset:$pos, length:$length);
    echo "<br> new of text   {$new}"; // replace string with offset and length
    echo "<br>-----------------------------<br>";

    //function strtok
    $setoffound="hello,hi,good morning,good afternoon,good evening";
    $aword=strtok(string:$setoffound, token:',');
    // echo $aword=strtok(',');
    // echo $aword=strtok(',');
    // echo $aword=strtok(',');
    while($aword!==false){
        echo $aword."<br>";
        $aword=strtok(string:','); // continue to get next word
    }

    //explode function
    $setofchar="Government@gov.kh";
    $array= str_split(string:$setofchar);
    echo "<br>-----------------------------<br>";

    for($i=0; $i<count(value:$array); $i++){
        echo $array[$i]."<br>";
    }



    //explode function
    $setofword="hello,hi,good morning,good afternoon,good evening";
    $splitofword=explode(separator:',', string:$setofword);
    echo "<br>-----------------------------<br>";
    for($i=0; $i<count(value:$splitofword); $i++){
        echo $splitofword[$i]."<br>";
    }
    echo "<br>Foreach </br>";
    echo "<br>-----------------------------<br>";
    foreach($splitofword as $word=>$value){
        echo $value."<br>";
    }
    //function strncnmp
    if(strncmp($stringa,$stringb,5)== 0){
        echo "No replace";
    }else{
        $stringb = str_replace('HeLlo','Hello',$stringb);
        echo "<br>$stringb";
    }

    // another example 
    $stringa = "Hello here the class PHP room Tanai";
    $stringb = "HeLlo here the class PHP room Tanai";
    if(strncasecmp($stringa,$stringb,5)== 0){
        echo "<br>No replace";
    }else{
        $stringb = str_replace('HeLlo','Hello',$stringb);
        echo "<br>$stringb";
    }
    echo "<br>-----------------------------<br>";

    


?>
</body>
</html>