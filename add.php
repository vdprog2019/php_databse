<?php
if(isset($_POST["name_name"]) and isset($_POST["price_price"])) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/connection.php');
    $n = $_POST["name_name"];
    $p = $_POST["price_price"];
    try {
        /*
         * exec - выполнить внешнюю программу
         */
        $db->exec("INSERT INTO hooker(name, price) values ('" . $n . "', " . $p . ")");
    } catch (Exception $e) {
        /*
         * exception - базовый класс для всех исключений в PHP 5
         * */
        echo $e->getMessage();
    }

    echo 'SUCCESS!';
}
else{
    echo 'error in data';
}
header('Refresh: 1; URL=index.html');