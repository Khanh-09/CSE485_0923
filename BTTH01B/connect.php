<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'BTTH01_CSE485';

    $conn = mysqli_connect($server, $user, $pass, $database);
    if (!$conn) {
        die('Can not connect');
    }
?>