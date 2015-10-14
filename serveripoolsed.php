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

// 20. PHP floats
$a = 1.23;
$b = 2.34;
$sum = $a + $b;
echo "$sum</br>";

//20. php floats lõpp!

//21. $get
if(isset($_GET['koer'])) {
    echo $_GET ['koer']."</br>";
};
// 21. LõPP

//22. $POST
?>
<form action="?" method="post">
    <input name="kass" placeholder="Kassitõug">
    <input type="submit">
</form>

<?php
if(isset($_POST['kass'])) {
    echo 'Kass on: ' . $_POST['kass'] . '<br>';
}
//22. lõpp


?>
</body>
</html>