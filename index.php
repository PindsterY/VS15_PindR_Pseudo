<?php
//24. Require refactor
$page=(isset($_GET['page'])? $_GET['page'] : 'serveripoolsed');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php
//23. Require
if(isset($_GET['page'])){
           require $_GET['page'].".php";
    }
//23. Require lõpp ja 24. Refactor
require $page.".php";
?>


</body>
</html>