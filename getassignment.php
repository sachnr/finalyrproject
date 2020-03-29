<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM ( SELECT * FROM `assignment` order by `datetime` desc limit 10) AS samp WHERE `sem`='" . $_GET['sem'] . "';");
    $rows = array();
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    echo json_encode($rows);
?>

