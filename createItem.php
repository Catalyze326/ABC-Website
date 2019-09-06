<?php
$target_dir = "uploads/";
$target_file = $target_dir . str_replace(' ', '',$_POST['addr']) . '.jpg';
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        header("Location: inputNewHouse.php?upload=notAnImage");
        exit();
    }
//// Check if file already exists
//    if (file_exists($target_file)) {
//        header("Location: inputNewHouse.php?upload=fileAlreadyExists");
//        exit();
//    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        header("Location: inputNewHouse.php?upload=sizeError");
        exit();
    }
// Allow certain file formats
    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //     && $imageFileType != "gif") {
    //     header("Location: inputNewHouse.php?upload=fileTypeError");
    //     exit();
    // }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header("Location: inputNewHouse.php?upload=failed");
        exit();
// if everything is ok, try to upload file
    } else {
        if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo 'file moved ', $target_file;
            header("Location: inputNewHouse.php?upload=error");
            exit();
        }
    }

    include_once 'connector.php';

    if (!isset($_POST['bathrooms']) && !isset($_POST['bedrooms']) && !isset($_POST['sqft'])
        && !isset($_POST['description']) && !isset($_POST['addr']) && !isset($_POST['email']) &&
        !isset($_POST['price'])) {
        header("Location: inputNewHouse.php?upload=notFilledOut");
        exit();
    }

    $time = date('m/d/Y h:i:s a', time());
    $numBathrooms = 'Bathrooms: ' . $_POST['bathrooms'];
    $numBedrooms = 'Bedrooms: ' . $_POST['bedrooms'];
    $sqft = 'Sq Ft: ' . $_POST['sqft'];
    $disc = 'Description: ' . $_POST['description'];
    $addr = 'Address: ' . $_POST['addr'];
    $email = 'Email: ' . $_POST['email'];
    $price = 'Price: ' . $_POST['price'];
    $sold = 'For Sale';


    $sql = "INSERT INTO houses (sold, addr, price, numSqFt, numBath, numBed, description, email) VALUES(?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $sold, $addr, $price, $sqft, $numBathrooms, $numBedrooms, $disc, $email);
    $stmt->execute();

    header("Location: inputNewHouse.php?upload=sucess");
    exit();
}