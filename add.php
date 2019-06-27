<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');
$n = $_POST["name_name"];
$p = $_POST["price_price"];
try{
    $db->exec("INSERT INTO hooker(name, price) values ('".$n."', ".$p.")");
}
catch (Exception $e){
    echo $e->getMessage();
}

echo 'SUCCESS!';