<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="shotcut icon" type="images/png" href="images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Title</title>
</head>
<body>

<?php 
include 'nav.php';
?>

<article class="container bg-light fill" id="index">
        <!--<h2 style="margin-top: 10px">Her kan du søge efter vejret i en by</h2>-->

    <div class="contain row">
        
            
    
   <section class="index-intro">

<?php 
if (isset($_SESSION["username"])) {
    echo "<h2>Velkommen " . $_SESSION["useruid"] . "</h2>";    
}
?>

</section>
    
    
</article>
<article class="container bg-light fill" id="vejret">
            <div id="nyhedsbrev" class="mb-3">
                
            <a id="nyhedsbrev" class="btn btn-primary btn-block shadow" href="abonnement.php">Tilmeld Nyhedsbrev</a>
          </div>
    <div class="row">
        <section class="col-sm-6 col-md-4" style="margin-top: 30px">
            <h3>Sommer 2018</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/sommer.jpg">            
            <p>Rekordvarm sommer siden 1874 (sammen med sommeren 1997).</p>
        </section>
        <section class="col-sm-6 col-md-4"style="margin-top: 30px">
            <h3>Sensommer</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/november.jpg">            
            <p>Først og fremmest, så findes der ikke en accepteret, officiel meteorologisk definition - og dermed ingen vandtætte kriterier for Indian Summer.</p>
        </section>
        <section class="col-sm-6 col-md-4"style="margin-top: 30px">
            <h3>Kold vinter?</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/isglat.png">
            <p>Efter en lille forsmag på vinteren med nattefrost og lokale snebyger i den sidste weekend, skal vi nu regne med mildt og relativt roligt vejr i de kommende uger.</p>
        </section>
        <section class="col-sm-6 col-md-4"style="margin-top: 30px">
            <h3>Kraftig snevejr</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/snevejr.jpg">
            <p>Her sidst i oktober kan der falde sne i De Franske Alper i Pyrenæerne, men det er sjældent, man i Sydfrankrig og Nordspanien har så voldsomt vintervejr, som man oplever det lige nu med snevejr til under 500 meters højde.</p>
        </section>
        <section class="col-sm-6 col-md-4"style="margin-top: 30px">
            <h3>Hvid jul i år?</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/jul18.jpg">        
            <p>Ved en landsdækkende hvid jul forstås normalt at mere end 90% af Danmark er dækket af sne den 24. december om eftermiddagen. Men ikke kun med et drys af sne eller blot med rim på jorden.</p>
        </section>
        <section class="col-sm-6 col-md-4"style="margin-top: 30px">
            <h3>Klima alarm</h3>
            <img class="mx-auto" style="margin-top: 20px" src="images/antarktis.jpg">          
            <p>Alle verdens kystbyer forsvinder hvis isen i Antarktis smelter. Klimaendringene vil forandre verdenskartet drastisk dersom CO2-utslippene og issmeltingen fortsetter som i dag.</p>
            <br>
        </section>
        
    </div> <!--Row-->
</article>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

