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
$x = 10;
$y = 20;
echo ($x / $y) . '<br>' . '<br>';
echo ($x + $y) . '<br>' . '<br>';
echo ($x - $y) . '<br>' . '<br>';
echo ($x * $y) . '<br>' . '<br>';
echo ($x % $y) . '<br>' . '<br>';

$x += 10;
echo $x . '<br>';
$y -= 5;
echo $y . '<br>';
$y *= 5;
echo $y . '<br>';
$x += 1;
echo $x . '<br>';

$x++; // $x + 1
$y--; // $y - 1

echo  M_PI . '<br>';
echo M_E . '<br>';

echo abs(-22) . '<br>'; //Do number +
echo ceil(1.001) . '<br>'; // Rounding >
echo floor(1.0001) . '<br>'; // Rounding <
echo round(3.55) . '<br>'; // Rounding if > else <
echo round(3.555555, 3) . '<br>'; //3.555
echo  mt_rand(1, 30) . '<br>'; //Random 1...20
$rand = mt_rand(1, 30);
$rand ++;
echo $rand . '<br>';
echo  min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
echo  max(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . '<br>';
?>

</body>
</html>