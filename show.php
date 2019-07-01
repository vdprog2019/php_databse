<?php

require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");

echo '<table border="1">';
echo '<th>ID</th><th>NAME</th><th>PRICE</th><th>DO IT</th>';

foreach ($db->query('SELECT * FROM hooker') as $item) {
    echo '<tr>';
        for ($j = 0; $j < count($item); $j++){

            if(isset($item[$j]))
                echo "<td>".$item[$j]."</td>";
            else {

                echo "<td><a href='delete.php?id=".$item[0]. "'>удалить</a>".
                "|<a href='editing.php?id=". $item[0] . "'>редактировать</a></td>";
                break;
            }
        }
    echo '</tr>';
}
echo '</table>';
echo '<a href="index.html">home</a>';
?>