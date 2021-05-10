<?php
    $server_name = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "db_hotel";

    $connection = new mysqli($server_name, $username, $password, $db_name);

    if($connection && $connection->connect_error) {
        echo $connection->connect_error;
    }