<?php
    require "../db.php";

    $room_number = $_GET["id"];
    $sql = "SELECT * FROM stanze WHERE room_number = $room_number";
    $rows = $connection->query($sql);

    $result = [];

    if ($rows && $rows->num_rows > 0) {
        while ($row = $rows->fetch_assoc()) {
            array_push($result, $row);
        }
    }

    echo json_encode($result);
