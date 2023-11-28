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
// Cycle for
//    for($i = 100; $i >= 20; $i -= 5) {
//        echo $i. '<br>';
//    }

//Cycle While
    //$i = 1;
//    $ii = true;
//    while ($ii) {
//        echo 'Бесконечный цикл';
//    }

//    while ($i <= 10) {
//        echo $i. '<br>';
//        $i++;
//    }

    //Cycle Do While
//    $i = 100;
//    do {
//        echo $i;
//    } while ($i < 10);

//for ($el = 100; $el > 10; $el /= 2) {
//    if ($el < 15) {
//        break;
//    }
//    if ($el % 2 == 0) {
//        continue;
//    }
//    echo $el. '<br>';
//}

$list = [5, 7, 3, 8, "some", 45.7];

for ($i = 0; $i < count($list); $i++) {
    echo "Element $i: $list[$i]. <br>";
}

$listАssociative = [
    "age" => 50,
    "name" => "Alex",
    "hobby" => "Footbal"
];
$array = [5, 6, 8, 9];

    foreach ($array as $i => $val) {
        echo "Index: $i. Value: $val. <br>";
    }

    foreach ($listАssociative as $item => $value) {
        echo "Key: $item. Value: $value. <br>";
    }

?>

</body>
</html>