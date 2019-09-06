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
                rgba(0, 0, 0, 0.65),
                rgba(0, 0, 0, 0.65)
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
            "        <a href=\"index.php\">Home</a>\n" +
            "        <a href=\"signUp.php\">Sign Up</a>\n" +
            "        <a href=\"about.php\">About</a>\n" +
            "        <a href=\"contact.php\">Contact</a>\n" +
            "        <a href=\"mission.php\">Mission</a>\n" +
            "        <a href=\"houses.php\">Houses</a>\n" +
            "    </div>");
    } else {
        document.write("\n" +
            "<!-- Top Navigation Menu -->\n" +
            "<div class=\"topnav\">\n" +
            "  <a href=\"index.php\" class=\"active\">Home</a>\n" +
            "  <div id=\"myLinks\">\n" +
            "        <a href=\"about.php\">About</a>\n" +
            "        <a href=\"contact.php\">Contact</a>\n" +
            "        <a href=\"mission.php\">Mission</a>\n" +
            "        <a href=\"signUp.php\">Sign Up</a>\n" +
            "        <a href=\"houses.php\">Houses</a>\n" +
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

<div class="row">
    <div class="col s12">
        <?php
        include_once 'connector.php';

        $sql = 'SELECT * FROM houses;';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->get_result();

        foreach ($results as $result) {
            echo "
            <script>
                if (screen.width > 600) {
                    document.write('<div class=\"col s3 item\">');
                }else{
                    document.write('<div class=\"col s11 item\">');
                }
            </script>
                <div class=\"w3-content w3-display-container\">
                    <br>
                    ";

            foreach (array_values($result) as $j => $item) {
                $slideNum = 1;
                if ($j === 0){
                    $slideNum = ((int) $item);
                }else if ($j == 1){
                }
                else{
                    if ($j === 2) {
                        list($temp, $imageName) = explode(": ", $item);
                        echo "<p class='center'>$imageName</p><br>";
                        $imageName = str_replace(' ', '',$imageName);
                        echo "
                        <img class=\"house\" src=\"uploads/$imageName.jpg\" >
                        ";
                    } 
                    echo "<p>$item</p>";
                }
            }
            echo "
            </div>
                </div>";
        }
        ?>
    </div>
</div>
</body>
</html>