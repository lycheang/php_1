<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function style($content):string{
        return "<h2 style='color:red'>$content</h2>";
    }
    $content="hello here is the test to check sensitive case for function echo";
    //echo
    echo style(content:$content);
    Echo "<br>";
    //$content can not contenT 
    //echo style($content);
    //herere 
    ECHO "<h2 style='color:blue'>$content</h2>";
    //echo STYle is okay
    echo STyle(content: $content);


    ?>

    <?php
    $content="hello here is the check between single and double quotes";
    echo "<p style='color:red; font-size:5rem'>$content</p>";
    echo "<br>";
    echo '<p style="color:blue;font-size:5rem">$content</p>';

    ?>
    <!-- round method use when number float -->
    <?php
    $value=384.67;
    $value=round(num:$value);
    echo style(content:$value);
    ?>

    <?php
    define(constant_name: 'DEFAULT_LANGUAGE',value:'EngLisT');
    echo style(content:DEFAULT_LANGUAGE);
    
    ?>
    <!-- first example -->
    <?php
    $val=3;
    if($val==4){
        echo "No value return";
    }
    else{
        echo "Value is not equal to 4";
    }
    {
        $color=array('red','blue','green');
        echo "<p style='color:$color[1]; font-size:5rem'>The color is index 2</p>";
    }
    ?>
    <!-- another example -->
    <?php
    $val1=12;
    $val2=13;
    $z=$val1==$val2;
    if($z){
        echo "<p style='color:red; font-size:5rem'>Because of z is true,the code execute writting content</p>";
    }
    else{
        $content="really value of z is false... it executes only the block code of else";
        echo style(content:$content);

    }
    ?>
    <!-- function multiple call to use -->
    <?php
    // function sum($x,$y) :mixed{
    //     $z=$x+$y;
    //     return $z;
    // }
    // echo "<h2 style='color:blue'>".sum(x:23,y:233)."</h2>";
    
    ?>
    <br>
    <?php echo style(sum(12,-0.022));
    echo "<br>";
    echo style(sum(2.0e11,100));
    ?>
    <h2>here is array</h2>
    <?php
    $cities=array('city1','city2','city3');
    $counties=array('city'=>'phnompenh','province'=>'kandal','pm'=>'samdach hun manet');

    echo var_dump(value:$cities);
    echo "<br>";
    echo var_dump(value:$counties);
    echo "<br>";
    print_r(value:$cities);
    echo "<br>";
    print_r(value:$counties);
    echo "<br>";
    var_export(value:$cities);
    echo "<br>";
    var_export(value:$counties);
    echo "<br>";
    echo $cities[0];
    //assign new value to index array which index:0
    $cities[0]='citynew';
    echo "<br>";
    var_dump(value:$cities);
    //assign new value to associative array which index:0
    $counties['city']='Siem Reap';
    var_dump(value:$counties);
    ?>


<?php
function Sum($num1,$num2): mixed{
    $res=$num1+$num2;
    return $res;
}
ECho Style(content:Sum(num1:223,num2:112));
$number=Sum(num1:223,num2:114);
echo "the value is $number";
echo "<br/>";
echo 'the value is $number';
$val =strlen(string: 'test');
echo "<p>The value that we get from counting character is".style(content:$val);
?>
<?php
$a=232;
$b=2;
$c=$a%$b;
echo style(content:"the last value of variable is "."<span style='color:blue;font-size:5rem'>$c</span>");
$c=sum(num1:12,num2:32);
echo style(content:"the last value of variable is "."<span style='color:blue;font-size:5rem'>$c</span>");
?>

<?php
    define(constant_name: 'DEFAULT_DEFINE',value:'English');
    echo style(content:DEFAULT_DEFINE);


    $userprofile = array('id' => "0001", 'name' => 'bunchheang', "degree" => null);

echo "<p>The id is {$userprofile['id']}.</p>";
echo "<p>The name is {$userprofile['name']}.</p>";
echo "<p>The degree is: " . ($userprofile["degree"] ?? "<span style='color:red'>not provided</span>") . "</p>";
    ?>
<?php
$x=strlen(string:'23');
$y='2';
$z=$x===$y;
if($z){
    $str1="the value of z is true";
    echo style(content:$str1);
}else{
    $str2="the value of z is false";
    echo style(content:$str2);
}
echo style(content: sum(num1:12,num2:2.0e11));
echo style(content: sum(num1:12,num2:-2.092));



//index array
$indexArr=array('honda','toyota','mazda','nissan');
var_dump(value:$indexArr);
print_r(value:$indexArr);


//associative array

$associativeArr=array('id'=>1,'name'=>'bunchheang','degree'=>'bachelor','age'=>23,'BOD'=>'1999-12-12','address'=>'phnompenh');
echo "<br>";
print_r(value:$associativeArr);
//tell array which have index:0
echo style(content:$indexarr[0]);
//tell the array which have key='name'
echo style(content:$associativeArr['name']);

///assign the new value to array
$associativeArr['id']=0003;
echo style(content:$associativeArr['id']);
?>
<?php
// exercise may22 rainday
function mod($x,$y):int{
    $z=$x%$y;
    return $z;
}
style(content:mod(x:12,y:5));
//perfix
$prefix=100;
$val=++$prefix;
style (content:'the value of prefix:'."<span style='color:blue;font-size:5rem'>$val</span>");
$val=++ $prefix;
style (content:'the value of prefix:'."<span style='color:blue;font-size:5rem'>$val</span>");
//defix
$defix=100;
$val=--$defix;
style (content:'the value of defix:'."<span style='color:blue;font-size:5rem'>$val</span>");
$val=-- $defix;
style (content:'the value of defix:'."<span style='color:blue;font-size:5rem'>$val</span>");
function ass_com_op($x,$y):float|int{
    return $x -=$y;
}
 echo style(content:ass_com_op(x:10,y:2));

?>
<!-- exercise may29 -->
<?php
function value_var($val):float|int{
$val+=100;
return $val;
}
$val_out=200;
echo value_var(val:$val_out);
echo "<br>$val_out";

function val_par(&$val_new):float|int{
    $val_new+=100;
    return $val_new;
}
$val_out=200;
echo "<br>".val_par(val_new:$val_out);
echo "<br>$val_out";

function sum_par($x,$y):mixed{
    $z=$x+$y;
    return $z;
}
echo style(content:sum_par(x:23,y:10));
// in case we have many parameter ...We use parameter as array

function sum_multi_par(...$x):float|int{
    $sum=0;
    for($i=0;$i<count(value:$x);$i++){
        $sum+=$x[$i];
    }
    return $sum;

}
echo style(content: sum_multi_par(12,3,34,23,233,222,90,222,900))

?>

<?php
function globe(): int{
    global $var;
    $var=78;
    $var+=6;
    return $var;
}
echo "<br>".globe();
$z=$var+16;
echo style(content:"<br>".$z);
?>

<?php
function avg($score1,$score2,$score3):float|int{
    $avg=($score1+$score2+$score3)/3;
    return $avg;
}
$average=round(num:avg(score1:12,score2:23,score3:34));
if($average>=50){
    echo style(content:"<span style='color:blue;font-size:5rem'>You pass the exam with average score $average</span>");
} else {
    echo style(content:"<span style='color:red;font-size:5rem'>You fail the exam with average score $average</span>");
}
?>

<?php
//example 1 in case we us else if and if

$currenttemp=25;
if($currenttemp>30){
    echo style(content:'It is so hot');
}
else if($currenttemp>20){
    echo style(content:'It is warm');//executed only this one
}
else if($currenttemp>10){
    echo style(content:'It is cool');
}
else{
    echo style(content:'It is cold');
}
//many independent if

if($currenttemp>30){
    echo style(content:'It is so hot
');
}
if($currenttemp>40){
    echo style(content:'It is very hot');
}
?>

<?php
//example 2 in case we use switch



?>
</body>
</html>