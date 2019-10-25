<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>

<style>

    body {
        background: linear-gradient(
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
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
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "login=success")) {
    echo "<h5 class='center success'>You successfully signed up</h5>";
} else if (strpos($fullUrl, "login=name=notFilledOut")) {
    echo "<h5 class='center error'>You did not fill out the name bar</h5>";
} else if (strpos($fullUrl, "login=addr=notFilledOut")) {
    echo "<h5 class='center error'>You did not fill out the address bar</h5>";
} else if (strpos($fullUrl, "login=email=notFilledOut")) {
    echo "<h5 class='center error'>You did not fill out the email bar</h5>";
}
?>

<div class="row">
<div class="col s12">
<div class="center notTop"><p>The Team at ABC is committed to helping you make the most of your $MONEY$. Do you want a
        reliable and safe place to invest your money? You have come to the right people!
        <br><br>
        We want to make YOU a part of our team here at ABC. Through private money lending, you can receive a safe 5%
        return on your money, year in and year out.
        <br><br>
        We are offering this opportunity to those people who have at least $5,000 to invest. Interest will be paid
        quarterly or reinvested to compound your return.
        <br><br>
        Our commitment is to be able to return your principal and interest, with 60 days written notice, if your
        financial situation changes.
        <br><br>
        Click here to download our sample Promissory Note for you and your lawyer to review.
        <br><br>
        <a href="ABC_Promissory_Note.pdf" class="waves-effect waves-light btn">Download Promissory Note</a>
        <br><br>

    </p></div>
</div>
</div>

<div class="center signUp">
    <h5 class="container center">Drop us a line!</h5><br><br>
    <form action="signUpInvestBackend.php" method="post">
        <div class="row">
            <div class="col s12">
                <div class="input-field col s6">
                    <input value="" id="name" type="text" name="name" class="validate">
                    <label class="active" for="name">Your Name</label>
                </div>
                <div class="input-field col s6">
                    <input value="" id="email" type="text" name="email" class="validate">
                    <label class="active" for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="input-field col s10">
                    <textarea id="textarea1" class="materialize-textarea" id="message" name="message"></textarea>
                    <label class="active" for="textarea1">What is your message?</label>
                </div>
            </div>
        </div>
        <div class="center">
            <button class="btn waves-effect waves-light" type="submit" name="submit">Find Value
                <i class="material-icons right"></i>
            </button>
        </div>
    </form>
    <br><br>
</div>
</body>
</html>
