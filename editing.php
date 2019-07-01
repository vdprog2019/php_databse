<?php
if(isset($_GET['id'])) {
    require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");
    $id = $_GET['id'];
    $stmt = $db->prepare( "SELECT * FROM hooker WHERE id =:id" );
    $stmt->bindParam(':id', $id);

    if( $stmt->execute() > 0){
        echo "<form style='background-color: yellow' method='post'>";
        foreach ($stmt->fetchAll() as $item) {
            for ($j = 0; $j < count($item); $j++){

                if(isset($item[$j])) {
                    echo "<label>" . array_search($item[$j], $item) . "</label><input type='text' value='" . $item[$j] . "' /></label><br>";
                }
            }

        }
        echo "<input type=\"submit\" name=\"test\" id=\"test\" value=\"RUN\" /><br/>";
        echo "</form>";
    }

    else
    {
        echo "No data";
    }
    function testfun()
    {
      echo 'bla';
    }

    if(array_key_exists('test',$_POST)){
        testfun();
    }
}
else
{
    echo "No data";
}

