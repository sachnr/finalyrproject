<?php
    $conn = mysqli_connect("localhost", "root", "", "loginerp");
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert_image = mysqli_query($conn, "INSERT INTO `images` (name,id) VALUES ('".$fileName."', '".$_SESSION['sessuser']."')");
          }
      }

    }

   header("Location:dashboard.php");
?>