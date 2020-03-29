<?php 
session_start();
 $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM result WHERE id='" . $_SESSION['sessuser'] . "'");
    $rows = array();
    while($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
 ?>