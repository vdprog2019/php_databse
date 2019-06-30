<?php
/*
 * $_SERVER['DOCUMENT_ROOT'] - вернет папку где лежит проект
 *
 * require_once - подключает файл к этой странице
 * */
require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");
//header('Location:delete.php?id_delete=1');

/*
 * бежим по всей таблице и выводим на страницу php
 * */
if(isset($_GET['id'])){
    /*$db->exec("delete * from hooker where id=".(string)$_GET['id']);
    echo "SUCSESS";
    */

    $id = $_GET['id'];
    $stmt = $db->prepare( "DELETE FROM hooker WHERE id =:id" );
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

echo '<table border="1">';
echo '<th>ID</th><th>NAME</th><th>PRICE</th><th>DO IT</th>';
/*
 * foreach{} предоставляет простой способ перебора массивов.
 * query - Выполняет запрос к базе данных
 * */
$url = "/untitled/delete.php?id_delete=1";
//echo  '<td><a href="'.$url.'">удалить</td>';
foreach ($db->query('SELECT * FROM hooker') as $item) {
    /*
     * item -   массив который хранит себе id name price
     * поэтому бежим по нему
     * count($item) - вернет количество ячеек массива
     */
    echo '<tr>';
        for ($j = 0; $j < count($item); $j++){
            /*
             * isset($item[$j]) -   проверит что ячейка массива не пустая
             */
            if(isset($item[$j]))
                echo "<td>".$item[$j]."</td>";
            else {
                echo "<td><a href='?id=". $item[0] . "'>удалить</a></td>";
                break;
            }
        }
    echo '</tr>';
}
echo '</table>';

?>