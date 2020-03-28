<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM `notification` order by `datetime` desc limit 3");
    $rows = array();
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    echo json_encode($rows);
?>

