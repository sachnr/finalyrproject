<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM user_info WHERE id='" . $_SESSION['sessuser'] . "'");
    $rows = array();
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    $location = mysqli_query($cnx, "SELECT * FROM images WHERE id='" . $_SESSION['sessuser'] . "'");
    while($row = mysqli_fetch_array($location)) {
        $rows[] = $row;
    }
       



    echo json_encode($rows);
?>