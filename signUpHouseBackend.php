<?php
if(isset($_POST["submit"])) {
    session_start();
    include_once 'connector.php';

    if(!isset($_POST['name'])){
        header('Location: signup?signUp=name=notFilledOut');
        exit();
    }
    if(!isset($_POST['addr'])){
        header('Location: signup?signUp=addr=notFilledOut');
        exit();
    }
    if(!isset($_POST['email'])) {
        header('Location: signup?signUp=email=notFilledOut');
        exit();
    }

    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $email = $_POST['email'];
    $time = date('m/d/Y h:i:s a', time());

    $sql = 'INSERT INTO peopleSelling (name, email addr, timeDate) VALUES(?, ?, ?, ?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $name, $email, $addr, $time);
    $stmt->execute();

    header('Location: signUpInvest.php?signUp=success');
    exit();

}
