<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="style.css">
    <title>Invest</title>
</head>
<body>

<style>
    body, html {
        overflow: hidden;
    }

    body {
        background:
                linear-gradient(
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
            "        <a href=\"index.php\"><img src=\"grandpa.png\" alt=\"Home\"></a>\n" +
            "        <a href=\"signUp.php\" class=\"withPadding\">Invest</a>\n" +
            "        <a href=\"about.php\" class=\"withPadding\">About</a>\n" +
            "        <a href=\"contact.php\" class=\"withPadding\">Contact</a>\n" +
            "        <a href=\"mission.php\" class=\"withPadding\">Mission</a>\n" +
            "        <a href=\"houses.php\" class=\"withPadding\">Houses</a>\n" +
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
            "        <a href=\"signUp.php\">Invest</a>\n" +
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

    <div class="center"><h1>Sell</h1></div>

    <div class="center">
        <div class="container">
            <h5>Everyone knows someone who feels STRESSED about selling a house. We offer a purchase plan, as easy as ABC, where we do all the work and make a fair and timely offer...and you can move on with your life.</h5>
            <br>
            <h5>Are you thinking about selling your home?</h5>
            <br>
            <h5>Get Free Property Report</h5>
            <a href="">LINK TO PROPERTY REPORT</a>
        </div>
    </div>
    

</body>
</html>