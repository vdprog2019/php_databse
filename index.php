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

//$db->exec('INSERT INTO hooker(name, price) values (\'ebaniy pizdec\', 1004)');

/*
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM hooker";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);*/
/*$link = mysqli_connect($host, $user, $password, $database) or die("Error (Vlad ptichka) ". mysqli_error($link));
mysqli_close($link);*/
?>