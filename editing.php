<html>
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
<?php
    if(isset($_GET['id'])) {
        require_once($_SERVER['DOCUMENT_ROOT']."/connection.php");
        $id = $_GET['id'];
        $stmt = $db->prepare( "SELECT * FROM hooker WHERE id =:id" );
        $stmt->bindParam(':id', $id);

        if( $stmt->execute() > 0){
            echo "<form id='mainForm' style='background-color: yellow' method='post'>";
            $old = $stmt->fetchAll() ;
            if(isset($old)) {
                foreach ($old as $item) {
                    if(isset($item)) {
                        for ($j = 0; $j < count($item); $j++) {
                            if (isset($item[$j])) {
                                echo "<label>".array_search($item[$j], $item)."</label><input type='text' id='".array_search($item[$j], $item)."' value='".$item[$j]."'/></label><br>";
                            }
                        }
                    }

                }
            }
            echo "<button name='save' id='save' value='save'>save</button>";
            echo "</form>";
        }
        else
        {
            echo "No data";
        }
    }
    else
    {
        echo "No data";
    }
    ?>
</body>
<script>
    $(document).ready(function(){
        $("#save").click(function(){
            $.ajax({
                type:"POST",
                url:"save.php",
                dataType: "html",
                data: {select1:$('#id').val(), select2:$('#name').val(), select3:$('#price').val()},
                success: function(response){
                    alert('ok');
                    alert(response);
                },
                error:function(){
                    alert('ne ok');
                }
            });
        });
    });
</script>
</html>


