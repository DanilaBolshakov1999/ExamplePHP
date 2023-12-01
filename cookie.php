<?php
    session_start();
    $title = "Главная страница";
    require "blocks/header.php";
?>
    <h1>Главная страница</h1>
<?php
    $user_name = "Alex";
    //setcookie("user_name", $user_name, time() + 180);
    //print_r($_COOKIE);

    //Cохранение данных
    //setcookie("user_name", $user_name, time() - 180);
    //echo $_COOKIE['user_name'];

    //$_SESSION['user_name'] = $user_name;

    //unset($_SESSION['user_name']);

    session_destroy();

    if($_SESSION['user_name'] == "Alex") {
        echo "SESSION Good";
    }

    require "blocks/footer.php";
?>