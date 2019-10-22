<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>ABC Capital Investing</title>
</head>
<body>

<style>
    body, html {
        overflow: hidden;
    }

    body {
        background: linear-gradient(
                rgba(0, 0, 0, 0.55),
                rgba(0, 0, 0, 0.55)
        ),
        url(download.jpg);

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

    }
</style>

<script>
    const sleep = (milliseconds) => {
        return new Promise(resolve => setTimeout(resolve, milliseconds))
    };

            $(document).ready(function () {
                    window.setInterval(function () {
                        $("#firstPage").fadeOut();
                        sleep(500).then(() => {
                            $("#secondPage").fadeIn().css("visibility", "visible");
                        });
                    }, 7000);
                });
                sleep(3500).then(() => {
                    $(document).ready(function () {
                        window.setInterval(function () {
                            $("#secondPage").fadeOut();
                            sleep(500).then(() => {
                                $("#firstPage").fadeIn();
                            });
                        }, 7000);
                    });
                });
</script>


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
        let x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
            $("#firstPage").show();
            $("#secondPage").show();
        } else {
            x.style.display = "block";
            $("#firstPage").hide();
            $("#secondPage").hide();
        }
    }
</script>

<div class="center">
    <h1>ABC Capital Investing</h1>
    <h4>Real Estate Investing: Simple as ABC</h4>
</div>

<div class="centerVert back">
    <div class="center greyBackground" id="firstPage">
        <h2>Looking for a passive income?</h2>
        <a href="signUpInvest.php" class="waves-effect waves-light btn">Contact Us</a>
    </div>
</div>

<div class="centerVert back">
    <div class="center greyBackground hidden" id="secondPage">
        <h2>We buy houses fast!</h2>
        <a href="signUpHouse.php" class="waves-effect waves-light btn">Learn More</a>
    </div>
</div>

</body>
</html>