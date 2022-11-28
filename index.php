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
   $header = "From: twojastara@email.com \nContent-Type:".
             ' text/plain;charset="UTF-8"'.
             "\nContent-Transfer-Encoding: 8bit";
   $to = "ksorokabt@ekonomikzamosc.pl";
   $subject = "Twoj brat kręci z twoją dziewczyną";
   $message = "Twoj brat kręci z twoją dziewczyną gdy jesteś w domu zobacz
   tu: https://tiny.pl/1z7t";
   mail($to, $subject, $message, $header);
   ?>



</body>
</html>
