<?php
    include_once 'dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/footer.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/stronaProduktu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/podobne-ryby.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8"/>
<meta name="robotscontent=noindex,nofollow"/>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>


    <div class="contener">
    <div><?php include_once("html/menu.php"); ?></div>


        <div class="prodcon">
            <div class="produkt">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="photos/glonojad.jpg" id="produkt-img">
                </div>

                <div class="mySlides fade">
                    <img src="photos/glonojad2.jpg" id="produkt-img">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                
                <br>

                <div class="kropki">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                </div>
            </div>
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=6");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <div class="info">
                    <div id="tytul">
                        <h2><?php echo $prod['nazwa']; ?></h2>
                    </div>
                        <div id="cena">
                            <p><?php echo $prod['cena']; ?>zł</p>
                        </div>
                            <div id="rodzaj">
                                <p>Rodzaj</p>
                            </div>
                                    <div class="kolor-rodzaj">
                                        <button class="brown" onclick="currentSlide(1)"></button>
                                            <button class="yellow" onclick="currentSlide(2)"></button>
                                    </div>
                                <br>
                        <div id="ilosc">
                            <p>Ilosc</p>
                                <button class="down" onclick="down()">-</button>
                                    <a id="licznik">1</a>
                                <button class="up" onclick="up()">+</button>
                              
                        </div>
                        <br>
                            <div id="dostepnosc">
                                <p>Dostępność <?php echo $prod['ilosc']; ?>szt</p><?php } ?>
                                <br>
                                <p style="font-size:15px;"><i class="bi bi-truck"></i>Dostawa: 14zł</p>
                            </div>
                    <div id="zakup">
                        <button class="btkup" onclick="kupno()"><i class="bi bi-bag-fill"></i> Dodaj 0,00zł</button>
                    </div>
                </div>
                <!-- Opis szczegółowy produktu -->
                <div class="opis">
                    <ul class="opis-btn">
                        <button id="opis1-btn">Opis</button>
                        <button id="opis2-btn">Szczegóły</button>
                    </ul>
                    <div class="opis1">
                        <p>
                        Przeciętnie dorastają do 13 cm długości. Ubarwienie ciała różnorodne, zależne od genów, od jasnobrunatnej do niemal czarnej barwy z licznymi, drobnymi, jaśniejszymi plamkami. Charakterystyczne dla większości zbrojników brzusznie spłaszczone ciało, z szeroką głową, wypukłym grzbietem i dwiema płetwami grzbietowymi. Szerokie, masywne płetwy piersiowe ułatwiają rybie poruszanie się po dnie. Otwór gębowy w dolnym położeniu, zakończony przyssawką, którą przyczepiają się do dekoracji i zeskrobują glony. Nie posiadają łusek, ich skóra pokryta jest nakładającymi się na siebie płytkami kostnymi, które tworzą pewnego rodzaju pancerz.
                        </p>
                    </div>
                    <div class="opis2">
                        <table class="tabelka">
                            <tr>
                                <td style="font-weight: bold; width: 35%;">Dorasta do</td>
                                <td>10cm</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Wielkość akwarium</td>
                                <td>80 litrów</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">pH wody</td>
                                <td>6-7</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Temperatura wody</td>
                                <td>20-27°C</td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
        
        <div><?php include_once("html/podobne-ryby.html");?></div>
        
        <div><?php include_once("html/footer.html");?></div>
    
</div>
</body>
</html>

<script>
        let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
	$(document).ready(function(){
        

        $('#opis1-btn').click(function(){
                $('.opis1').css('display','block');
                $('.opis2').css('display','none');
                $('#opis1-btn').css('border-top', '3px solid red')
                $('#opis2-btn').css('border-top', 'none')
            });
        $('#opis2-btn').click(function(){
            $('.opis2').css('display','block');
            $('.opis1').css('display','none');
            $('#opis1-btn').css('border-top', 'none')
            $('#opis2-btn').css('border-top', '3px solid red')
        });
	});
    // Licznik produktów
    var licznik = 1;
        function down() {
            if(this.licznik > 1){
                this.licznik -= 1 }
            document.getElementById("licznik").innerHTML = licznik;
        };
        function up() {
            <?php
            $stmt = $conn->prepare(
            "SELECT * FROM produkty WHERE id=6");
            $stmt->execute();
            $prod = $stmt->fetchAll();
            foreach($prod as $prod) {
            ?>
                if(this.licznik < <?php echo $prod['ilosc']; ?> ){
                    licznik += 1;}
            <?php } ?>        
            document.getElementById("licznik").innerHTML = licznik;
        };


// Kupno
function kupno(){
<?php
    $stmt = $conn->prepare(
            "SELECT * FROM produkty WHERE id=6");
    $stmt->execute();
    $prod = $stmt->fetchAll();
    foreach($prod as $prod) {
?>
    var x = <?php echo $prod['cena']; ?>; 
<?php } ?>

    var y = licznik;
    let price = x;
    let amount = y;
    let sum = "";
//Obliczenie
    sum= price*amount;
    const a=document.getElementsByClassName("btkup");
    a[0].innerHTML='<i class="bi bi-bag-fill"></i> Wynosi '+sum+'zł';
};

</script>
