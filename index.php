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
# CODE
echo '<b>Hello</b> <b>World</b>'; //Bold
echo "<br>Hello"; //New Line
echo "<br>Hello"; //New Line
//echo '<br>\''; //New Line
// Comment
# Comment
/*
 * Hello
 * Hello
 */

const MY_AGE = 10;
echo MY_AGE . '<br>';

$number = 5;
$num = -0.55;
$string = ' Properties ';
$true = false;
$a = 10.0;
$b = "10";
echo $a + floatval($b);
echo $string . ' : ' . $number . '. var: 2 ' . $num;

echo "<pre>";
print <<< END
    It's funny when signs say things like:
    Original "Root" Beer
    "Free" Gift
    Shoes cleaned while "you" wait
    or have other misquoted words.
END;
echo "</pre>";

echo "<pre>";
print <<< DARK
    Hello
    Danila
DARK;
echo "</pre>";

$cards_info = 10;

if ($cards_info > 0) {
    $url = '/deal.php';
    $text = 'Deal More Cards';
} else {
    $url = '/new-game.php';
    $text = 'Start a New Game';
}

//print <<< HTML
//There are <b>$remaining_cards</b> left.
//<p>
//<a href="$url">$text</a>
//HTML;
?>

</body>
</html>


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
 echo '';
 echo "";

 echo "<pre>";
 echo print <<< BLUE
fkfkfkfkkfkfkfk
ffkfkfkfkfkf
fkfkkfkfkfkfk
BLUE;
echo "</pre>";
?>

</body>
</html>
