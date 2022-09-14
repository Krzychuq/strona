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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/vader/jquery-ui.css" rel = "stylesheet">
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
                    <img src="photos/pokrywa aquel classic1.jpg" id="produkt-img">
                </div>

                <div class="mySlides fade">
                    <img src="photos/pokrywa aquel classic2.jpg" id="produkt-img">
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
    "SELECT * FROM produkty WHERE id=13");  // wpisz id
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
                          <!--  <div id="rodzaj"> 
                                <p>Rodzaj</p>
                            </div>
                                    <div class="kolor-rodzaj">
                                        <button class="" onclick="currentSlide(1)"></button>
                                            <button class="" onclick="currentSlide(2)"></button>
                                    </div>
                                <br> -->
                        <div id="ilosc">
                            <p>Ilosc</p>
                                <button class="down" onclick="down()">-</button>
                                    <a id="licznik">1</a>
                                <button class="up" onclick="up()">+</button>
                              
                        </div>
                        <br>
                            <div id="dostepnosc">
                                <p>Dostępność <?php echo $prod['ilosc']; ?>szt</p>
                                <br>
                                <p style="font-size:15px;"><i class="bi bi-truck"></i>Odbiór w sklepie / Dostawa:11zł</p>
                            </div>
                    <div id="zakup">
                        <button class="btkup"><i class="bi bi-bag-fill"></i> Dodaj 0,00zł</button>
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
                            Pokrywa akwariowa to opcjonalne wyposażenie akwarium. Nie jest ono niezbędne do prawidłowego rozwoju ryb i roślin, jednakże ma wiele zalet. Skutecznie ogranicza bowiem możliwość wyskoczenia ryb ze zbiornika, zmniejsza parowanie wody, a także stanowi praktyczną platformą, na której można zawiesić dodatkowe oświetlenie czy inne akcesoria. Pokrywy owalne mogą okazać się niezbędne w przypadku posiadania kota czy małych dzieci. Wszystkie modele są wyposażone w praktyczne pojemniki na pokarm i stanowią duże udogodnienie. Aby wybrać odpowiednią pokrywę do akwarium, należy zwrócić uwagę przede wszystkim na jej rozmiar oraz materiał, z jakiego jest wykonana.
                        </p>
                    </div>
                    <div class="opis2">
                        <table class="tabelka">
                            <tr>
                                <td style="font-weight: bold; width: 35%;">Szerokość akwarium</td>
                                <td>100 cm</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Moc</td>
                                <td>28 W</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Oświetlenie</td>
                                <td>LED dzień-noc</td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
        
        <div><?php include_once("html/podobne-sprzet.html");?></div>
        
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
            if(this.licznik < <?php echo $prod['ilosc']; ?> ){
                licznik += 1;}
            document.getElementById("licznik").innerHTML = licznik;
        };
</script>
<?php } ?>