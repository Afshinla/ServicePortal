<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Sign up</title>
</head>
<body>





<?php include 'nav.php';?>

<?php include 'header.php';?>

<section class= "signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="name"  placeholder="Full name...">
        <input type="text" name="email"  placeholder="Email...">
        <input type="text" name="uid"  placeholder="Username...">
        <input type="password" name="pwd"  placeholder="Password...">
        <input type="password" name="pwdrepeat"  placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
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
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>