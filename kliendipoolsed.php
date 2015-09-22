<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>RasmusPind PseudoProject</title>
    <script type=text/javascript src="code.jquery.com/jquery-1.10.2.min.js"></script>
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
    function AlertIt1() {
        var answer = confirm ("tere maailm");
        if (answer)
            window.location="http://www.khk.ee";
    }
</script>

<a href="javascript:AlertIt1();">tere maailm</a>
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
<!-- 5.  Kass koeraks algus -->
<img id="kassKoeraks" onclick="changeImage()" src="assets/img/kass.jpg" width="20%" height="20%">

<script>
    function changeImage() {
        var image = document.getElementById('kassKoeraks');
        if (image.src.match("koer")) {
            image.src = "assets/img/kass.jpg";
        } else {
            image.src = "assets/img/koer.jpg";
        }
    }
</script>
<!-- 5.  Kass koeraks lõpp -->
<br>
<!-- 6. jQuery kass koeraks algus -->
<!-- JÄÄB HETKEL POOLELI, TULEB LÕPETADA HILJEM!!! -->
<!-- 6. jQuery kass koeraks lõpp -->
<br>


</body>
</html>