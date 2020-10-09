<?php

try {
    $db = new PDO( 'mysql:host=localhost;dbname=testdb;charset=utf8', 'root', '' );
}

catch(Exception $e) {
    echo $e->getMessage();
}
?>