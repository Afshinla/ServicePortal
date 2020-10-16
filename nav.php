<?php
    session_start();
?>

<nav class="navbar navbar-light navbar-expand-sm sticky-top" style="background-color:rgba(44, 107, 132, 0.58)">
<a href="index.php">
<img src="images/aak_logo.png" style="width: 80px; height:40px; padding-top:0px;" alt="Aarhus Kommune logo"h>
</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HJEM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="incident.php">OPRET INCIDENT</a>
                            </li>        
                            <li class="nav-item">
                                <a class="nav-link" href="incident.html">OPRET REQUEST</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="incident.php">KNOWLEDGE</a>
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
                                echo "<li><a href='login.php'>LOGIN</a></li>";
                            }
                            ?>
                            
                    </ul>
                        
                        
    </div>           
    </div>
</nav>


