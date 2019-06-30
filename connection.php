<?php
$user = "root";
$password = "password";

try {
    /*
     * PDO - просто интерфейс, позволяющий нам абстрагироваться от конкретной базы данных
     * */
    $db = new PDO("mysql:host=localhost:3306;dbname=HOOK", $user, $password);
} catch (Exeption $e) {
    echo $e->getMessage();
};
?>