<?php include 'nav.php';?>

<?php include 'header.php';?>

<section class= "signup-form-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="POST">
        <input type="text" name="name"  placeholder="Username/Email...">
        <input type="password" name="pwd"  placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>
</section>