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
            "        <a href=\"signUp.php\" class=\"withPadding\">Sign Up</a>\n" +
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
            "        <a href=\"signUp.php\">Sign Up</a>\n" +
            "        <a href=\"houses.php\">Houses</a>\n" +
            "  </div>\n" +
            "  <a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">\n" +
            "    <i class=\"fa fa-bars\"></i>\n" +
            "  </a>\n" +
            "</div>")
    }
</script><script>
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

        if(strpos($fullUrl, "login=success")){
            echo "<h5 class='center success'>You successfully signed up</h5>";
        }else if(strpos($fullUrl, "login=name=notFilledOut")){
            echo "<h5 class='center error'>You did not fill out the name bar</h5>";
        }else if(strpos($fullUrl, "login=addr=notFilledOut")){
            echo "<h5 class='center error'>You did not fill out the address bar</h5>";
        }else if(strpos($fullUrl, "login=email=notFilledOut")){
            echo "<h5 class='center error'>You did not fill out the email bar</h5>";
        }
    ?>




    <div class="signUpVert signUp">
                    <h5 class="container center">What is your home worth?<br><br>
Find the market value of your home for FREE</h5><br><br>
        <form action="signUpHouseBackend.php" method="post">
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s6">
                        <input value="" id="name" type="text" name="name" class="validate">
                        <label class="active" for="name">Your Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input value="" id="email" type="text"  name="email" class="validate">
                        <label class="active" for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s1"></div>
                    <div class="input-field col s10">
                        <input value="" id="addr" type="text" name="addr" class="validate">
                        <label class="active" for="addr">Address</label>
                    </div>
                </div>
            </div>
            <div class="center">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Find Value
                        <i class="material-icons right"></i>
                    </button>
            </div>
        </form>
    </div>    
</body>
</html>
