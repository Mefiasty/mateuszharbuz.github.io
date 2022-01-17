<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- /////////////////////////////////////góra////////////////////////////// -->
<div class="gora">
    <h1 class="skryptphp">Skrypt PHP Bez Bazy Danych<h1>
</div>
<!-- ///////////////////////////////środek///////////////////////////// -->
<div class="bloczek">
    <div class="opis">
    <h2>Przelicznik Walutowy</h2>
    <form ACTION="" method="post">
Wpisz ilość w PLN:<input TYPE="text" name="zlote"> --- <INPUT TYPE="submit" VALUE="Oblicz"><br><br>
</form>
<center>
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
$wynikf = $zlote / $franki;
$wynike = $zlote / $euro;
$wynikd = $zlote / $dolary;
$wynikj = $zlote / $jen;
$wynikda = $zlote / $dolara;
$wynikcypr = $zlote / $funtcypr;
$wynikcz = $zlote / $koronacz;
$wynikdu = $zlote / $koronadu;
$wynikdk = $zlote / $dolark;
$wynikr = $zlote / $rubel;
$wynikksz = $zlote / $koronasz;
$wynik = "Obliczenia walut (przybliżone):<BR><BR>$zlote złotych = $wynikf <FONT COLOR=blue>Franków Szwajcarskich.</FONT><BR>$zlote złotych = $wynike <FONT COLOR=blue>Euro.</FONT><BR>$zlote złotych = $wynikd <FONT COLOR=blue>Dolarów Amerykańskich.</FONT><BR>$zlote złotych = $wynikj <FONT COLOR=blue>Jenów Japońskich.</FONT><BR>$zlote złotych = $wynikda <FONT COLOR=blue>Dolarów Australijskich.</FONT><BR>$zlote złotych = $wynikcypr <FONT COLOR=blue>Funtów Cypryjskich.</FONT><BR>$zlote złotych = $wynikcz <FONT COLOR=blue>Koron Czeskich.</FONT><BR>$zlote złotych = $wynikdu <FONT COLOR=blue>Koron Duńskich.</FONT><BR>$zlote złotych = $wynikdk <FONT COLOR=blue>Dolarów Kanadyjskich.</FONT><BR>$zlote złotych = $wynikr <FONT COLOR=blue>Rubli.</FONT><BR>$zlote złotych = $wynikksz <FONT COLOR=blue>Koron Szweckich.</FONT><BR><BR>UWAGA! waluty są przybliżone i mogą różnić się nieco od właściwych kursów walut. ";
echo $wynik;
 }
?>
</p>
</center>
    </div>
    <div class="skryptphp"></div>
</div>

</body>
</html>