<?php

session_start();
if ($_SESSION['loggedin'] !== true) {
    header("Location: login.php?login=notLoggedIn");
}

if (isset($_POST['submit'])) {
    include_once 'connector.php';

    $editCell = $_POST['editCell'];
    $id = $_POST['id'];

    list($col, $row) = explode("*", $id, 2);
    $cols =  ["addr", "sold", "price", "numSqFt", "numBath", "numBed", "description", "email"];
    $col = $cols[$col - 1];
    
    $sql = "UPDATE houses SET $col = ? WHERE id = $row;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s',  $editCell);
    $stmt->execute();

    header("Location: editHouses.php?edit=success");


}