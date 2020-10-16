
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Login</title>
</head>
<body>
<?php 
include 'nav.php';
?>
<article class="container bg-light fill" id="login">
        <!--<h2 style="margin-top: 10px">Her kan du søge efter vejret i en by</h2>-->

    <div class="contain row">
    <div class="com-md-6">
    <h2 class="text-center">Indtast dine login info!</h2><hr>
    <form action="includes/login.inc.php" method="POST">
        <div class= "form-group">
            <label>Login name</label>
            <input type="text" name="uid"  class="form-control" placeholder="Username/Email..."style="margin-top: 10px">
        </div>
        <div class= "form-group">
            <label>Password</label>
            <input type="password" name="pwd"  class="form-control" placeholder="Enter your password..."style="margin-top: 10px">
        </div>  
        <button type="submit" name="submit" class="btn btn-primary btn-block shadow">Log In</button>
    </form>

    <?php

    if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }
    }

?>   
</article>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
