<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "root", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM user_info WHERE id='" . $_SESSION['sessuser'] . "'");

    $rows = array();
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    echo json_encode($rows);
?>