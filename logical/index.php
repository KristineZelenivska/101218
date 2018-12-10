<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(3>10){
        print "trīs ir lielaks par 10";
    } else {
        print "trīs nav lielaks par 10";
    }
    print "<br>";
    if(3>10){
        print "trīs ir lielaks par 10";
    } elseif (4>5){
        print "četri nav lielaks par 5";
    } else {
        print "Nekas neizpildijas";
    }
    print "<br>";
    if(1==2){
        print "Nepareizi";
    } 
    print "<br>";
    if(1===3){
        print "Nepareizi";
    } 
    print "<br>";
    if(1==="1"){
        print "Naay";
    } 
    print "<br>";
    if(1=="1"){
        print "Yaay";
    } 
    if ((1===1 && 2===2)|| 3===3){
        print "OK";
    } 
    ?>
<br>
<?php
//switch
$number = 100;

switch($number){
    case 34:
    print "34";
    break;
    case 100:
    print "100";
    break;
    default: 
    print "none";
}
?>

</body>
</html>