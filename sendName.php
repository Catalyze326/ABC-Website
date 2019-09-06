<?php

if(isset($_POST["submit"])) {
    session_start();
    include_once 'connector.php';

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $time = date('m/d/Y h:i:s a', time());


    $sql = 'INSERT INTO users (fName, lName, email, timeDate) VALUES(?, ?, ?, ?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $fName, $lName, $email, $time);
    $stmt->execute();

    header('Location: signUp.php?login=success');
    exit();

}
