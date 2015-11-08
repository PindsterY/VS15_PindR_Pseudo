<?php
//24. Require refactor
$page = (!empty($_GET['page']) ? $_GET['page'] : 'serveripoolsed');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="index.php?" method="get">
    <input name="page">
    <input type="submit">
</form>

<?php

//23. Require lõpp ja 24. Refactor
require($page . '.php');
?>


</body>
</html>
