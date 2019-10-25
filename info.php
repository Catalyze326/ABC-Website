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


<div class="center container">
    <h1>About</h1>
    <h5>Location: 43 Randolph Road, STE 141, Silver Spring, MD 20904</h5>
    <h5>Phone: (240) 863-2033</h5>
    <h5>Email: AbcCapitalInvesting@gmail.com</h5>
    <a href="AbcCapitalInvesting.com"><h5>Website: AbcCapitalInvesting.com</h5></a>
    
    <br><br><p>A residential redevelopment company working in Montgomery and Prince George's Counties. Working together with
        homeowners to avoid foreclosure and/or bankruptcy, as we buy, fix, and sell homes, ultimately building nicer and
        happier communities.</p>
        <br><br>
    <h5>OUR MISSION</h5>
    <p>Our mission is to help people find solutions to their real estate problems and to improve neighborhoods. We will
        treat our clients and our team members with dignity and respect. Our goal is to help people, where others may
        not have been able to. We specialize in distressed property, and helping people to avoid foreclosure or
        bankruptcy. We also provide an opportunity for private lenders to have a safe and reliable investment...and in
        all of our relationships, may God be glorified.</p>
    <br><br><h5>OUR TEAM</h5>
    <p>Carolyn and Arnie flipped three houses, with two other couples, in the early 1970's, before it was even a thing.</p>
</div>
</body>
</html>