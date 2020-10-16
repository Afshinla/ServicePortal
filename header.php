<!--<header class="clearfix" style="height: 20vh; background: url(images/aarhus_1.jpg) no-repeat center center; background-size: cover; margin-bottom: 0px;">

    <div class="container">
       
        <h1 style="font-size:3vw;">Serviceportalen</h1>
    </div>   
</header>-->
<?php
    session_start();
?>

<nav class="navbar navbar-light navbar-expand-sm sticky-top" style="background-color:rgba(44, 107, 132, 0.58)">
    <a href="index.php">
        <img src="images/aak_logo.png" style="width: 80px; height:40px; padding-top:0px;" alt="Aarhus Kommune logo"h>
    </a>    
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Hjem</a>
                            </li>      
                            <li class="nav-item">
                                <a class="nav-link" href="current.php">Vejrudsigten</a>
                            </li>
                            <li>
                                <a class="nav-link"href="regionalt.php">Regionalt 5-døgnsprognose</a>
                            </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <?php
                            
                            if (isset($_SESSION["useruid"])) {
                                echo "<li><a href='profile.php'>Profile page</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                            }
                            else{
                                echo "<li><a href='signup.php'>SIGN UP</a></li>";
                                echo "<li><a href='login.php'>LOG IN</a></li>";
                            }
                            ?>
                            
                        </ul>
                        
                    
    </div>
</nav>


