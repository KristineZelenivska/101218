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
    $counter = 0;
    $masivs = array(" viens"," divi"," tris"," četri"," pieci");
    foreach ($masivs as $key => $value){

    print "<table>";
    print "<tr>".$key."";
    print "<tr>".$value."";
    }
    ?>
</body>
</html>
