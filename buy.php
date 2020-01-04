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


<div class="topnav">
<a href="index.php"> <img src="grandpa.png" alt="Home"></a>
<a href="invest.php" class="withPadding">Invest</a>
<a href="buy.php" class="withPadding">Buy</a>
<a href="sell.php" class="withPadding">Sell</a>
<a href="info.php" class="withPadding">Info</a>
</div>

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

        if (sizeof($results) > 0){
            
            foreach ($results as $result) {
                echo "
                <script>
                if (screen.width > 600) {
                    document.write('<div class=\"col s3 item\">');
                }else{
                    document.write('<div class=\"col s12 item\">');
                }
                </script>
                <div class=\"w3-content w3-display-container\">
                <br>
                ";
                
                foreach (array_values($result) as $j => $item) {
                    $slideNum = 1;
                    if ($j === 0){
                        $slideNum = ((int) $item);
                    }else {
                        if ($j === 1) {
                            list($temp, $imageName) = explode(": ", $item);
                            echo "<p class='center'>$imageName</p><br>";
                            $imageName = str_replace(' ', '',$imageName);
                            $link = 'houses/' . $imageName . '.php';
                            echo "
                            <a href='$link'><img class=\"house\" src=\"uploads/$imageName.jpg\" ></a>
                            ";
                        } 
                        echo "<p>$item</p>";
                    }
                }
                echo "
                </div>
                </div>";
            }
        }else{
            echo '<h3 class="center">Coming soon, when we have another house to sell.</h3>';
        }
            ?>
    </div>
</div>
</body>
</html>