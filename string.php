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
$str = "String";
//echo 'var: $str' . '<br>';
echo "var: $str" . '!';
echo "<input type=\"text\"><br>";
//echo "<input type='checkbox'>" . '<br>';
//echo "<input type='checkbox'>" . '<br>';
//echo "<input type='checkbox'>" . '<br>';
//echo "<input type='checkbox'>" . '<br>';

$lenght = mb_strlen($str, 'UTF-8');
echo $lenght . '<br>';
echo trim("12345    45678") . '<br>';
echo mb_strtolower("DANILA") . '<br>';
echo strtoupper("danila") . '<br>';
echo mb_strtoupper(trim($str)) . '<br>';
echo md5("Danila_29");
?>
</body>
</html>