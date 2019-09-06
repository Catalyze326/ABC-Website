<?php
if(isset($_POST["submit"])) {
    session_start();
    include_once 'connector.php';

    if(!isset($_POST['fName']) && !isset($_POST['lName']) && !isset($_POST['email']) && !isset($_POST[''])){
        header('Location: signup?signUp=notFilledOut');
        exit();
    }elseif(!isset($_POST['buy']) || !isset($_POST['sell']) || !isset($_POST['invest'])){
        header('Location: signup?signUp=notFilledOut');
        exit();
    }

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $time = date('m/d/Y h:i:s a', time());
    $useCase = '';
    if(isset($_POST['buy'])){
        $useCase = 'Buy a House';
    }elseif(isset($_POST['sell'])){
        $useCase = 'Sell a House';
    }else{
        $useCase = 'invest';
    }

    $sql = 'INSERT INTO users (fName, lName, email, useCase, timeDate) VALUES(?, ?, ?, ?, ?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $fName, $lName, $email, $useCase, $time);
    $stmt->execute();

    header('Location: signUp.php?signUp=success');
    exit();

}
