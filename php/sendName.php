<?php

if(isset($_POST["submit"])) {
    session_start();
    include_once 'connector.php';

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];

    $sql = 'INSERT INTO names VALUES(?, ?, ?, ?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_params('sss', $fName, $lName, $email, date('m/d/Y h:i:s a', time()));
    $stmt->execute();

    header('Location: signUp.php?login=success');
    exit();

}
