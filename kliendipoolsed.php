<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>RasmusPind PseudoProject</title>
</head>
<body>
<!-- 2. Tere maailm button algus -->
<button onclick="myFunction()">Tere maailm</button>

<script>
    function myFunction() {
        alert("tere maailm");
    }
</script>
<!-- 2. Tere maailm button lõpp -->
<br>
<!-- 3.  Link tekstiga tere maailm, millele klikkides kuvab brauser teadet tere maailm ja siis navigeerib aadressile www.khk.ee -->
<script type="text/javascript">
    function AlertIt() {
        var answer = confirm ("tere maailm");
        if (answer)
            window.location="http://www.khk.ee";
    }
</script>

<a href="javascript:AlertIt();">tere maailm</a>
<!-- 3.  Link tekstiga tere maailm, lõpp -->
<br>

<!-- 4.  Navigeerimatu link algus -->
<script type="text/javascript">
    function AlertIt() {
        var answer = confirm ("jääme siia");
        if (answer)
            window.location="#";
    }
</script>

<a href="javascript:AlertIt();">Jääme siia</a>
<!-- 4.  Navigeerimatu link lõpp -->
<br>

</body>
</html>