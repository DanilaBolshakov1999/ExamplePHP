<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $a = 5;
    $str = "Hello";
    $isWeatherGood = false;

//    if ($a >= 5) {
//    echo ('$a == 5') . '<br>';
//    }

    if ($str != "Hello!" && !$isWeatherGood) {
        echo 'First' . '<br>';
        if ($str == 'Hello') {
            echo 'Yes';
        }
    } else if ($a == 5) {
        $res = 'Res';
        echo $res;
    } else if ($a > 50) {
        echo '$a > 50';
    } else if ($a <= 45) {
        echo '$a <= 45';
    }
    else {
        echo ('NO') . '<br>';
    }
?>
</body>
</html>