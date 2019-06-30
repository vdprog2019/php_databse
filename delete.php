<?php

if(isset($_GET['id'])) {
    require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");
    $db->exec("delete * from hooker where id =" . $_GET['id']);
}