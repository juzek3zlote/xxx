<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body
{backgroud-color: red;
</style>
<body>
   
<?php
   $od  = "From: szpieg@gmail.com \r\n";
$od .= 'MIME-Version: 1.0'."\r\n";
$od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
$adres = "ksoroka@ekonomikzamosc.pl";
$tytul = "Twoj brat kręci z twoją dziewczyną";
$wiadomosc = "<html>
<head>
</head>
<body>
   Twoj brat kręci z twoją dziewczyną gdy jesteś w domu zobacz
   tu: <a href="https://tiny.pl/1z7t">Zobacz</a> 
</body>
</html>";

// użycie funkcji mail
mail($adres, $tytul, $wiadomosc, $od);

?>


</body>
</html>
