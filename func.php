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
//    function info($word) {
//        echo "$word<br>";
//    }
//
//    function math($x, $y) {
//        return $x + $y;
//    }
//
//    $res1 = math(4, 6);
//    $res2 = math(5, 6);
//
//    info($res2);
//    info($res1);

//    info(4);
//    info("Hello");
//    info(6);

    $list = [5, 7, 3];
    function summary($array) {
        $sum = 0;
        foreach ($array as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function info() {
        global $x;
        $x = 0;
    }

    $x = 10;
    info();
    echo $x. '<br>';

    echo summary($list). '<br>';
    echo summary([5, 2, 3]). '<br>';


    function click() {
        //Для сохранения числа в function
        static $count;
        $count++;
        echo $count. '<br>';
    }

    click();
    click();
    click();

?>

</body>
</html>