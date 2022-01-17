<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<!-- /////////////////////////////////////góra////////////////////////////// -->
<div class="goragora">
<div class="gora">
    <h1 class="skryptphp">Skrypt PHP<h1>
</div>
</div>
<!-- ///////////////////////////////środek///////////////////////////// -->
<div class="bloczek">
    <div class="opis">
    <h2>Przelicznik Walutowy</h2>
    <form ACTION="" method="post">
Wpisz ilość w PLN: <input TYPE="number" name="zlote" style="margin-left:1em;" step="0.01"> --- <INPUT TYPE="submit" VALUE="Oblicz"><br><br>
</form>

<p>
<?php
error_reporting(E_ALL ^ E_NOTICE);
if ($zlote = ($_POST['zlote'])){
$franki = 2.47;
$euro = 3.85;
$dolary = 3.26;
$jen = 2.77;
$dolara = 2.39;
$funtcypr = 6.73;
$koronacz = 0.13;
$koronadu = 0.51;
$dolark = 2.80;
$rubel = 0.11;
$koronasz = 0.41;
$wynikf = round($zlote / $franki, 2);
$wynike = round($zlote / $euro,2);
$wynikd = round($zlote / $dolary,2);
$wynikj = round($zlote / $jen,2);
$wynikda = round($zlote / $dolara,2);
$wynikcypr = round($zlote / $funtcypr,2);
$wynikcz = round($zlote / $koronacz,2);
$wynikdu = round($zlote / $koronadu,2);
$wynikdk = round($zlote / $dolark,2);
$wynikr = round($zlote / $rubel,2);
$wynikksz = round($zlote / $koronasz,2);
$wynik = "Obliczenia walut (przybliżone):<BR><BR>$zlote złotych = $wynikf <FONT COLOR=#56ff00>Franków Szwajcarskich.</FONT><BR>$zlote złotych = $wynike <FONT COLOR=#56ff00>Euro.</FONT><BR>$zlote złotych = $wynikd <FONT COLOR=#56ff00>Dolarów Amerykańskich.</FONT><BR>$zlote złotych = $wynikj <FONT COLOR=#56ff00>Jenów Japońskich.</FONT><BR>$zlote złotych = $wynikda <FONT COLOR=#56ff00>Dolarów Australijskich.</FONT><BR>$zlote złotych = $wynikcypr <FONT COLOR=#56ff00>Funtów Cypryjskich.</FONT><BR>$zlote złotych = $wynikcz <FONT COLOR=#56ff00>Koron Czeskich.</FONT><BR>$zlote złotych = $wynikdu <FONT COLOR=#56ff00>Koron Duńskich.</FONT><BR>$zlote złotych = $wynikdk <FONT COLOR=#56ff00>Dolarów Kanadyjskich.</FONT><BR>$zlote złotych = $wynikr <FONT COLOR=#56ff00>Rubli.</FONT><BR>$zlote złotych = $wynikksz <FONT COLOR=#56ff00>Koron Szweckich.</FONT><BR><BR>UWAGA! waluty są przybliżone i mogą różnić się nieco od właściwych kursów walut. ";
echo $wynik;
 }
?>
</p>

    </div>
  
</div>

</body>
</html>