<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $message = "Сообщение";
    $to = "admin@itproger.com";
    $from = "example@itproger.com";
    $subject = "Тема сообщения";

    $subject = "=?utf-8?B?". base64_encode($subject). "?=";
    $headers = "From: $from\r\nReplay-to: $from\r\nContent-type: text\plain; charset=utf-8\r\n";

    mail($to, $subject, $message);
    require "blocks/footer.php";
?>
