<?php include 'nav.php';?>

<?php include 'header.php';?>

<section class="index-intro">
<?php
if (isset($_SESSION["useruid"])) {
    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";    
}
?>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
