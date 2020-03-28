<?php
    session_start();
    $cnx = mysqli_connect("localhost", "root", "", "loginerp");
    $monday = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Monday'");
    $rows = array();
    while($row = mysqli_fetch_array($monday)) {
        $rows[] = $row;
    }
    $tuesday = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Tuesday'");

    while($row = mysqli_fetch_array($tuesday)) {
        $rows[] = $row;
    }
    $wed = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Wednesday'");

    while($row = mysqli_fetch_array($wed)) {
        $rows[] = $row;
    }
    $thu = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Thrusday'");

    while($row = mysqli_fetch_array($thu)) {
        $rows[] = $row;
    }
    $fri = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Friday'");

    while($row = mysqli_fetch_array($fri)) {
        $rows[] = $row;
    }
    $sat = mysqli_query($cnx, "SELECT * FROM timetable WHERE semester='" . $_GET['sem'] . "' && day='Saturday'");

    while($row = mysqli_fetch_array($sat)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
?>