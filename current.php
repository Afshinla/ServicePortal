<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shotcut icon" type="images/png" href="images/favicon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="css/styles.css">
<title>Current</title>
<style>
footer {
    position: fixed;
    bottom: 0;
    background: rgba(44, 156, 221, 0.877);
    width: 100%;
}
footer .container {
    display: flex;
    justify-content: space-between;
}
/* img{
    width: 100%;
    height:200px;
    max-height: 200px; */
    

</style>
</head>
<body>
<?php 
include 'nav.php';
?>

<article class="container bg-light fill" id="current">
        <h2 style="margin-top: 20px">Her kan du søge efter vejret i en by</h2>

    <div class="row" style="margin-top: 30px">
        
    <!-- <div class="container"> -->
        <section class="container">
            <span id="error"></span>
        </section>
    <!-- <section class="container" style="margin-bottom:20px;">
        <h3 class="text-primary" id="enterCityName">Enter city name</h3>
    </section> -->
    <section class="container form-group form-inline">
        <label for="city" class="pr-3">Søg efter by</label>
        <input type="text" name="city" id="city" class="form-control" placeholder="Indtast by navn" required>
        <button id="submitWeather" class="btn btn-primary">Søg</button>
    </section>
    <div class="container" id="show"></div>

        <div>
            <span id="error"></span>
        </div>
    </div>
    
<!-- </div> -->
</article>
<!-- <div class="container">
    <div class="row" style="margin-bottom:20px;">
        <h3 class="text-primary" id="enterCityName">Enter city name</h3>
        <span id="error"></span>
    </div>
    <div class="row form-group form-inline">
        <input type="text" name="city" id="city" class="form-control" placeholder="City name">
        <button id="submitWeather" class="btn btn-primary">Search city</button>
    </div>
    <div class="" id="show"></div>
</div> -->

<footer id="footer">
  <section class="container text-muted">
    <span>&copy;2018</span> | 
    <a href="http://www.aarhus.dk" class="text-muted" title="aarhus.dk" target="_blank">aarhus.dk</a> | 
    <a href="https://www.facebook.com/lakzadeh" class="text-muted" title="Follow me on Facebook">@lakzadeh</a> | 
    <a href="mailto:afshinla@gmail.com" class="text-muted" title="Send mail to me">afshinla@gmail.com</a>
  </section>
</footer>
<script src="script/clock.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script/weather.js"></script>
</body>
</html>