<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $result = mysqli_query($cnx, "SELECT * FROM user_info WHERE id='" . $_SESSION['sessuser'] . "'");
    $data = array();
    while($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
 echo json_encode($data);
?>

