<?php
    include('./DbConnection.php');
    // Capture User Input
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $fullName = trim($fullName);
    $email = trim($email);
    $message = trim($message);

    if($fullName == null || $email == null || $message == null){
        header('location: ../index.php');
        exit();
    } else{
        $dbh = new DbConnection();
        $conn = $dbh->getConnection();

        $sql = "INSERT INTO `formsubmission` (customer_name, customer_email, customer_msg) VALUES (:fullName, :email, :message)";

        // Prepare Query
        $stmnt = $conn->prepare($sql);

        $stmnt->execute(array(
            ':fullName' => $fullName,
            ':email' => $email,
            ':message' => $message
        ));

        $stmnt->closeCursor();
        $dbh = null;

        header('location: ../index.php');
    }