<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PindRasmus</title>
</head>
<body>
<p>Tere maailm</p>

<?php
$firstName = "Rasmus";
$lastName = "Pind";
$vanus = "23";
$eesnimi_algab_vokaaliga = false;

$isik = array ("$firstName", "$lastName", "($vanus)");

echo "Minu eesnimi on $firstName ja perekonnanimi $lastName ($vanus)</br>";

// MASSIIVID
echo "$isik[0] $isik[1] $isik[2]</br>".PHP_EOL;

//if condition
if ($eesnimi_algab_vokaaliga==true) {
    echo "Nimi algab vokaaliga";
    }


//Objektid
//POOOLIK

?>

</body>
</html>