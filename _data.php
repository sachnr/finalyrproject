<?php
    // echo("<script>alert('PHP: user_id: " . $_POST['id'] . ", column_name " . $_POST['column'] . ", column_value " . $_POST['value'] ."');</script>");
    /*
        TODO: checks for column datatype
    */
    $cnx = mysqli_connect("localhost", "root", "root", "loginerp");


    $stmt = mysqli_prepare($cnx, "UPDATE user_info SET " . $_POST['column'] . " = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'ss', $_POST['value'], $_POST['id']);

    mysqli_stmt_execute($stmt);

    printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));

    mysqli_close($cnx);
?>