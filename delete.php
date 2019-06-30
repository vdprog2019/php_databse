<?php

if(isset($_GET['id'])) {
    require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");
    $id = $_GET['id'];
    $stmt = $db->prepare( "DELETE FROM hooker WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "PIZDAT KAK KRABOVIY SALAT";
}
else{
    echo 'no data';
}
header('Refresh: 1; URL=show.php');