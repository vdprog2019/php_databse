<?php
if(isset($_POST['id'])){
    require_once($_SERVER['DOCUMENT_ROOT'] . '/connection.php');
    $id = $_POST['id'];
    $stmt = $db->prepare( "UPDATE hooker SET name= :name, price = :price WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->execute();
}

?>