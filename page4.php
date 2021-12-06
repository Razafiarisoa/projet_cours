<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heures|Pays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="showDate('OCEANIE')">
    <div class="logot">
     <h1>Heures dans le Monde</h1>
     <a href="index.php"><img class="taillelogo" id="pos" src="images/BP.jpg" alt="logo"></a>
    </div>

    <!---DEBUT MENUS--->

    <nav>
      <a href="page1.php">Asie<span class="survolImg"><img src="https://flagcdn.com/40x30/aw.png"></span></a>
      <a href="page2.php">Europe<span class="survolImg"><img src="https://flagcdn.com/40x30/gb.png"></span></a>
      <a href="page3.php">Amérique<span class="survolImg"><img src="https://flagcdn.com/40x30/us.png"></span></a>
      <a href="page4.php">Océanie<span class="survolImg"><img src="https://flagcdn.com/40x30/au.png"></span></a>
      <a href="page5.php">Afrique<span class="survolImg"><img src="https://flagcdn.com/40x30/za.png"></span></a>
    </nav>
    <div class="dateHeure">
        <span id='calendrier' style="background-color:#1C1C1C;color:silver;font-size:40px;"></span>
         <span id='horloge' style="background-color:#1C1C1C;color:silver;font-size:40px;"></span> 
    </div>
    <hr>
    <!---FIN MENUS--->

    <div class="esp">
        <img class="tailleimg" class="img1" src="https://flagcdn.com/h40/za.png" alt="South Africa">
        <img class="tailleimg" class="img2" src="https://flagcdn.com/h40/za.png" alt="South Africa">
        <img class="tailleimg" class="img3" src="https://flagcdn.com/h40/za.png" alt="South Africa">
        <img class="tailleimg" class="img4" src="https://flagcdn.com/h40/za.png" alt="South Africa">
        <img class="tailleimg" class="img5" src="https://flagcdn.com/h40/za.png" alt="South Africa">
    </div>
    <hr>

    <footer>

    </footer>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>