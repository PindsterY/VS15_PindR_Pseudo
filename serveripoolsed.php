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


$isik = array(
    'eesnimi' => 'Rasmus',
    'perenimi' => 'Pind',
    'vanus' => 23
);
$eesnimi_algab_vokaaliga = false;
$vocals = array('a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');

echo "Minu eesnimi on $firstName ja perekonnanimi $lastName ($vanus)</br>";


//if condition

echo $isik['eesnimi'] . " " . $isik['perenimi'] . "(" . $isik['vanus'] . ")<br>";

for ($i = 0; $i <= count(@explode(',', $vocals)); $i++) {
    if (substr(strtoUpper($isik['eesnimi']), 0, 1) == $vocals[$i]) {
        echo 'Nimi algab vokaaliga.';
    } else {
        echo 'Nimi ei alga vokaaliga.';
    };
};



//18. Objektid
$isik_objekt = (object) array_merge($isik, array('sugu'=>'mees'));
foreach ($isik_objekt as $key=>$value) {
echo "<p>$key : $value</p>";
}


//18. objektid lõpp

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
if (isset($_POST['kass'])) {
    echo 'Kass on: ' . $_POST['kass'] . '<br>';
}
//22. lõpp


?>
</body>
</html>