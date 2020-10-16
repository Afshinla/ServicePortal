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
    <h2 class="text-center">Udfyld nedenstående!</h2><hr>
<form>
  <div class= "form-group">
  <label>Short description: </label>
  <input type="text" class="form-control" id="title" placeholder="Short description...">
</div>
<div class= "form-group">
  <label>Group: </label>
  <input type="text" class="form-control" id="group" placeholder="Assignement group...">
</div>

    <input type="button" value="Send" class="btn btn-primary btn-block shadow" onclick="create()">
  </form>
  </div>
</article>

<script src="script/incident.js" crossorigin="use-credentials"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

 
