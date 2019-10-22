<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <title>ABC Capital Investing</title>
</head>
<body>

<style>
    body {
        background: linear-gradient(
                rgba(0, 0, 0, 0.85),
                rgba(0, 0, 0, 0.85)
        ),
        url(download.jpg);

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

    }
</style>


<script>
    if (screen.width > 600) {
        document.write("<div class=\"topnav\">\n" +
            "        <a href=\"index.php\"><img src=\"grandpa.png\" alt=\"Home\"></a>\n" +
            "        <a href=\"invest.php\" class=\"withPadding\">Invest</a>\n" +
            "        <a href=\"buy.php\" class=\"withPadding\">Buy</a>\n" +
            "        <a href=\"sell.php\" class=\"withPadding\">Sell</a>\n" +
            "        <a href=\"info.php\" class=\"withPadding\">Info</a>\n" +
            "    </div>");
    } else {
        document.write("\n" +
            "<!-- Top Navigation Menu -->\n" +
            "<div class=\"topnav\">\n" +
            "  <a href=\"index.php\" class=\"active\">Home</a>\n" +
            "  <div id=\"myLinks\">\n" +
            "        <a href=\"invest.php\">Invest</a>\n" +
            "        <a href=\"buy.php\">Buy</a>\n" +
            "        <a href=\"sell.php\">Sell</a>\n" +
            "        <a href=\"info.php\">Info</a>\n" +
            "  </div>\n" +
            "  <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">\n" +
            "    <i class=\"fa fa-bars\"></i>\n" +
            "  </a>\n" +
            "</div>")
    }
</script>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

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
$sql = "SELECT * FROM users;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();

echo "<table align=\"center\">
            <tr>
                <th>ID</th>    
                <th>First Name</th>    
                <th>Last Name</th>    
                <th>Email</th>    
                <th>Use Case</th>    
                <th>Date Signed Up</th>    
            </tr>";

foreach ($results as $result) {
    echo "<tr>";
    foreach ($result as $res) {
        echo "<td>$res</td>";
    }
    echo "</tr>";
}
echo '</table>';
?>
</body>
