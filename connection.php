<?php
$user = "root";
$password = "password";

try {
    $db = new PDO("mysql:host=localhost:3306;dbname=HOOK", $user, $password);
} catch (Exeption $e) {
    echo "das";
    echo $e->getMessage();
};
?>