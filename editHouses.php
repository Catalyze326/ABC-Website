<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>ABC Capital Investing</title>
</head>
<body>

<style>
    body {
        background: linear-gradient(
                rgba(0, 0, 0, 0.8),
                rgba(0, 0, 0, 0.8)
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
            "        <a href=\"../index.php\">Home</a>\n" +
            "        <a href=\"../signUp.php\">Sign Up</a>\n" +
            "        <a href=\"../about.php\">About</a>\n" +
            "        <a href=\"../contact.php\">Contact</a>\n" +
            "        <a href=\"../mission.php\">Mission</a>\n" +
            "        <a href=\"../houses.php\">Houses</a>\n" +
            "    </div>");
    } else {
        document.write("\n" +
            "<!-- Top Navigation Menu -->\n" +
            "<div class=\"topnav\">\n" +
            "  <a href=\"index.php\" class=\"active\">Home</a>\n" +
            "  <div id=\"myLinks\">\n" +
            "        <a href=\"../about.php\">About</a>\n" +
            "        <a href=\"../contact.php\">Contact</a>\n" +
            "        <a href=\"../mission.php\">Mission</a>\n" +
            "        <a href=\"../signUp.php\">Sign Up</a>\n" +
            "        <a href=\"../houses.php\">Houses</a>\n" +
            "  </div>\n" +
            "  <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">\n" +
            "    <i class=\"fa fa-bars\"></i>\n" +
            "  </a>\n" +
            "</div>")
    }
</script>
<?php
session_start();
if ($_SESSION['loggedin'] !== true) {
    header("Location: login.php?login=notLoggedIn");
}

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "edit=Success")) {
    echo '<h5 class="center success">You sucessfully edited a cell!</h5>';
}
?>

<br><br><br>

<form action="sendUpdates.php" method="post">

    <?php
    include_once 'connector.php';
    $sql = "SELECT * FROM houses;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();

    echo "<table align=\"center\">
            <tr>
                <th>ID</th>    
                <th>Address</th>    
                <th>For Sale</th>    
                <th>Price</th>    
                <th>Number Sq Ft</th>    
                <th>Bathrooms</th>    
                <th>Bedrooms</th>    
                <th>Description</th>    
                <th>Email</th>    
            </tr>";

    $counter = 0;
    foreach ($results as $result) {
        $counter++;
        echo "<tr>";
        foreach (array_values($result) as $i => $item) {
            $id = $i. '*' . $counter;
            if ($i < 2){
                echo "<td>$item</td>";
            }else {
                echo "<td>
        <button id=\"$id\" onclick='changeToInput(\"$id\")' class=\"mirrorText\" >$item</button></form>
</td>";
            }
        }
        echo "</tr>";
    }
    echo '</table>';
    ?>
    <br><br>
    <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
            <i class="material-icons right"></i>
        </button>
    </div>
</form>

<script>
    function changeToInput(id) {
        if (document.getElementById("editCell") === null){
            document.getElementById(id).outerHTML = "<input id='editCell' type=\"text\" name=\"editCell\" placeholder='Update this info'><input style='visibility: hidden; height: 1px; width: 1px;' type=\"text\" name=\"id\" value=" + id +">";
        }else {
            document.location.reload()
        }

    }
</script>



<?php
if (isset($_POST['sold'])) {
    $sold = $_POST['sold'];
    echo $sold;
}
?>


</body>
