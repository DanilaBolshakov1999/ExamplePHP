<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>
    <h1>Главная страница</h1>
<?php
    //echo date('m-l H:i:s', time() + 100). '<br>';
    //echo time();
    //echo date('m-l H:i:s', strtotime("-1 Week -2 Day -3 Hour"));
    echo date('m-l H:i:s', strtotime("next Month"));
    require "blocks/footer.php";
?>

<?php
//    //Встроенные функции
//    $list = [5, 7, 3, 4, 6];
//    unset($list[1]);
//    $list = array_values($list);
//    rsort($list);
//
//    $arr = array_slice($list, 2, 2);
//    print_r($arr);
//    echo "<br>";
//
//    $arr_1 = [5, 7];
//    $arr_2 = [6, 8, 9];
//    $arr_3 = array_merge($arr_1, $arr_2);
//    print_r($arr_3);
//    echo "<br>";
//    //shuffle($list);
////    if (in_array(3, $list) == "") {
////        echo 'Not Found'. '<br>';
////    } else {
////        echo 'Found'. '<br>';
////    }
//    print_r($list);
//    echo "<br>";
//
//    $x = "10";
//    echo gettype($x). "<br>";
//    echo is_numeric($x). "<br>";
//    echo is_array($x). "<br>";
//
//    $str = "Example";
//    echo strpos($str, "a"). "<br>";
//
//    $words = "john, bob, alex";
//    //$arr_words = explode(",", $words);
//    print_r(
//            $arr_words = explode(",", $words)
//    ). "<br>";
//    echo implode(" | ", $arr_words). '<br>';
?>
