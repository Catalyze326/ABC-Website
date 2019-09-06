<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="dashboard.css">

    <title>Dashboard</title>
</head>
<body>

    <?php
        session_start();
        if($_SESSION['loggedin'] !== true){
            header("Location: login.php?login=notLoggedIn");
        } 
        
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullUrl, "login=Success")){
            echo '<h5 class="center success">You sucessfully logged in!</h5>';
        }
    ?>
    <div class="center">
        <h1>Dashboard</h1>
    </div>

<br><br><br>

<div class="center">
    <a href="people.php">People Dashboard</a>
    <br><br>
    <a href="editHouses.php">Houses Dashboard</a>
    <br><br>
    <a href="inputNewHouse.php">Create New House</a>
</div>

</body>
</html>