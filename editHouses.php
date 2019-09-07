<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="dashboard.css">

    <title>Dashboard</title>
</head>
<body>

<form action="markAsSold.php" method="post"></form>


<?php
session_start();
if ($_SESSION['loggedin'] !== true) {
    header("Location: login.php?login=notLoggedIn");
}

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "login=Success")) {
    echo '<h5 class="center success">You sucessfully logged in!</h5>';
}
?>

<br><br><br>

<?php
include_once 'connector.php';
$sql = "SELECT * FROM houses;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();

echo "<table align=\"center\">
            <tr>
                <th>ID</th>    
                <th>Sold</th>    
                <th>Address</th>    
                <th>Price</th>    
                <th>Number Sq Ft</th>    
                <th>Bathrooms</th>    
                <th>Bedrooms</th>    
                <th>Description</th>    
                <th>Email</th>    
            </tr>";

foreach ($results as $result) {
    echo "<tr>";
    foreach (array_values($result) as $i => $item) {
        if ($i !== 0 && $i !== 1){
            list($temp, $itemName) = explode(": ", $item);
            echo "<td>$itemName</td>";
        }else{
            echo "<td>$item</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
?>
</body>
