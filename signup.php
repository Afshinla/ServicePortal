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
<title>Title</title>
</head>
<body>

<?php 
include 'nav.php';
?>
<article class="container bg-light fill" id="current">
        
    <div class="contain row">
    <div class="com-md-6">
        <h2 class="text-center">Indtast dine oplysinger!</h2><hr>
        <form action="includes/signup.inc.php" method="POST">
            <div class= "form-group">
                <label>Name: </label>
                <input type="text" name="name"  class="form-control" placeholder="Enter full name...">
            </div>
            <div class= "form-group">
                <label>Email: </label>
                <input type="text" name="email"  class="form-control" placeholder="Enter email...">
            </div>
            <div class= "form-group">
                <label>User name: </label>
                <input type="text" name="uid"  class="form-control" placeholder="Enter username...">
            </div>
            <div class= "form-group">
                <label>Password: </label>
                <input type="password" name="pwd"  class="form-control" placeholder="Enter password...">
            </div>
            <div class= "form-group">
                <label>Repeat password</label>
                <input type="password" name="pwdrepeat"  class="form-control" placeholder="Repeat your password...">
            </div>
            <div class= "form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block shadow">Sign Up</button>
            </div>         
        </form>
    <?php

    if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Password doesn't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have sigend up!</p>";
    }
}

?>
</div>
</article>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
