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

<div class="signUpVert">
    <p class="container center" style="font-size: 22px;">What is your home worth?<br><br>
        Find the market value of your home for <strong>free</strong>.</p><br><br>

<form action="sellBackend.php" method="post">
    <div class="row">
        <div class="input-field col s12 l5 offset-l1">
            <input value="" id="name" type="text" name="name" class="validate">
            <label class="active" for="name" style="font-size: 20px;">Your Name</label>
        </div>
        <div class="input-field col s12 l5">
            <input value="" id="email" type="text" name="email" class="validate">
            <label class="active" for="email" style="font-size: 20px;">Email</label>
        </div>
        <div class="input-field col s12 l8 offset-l2">
            <input value="" id="addr" type="text" name="addr" class="validate">
            <label class="active" for="addr" style="font-size: 20px;">Address</label>
        </div>
    </div>
    <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
            <i class="material-icons right"></i>
        </button>
    </div>
</form>
</div>


</body>
</html>