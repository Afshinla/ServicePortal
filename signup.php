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
        <input type="password" name="pwd"  placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>