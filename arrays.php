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
    //TODO: Одномерный массив
    $numbers = array(4, 5, 7, 2, 0, -23, 6);
    $numbers[1] = 45;

    echo $numbers[1]. '<br>';

    $arr = [4, true, 6, '8', 0.4, 'c', 24, 16];
    $arr[0] = 'false';

    echo $arr[0]. '<br>';

    //TODO: Ассоциативный массив
    $list = [
        "age" => 50,
        "name" => "Alex",
        "hobby" => "Footbal"
    ];
    $list["name"] = "Bob";
    echo $list["name"]. '<br>';

    //TODO: Многомерный массив
    $matrix = [
        [4, 6, 8],
        [3, 2],
        [1, 5, 8, "9"]
    ];
    $matrix[0][1] = 4;
    $matrix[0][2] = "Three";
    echo $matrix[0][1]. '<br>';
    echo $matrix[0][2]. '<br>';
?>

</body>
</html>