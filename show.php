<?php
/*
 * $_SERVER['DOCUMENT_ROOT'] - вернет папку где лежит проект
 *
 * require_once - подключает файл к этой странице
 * */
require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");

/*
 * бежим по всей таблице и выводим на страницу php
 * */
$i = 0;
foreach ($db->query('SELECT * FROM hooker') as $item) {
    /*
     * item -   массив который хранит себе id name price
     * поэтому бежим по нему
     * count($item) - вернет количество ячеек массива
     */
    echo '<ul>'.$i;
    for ($j = 0; $j < count($item); $j++){
        /*
         * isset($item[$j]) -   проверит что ячейка массива не пустая
         */
        if(isset($item[$j]))
            echo "<li>".$item[$j]."</li>";
    }
    echo '</ul>';
    $i++;
}
?>