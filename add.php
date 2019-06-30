<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');
$n = $_POST["name_name"];
$p = $_POST["price_price"];
try{
    /*
     * exec - выполнить внешнюю программу
     */
    $db->exec("INSERT INTO hooker(name, price) values ('".$n."', ".$p.")");
}
catch (Exception $e){
    /*
     * exception - базовый класс для всех исключений в PHP 5
     * */
    echo $e->getMessage();
}

echo 'SUCCESS!';