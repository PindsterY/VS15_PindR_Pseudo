<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>RasmusPind PseudoProject</title>
    <script src="jquery-2.1.4.min.js"></script>

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

<!-- 6. jQuery kass koeraks algus --->
<div class="kass2">
    <img src="assets/img/kass2.jpg" width="20%" height="20%">
</div>

<script>
    $("img[src='assets/img/kass2.jpg']").click(function (){
        $(this).attr("src","assets/img/koer2.jpg")
    })
</script>
<!-- 6. jQuery kass koeraks lõpp -->

<br>
<!-- 7. jQuery taustavärvi muutmine algus -->
<button type="submit" onclick="redButton()">red</button>

<script>
    function redButton() {
        document.body.style.backgroundColor = "red";
    }
</script>

<button type="submit" onclick="greenButton()">green</button>

<script>
    function greenButton() {
        document.body.style.backgroundColor = "green";
    }
</script>

<button type="submit" onclick="blueButton()">blue</button>

<script>
    function blueButton() {
        document.body.style.backgroundColor = "blue";
    }
</script>


<!-- 7. jQuery taustavärvi muutmine lõpp -->
<br>

<!-- 8. jQuery taustavärv revisited. Clicked element value. Algus -->

<button type="button" id="varviNupp">yellow</button>

<script>
    $("#varviNupp").click(function() {
    $("body").first().css("background-color",$("#varviNupp").text());
    });
</script>

<!-- 8. jQuery taustavärv revisited. Clicked element value. LÕPP!! -->
<br>
<!-- 9. Parema klõpsu keelamine -->
<script>
    $(document).ready(function(){
        $(document).on("contextmenu",function(){
            return pklick;
        });
    })
</script>
<!-- 9. Parema klõpsu keelamine LÕPP-->
<br>

<!-- 10. Parema klõpsu uuesti lubamine (button k.a) -->
<button id="rklikk">Luba parem klõps</button>

<script>
    var pklick=false;
    $("#rklikk").bind("click",function(){
        return pklick=true;
    });
    </script>

<!-- SEE EI TÖÖÖÖÖÖÖÖÖTA -->

<!-- 10. Parema klõpsu uuesti lubamine (button k.a) LÕPP-->
<br>
<!-- 11. TOGGLE. Lülita nuppu vajutades pilt välja/sisse -->
<button type="submit" id="piltKaob">Peida pilt</button>

<script>
$(document).ready(function(){
$("#piltKaob").click(function(){
$(".kass2").toggle();
});
});
</script>
<!-- 11. TOGGLE. Lülita nuppu vajutades pilt välja/sisse -->
<br>

</body>
</html>