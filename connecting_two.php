<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>
    <h1>Главная страница</h1>
<?php
    require "blocks/footer.php";
?>

<?php
//    $file = fopen("text.txt", "a");
//    fwrite($file, "\nExample.txt\nHello");
//    fclose($file);
    $file_name = "text.txt";
    $file = fopen($file_name, "r");

    $content = fread($file, filesize($file_name));

    echo '<pre>' .$content. '</pre>';

    //file_put_contents("a.txt", "Example\nHello");
    //echo file_get_contents("a.txt"). '<br>';
    //echo file_exists("a1.txt"). '<br>';
    //rename("a.txt", "new_name.txt");

    //unlink("new_name.txt");

    echo fileperms(__FILE__);
    chmod(__FILE__, 0777);

    fclose($file);
?>
