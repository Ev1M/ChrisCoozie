<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <title>Chris Rocker</title>
</head>
<body id="body">

<script src="http://db.cookie/js/webapi.js"></script>

<div class="container">
  <div class="Tittel"><h1> Chris Rock Clicker! </h1></div>


  <div id="main" class="Main">
      <div class="center">
    <button class="start" id="start" onclick="startTimer()"> Start! </button>
    <h1 id="displayTimer" ></h1>
    <button id="cookie" onclick="startCookie()" > Hit </button>
    <h1 id="displayClicks" ></h1>
    
    <form action="" method="post" id="form">
       <input name="pog" id="hidden">
       <input name="id" id="hidden">
       <div id="input">
       <input name="navn" placeholder="Navn...">
       <input name="tlf" placeholder="Tlf..."> 
       <button onclick="SendRes()" > Send inn </button>
        </div>
    </form>     

</div>

</div>

</div>
</body>
<script src="script.js"></script>
</html>

