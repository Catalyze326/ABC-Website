<?php
// if(isset($_POST["submit"])) {
    session_start();
    include_once 'connector.php';

    if(!isset($_POST['name'])){
        header('Location: signup?signUp=name=notFilledOut');
        exit();
    }
    if(!isset($_POST['email'])) {
        header('Location: signup?signUp=email=notFilledOut');
        exit();
    }
    if(!isset($_POST['message'])){
        header('Location: signup?signUp=message=notFilledOut');
        exit();
    }


    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $message = $_POST['message'];
    $time = date('m/d/Y h:i:s a', time());

    $sql = 'INSERT INTO peopleInvesting (name, email message, timeDate) VALUES(?, ?, ?, ?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $name, $email, $message, $time);
    $stmt->execute();

    header('Location: signUpInvest.php?signUp=success');
    exit();

// }
