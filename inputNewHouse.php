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
<?php
session_start();
if ($_SESSION['loggedin'] !== true) {
    header("Location: login.php?login=notLoggedIn");
}

?>
<style>
    body, html {
        overflow: hidden;
    }

    body {
        background: linear-gradient(
                rgba(0, 0, 0, 0.75),
                rgba(0, 0, 0, 0.75)
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
            "        <a href=\"about.php\">About</a>\n" +
            "        <a href=\"contact.php\">Contact</a>\n" +
            "        <a href=\"mission.php\">Mission</a>\n" +
            "        <a href=\"signUp.php\">Sign Up</a>\n" +
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
<br><br>
<form action="createItem.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col s12">
            <div class="input-field col s4">
                <input value="" id="email" type="text" name="email" class="validate">
                <label class="active" for="email">Contact Email</label>
            </div>
            <div class="input-field col s4">
                <input value="" id="sqft" type="text" name="sqft" class="validate">
                <label class="active" for="sqft">Number of Square Feet</label>
            </div>
            <div class="input-field col s4">
                <input value="" id="bathrooms" type="text" name="bathrooms" class="validate">
                <label class="active" for="bathrooms">Number of Bathrooms</label>
            </div>
            <div class="input-field col s4">
                <input value="" id="bedrooms" type="text" name="bedrooms" class="validate">
                <label class="active" for="bedrooms">Number of Bedrooms</label>
            </div>
            <div class="input-field col s4">
                <input value="" id="addr" type="text" name="addr" class="validate">
                <label class="active" for="addr">Address</label>
            </div>
            <div class="input-field col s4">
                <input value="" id="price" type="text" name="price" class="validate">
                <label class="active" for="price">Price</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <br><br>
                <br><br>

                <div class="col s2"></div>
                <div class="input-field col-s8">
                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                    <label class="active" for="description">Description</label>
                </div>
            </div>
        </div>
        <div class="center">
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>

    </div>
    <div class="center">
        <button class="btn waves-effect waves-light" type="submit" value="Upload Image" name="submit">Submit
            <i class="material-icons right"></i>
        </button>
    </div>
</form>

</body>
</html>