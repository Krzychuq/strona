<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/stronaProduktu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8"/>
<meta name="robotscontent=noindex,nofollow"/>
<link rel="stylesheet" href="ui/jquery-ui.css">
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>


    <div class="contener">
    <div><?php include_once("html/menu.html"); ?></div>
        <div class="prodcon">
            <div class="produkt">
            <div class="slideshow-container">
                <div class="mySlides fade">
                <img src="photos/krewetka.jpg" id="produkt-img">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div class="kropki">
                <span class="dot" onclick="currentSlide(1)"></span>   
                </div>
            </div>
                <div class="info">
                    <div id="tytul">
                        <h2>Krewetka blue</h2>
                    </div>
                        <div id="cena">
                            <p>20zł</p>
                        </div>
                            <!-- <div id="rodzaj">
                                <p>Rodzaj</p>
                            </div>
                                    <div class="kolor-rodzaj">
                                    </div> -->
                                <br>
                        <div id="ilosc">
                            <p>Ilosc</p>
                                <button class="down" onclick="down()">-</button>
                                    <a id="licznik">1</a>
                                <button class="up" onclick="up()">+</button>
                              
                        </div>
                        <br>
                            <div id="dostepnosc">
                                <p>Dostępność 14szt</p>
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
                        Krewetki są zwierzętami stadnymi – są bardzo prospołeczne i potrzebują mieć w swoim pobliżu swoich krewnych, dlatego w akwarium powinieneś trzymać od ośmiu do dziesięciu osobników. Generalnie da się socjalizować między sobą większość najróżniejszych rodzajów krewetek, jednak należy uważać, by krewetki do siebie pasowały, ale nie krzyżowały się ze sobą.
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
                                <td>20 litrów</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">pH wody</td>
                                <td>5,5-6,5</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Temperatura wody</td>
                                <td>18-24°C</td>
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
            if(this.licznik < 14 ){
                licznik += 1;}
            document.getElementById("licznik").innerHTML = licznik;
        };
</script>