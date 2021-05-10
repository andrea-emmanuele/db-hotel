<?php
    require "../db.php";

    header("Content-type: application/json");

    $sql = "SELECT * FROM stanze";
    $rows = $connection->query($sql);

    $result = [];

    if ($rows && $rows->num_rows > 0) {
        while ($row = $rows->fetch_assoc()) {
            array_push($result, $row);
        }
    }

    echo json_encode($result);

