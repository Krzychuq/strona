<html>
<head>
<link rel="stylesheet" href="index.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8"/>
<meta name="robotscontent=noindex,nofollow"/>
<link rel="stylesheet" href="ui/jquery-ui.css">
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>


    <div class="contener">
        <div class="banner">
            <!-- <p>Promocja na wszystkie filtry!!!</p> -->
            <p>Uwaga jest to strona poglądowa. Nie służy do zakupów!!!</p>
        </div>
            <div class="header">
                <div class="logo">
                    <p>Sklepik</p>
                </div>
                <div class="search">
                    <input type="text" class="icon1" value placeholder="Czego szukasz?">
                    <input type="text" class="icon2" value>
                </div>
                <div class="account">
                    <h4 id="ikony0"><a id="konto1" href="konto.php"><i class="bi bi-person-circle"></i></a></h4>
                    <a id="konto2" href="#konto">Konto</a>
                </div>
                <div class="cart">
                    <h4 id="ikony0"><a id="koszyk1" href="koszyk.php"><i class="bi bi-basket2-fill"></i></a></h4>   
                    <a id="koszyk2" href="#koszyk">Koszyk</a>
                </div>
            </div>
        <div class="menu">
            <div class="dropdown1">
                <span>AKWARIUM</span>
                    <div class="droplista1">
                        <li>Szkła</li>
                        <li>Pokrywy</li>
                </div>
            </div>
            <div class="dropdown2">
                    <span>SPRZĘT</span>
                        <div class="droplista2">
                            <li>Filtry</li>
                            <li>Grzałki</li>
                            <li>Termometry</li>
                    </div>
                </div>      
                <div class="dropdown3">
                    <a href="#ryby" style="color:black;"><span>RYBY</span></a>
                </div>  
                <div class="dropdown4">
                    <span>DEKORACJE</span> 
                    <div class="droplista4"> 
                            <li>Roślinki</li>
                            <li>Ozdoby</li>
                            <li>Tła</li>
                    </div>
                </div> 
            <div class="dropdown5">
                    <span>NOWOŚCI</span>
                <div class="droplista5">
                        <li>Dekoracje</li>
                        <li>Sprzęt</li>
                        <li>Ryby</li>
                        <li>Akwarium</li>
                </div>
            </div>  
        </div>


        <div class="prodcon">
            <div id="produkt">
            <li><a href="#slide1"><img src="photos/skalar1.jpg" /></a></li>
                    <li><a href="#slide2"><img src="photos/skalar2.jpg" /></a></li>
                    <li><a href="#slide3"><img src="photos/skalar3.jpg" /></a></li>
                    <li><a href="#slide4"><img src="photos/skalar4.jpg" /></a></li>
                </ul>
                <ul class="slides">
                    <li id="slide1"><img src="photos/skalar1.jpg" alt="" /></li>
                    <li id="slide2"><img src="photos/skalar2.jpg" alt="" /></li>
                    <li id="slide3"><img src="photos/skalar3.jpg" alt="" /></li>
                    <li id="slide4"><img src="photos/skalar4.jpg" alt="" /></li>
                </ul>
            </div>
                <div class="info">
                    <div id="tytul">
                        <h2>Glonojad</h2>
                    </div>
                        <div id="cena">
                            <p>7zł</p>
                        </div>
                            <div id="rodzaj">
                                <p>Rodzaj</p>
                            </div>
                                    <div class="kolor-rodzaj">
                                            <button class="darkgreen"></button>
                                            <button class="brown"></button>
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
                                <p>Dostępność 42szt</p>
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
                            Przeciętnie dorastają do 13 cm długości. Ubarwienie ciała różnorodne, zależne od genów, od jasnobrunatnej do niemal czarnej barwy z licznymi, drobnymi, jaśniejszymi plamkami. Charakterystyczne dla większości zbrojników brzusznie spłaszczone ciało, z szeroką głową, wypukłym grzbietem i dwiema płetwami grzbietowymi. Szerokie, masywne płetwy piersiowe ułatwiają rybie poruszanie się po dnie. Otwór gębowy w dolnym położeniu, zakończony przyssawką, którą przyczepiają się do dekoracji i zeskrobują glony.
                        </p>
                    </div>
                    <div class="opis2">
                        <table class="tabelka">
                            <tr>
                                <td style="font-weight: bold; width: 35%;">Dorasta do</td>
                                <td>10-15cm</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold;">Wielkość akwarium</td>
                                <td>72 litrów</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">pH wody</td>
                                <td>5,5-7,5</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Temperatura wody</td>
                                <td>18-26°C</td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
            <div class="podobne">
                <span>Podobne produkty</span>
                <div class="podobne_zdjecia">
                    <div class="item" id="1">
                    <a href="index.php"><img style="width: 200px; height: 200px;" src="photos/skalar1.jpg" alt="skalar">
                            <p>Skalar</p>
                        <p style="font-weight:bold;">11zł/szt</p></a>
                    </div>
                        <div class="item" id="2">
                            <a href="mieczyk.php"><img style="width: 200px; height: 200px;" src="photos/mieczyk.jpg" alt="mieczyk">
                                <p>Mieczyk</p>
                            <p style="font-weight:bold;">9zł/szt</p></a>
                        </div>
                            <div class="item" id="3">
                                <a href="krewetka.php"><img style="width: 200px; height: 200px;" src="photos/krewetka.jpg" alt="krewetka">
                                    <p>Krewetka blue</p>
                                <p style="font-weight:bold;">20zł/szt</p></a>
                            </div>
                        <div class="item" id="4">
                            <a href="tetra.php"><img style="width: 200px; height: 200px;" src="photos/tetra.jpg" alt="tetra">
                                <p>Tetra czarna</p>
                            <p style="font-weight:bold;">14zł/szt</p></a>
                        </div>
                    <div class="item" id="5">
                        <a href="gupik.php"><img style="width: 200px; height: 200px;" src="photos/gupik.jpg" alt="gupik">
                            <p>Gupik</p>
                        <p style="font-weight:bold;">3zł/szt</p></a>
                    </div>
                </div>
            </div>

    </div>
<div class="footer">
    <div class="klasa">
        <span class="footer-title">Kontakt</span>
        <p class="tekst-footer"><i style="font-size:1.4em; margin-right:5px;" class="bi bi-envelope-fill"></i> przykladowy2@email.com</p>
        <p><i style="font-size:1.4em; margin-right:5px;" class="bi bi-telephone-fill"></i> +43 123 456 789</p>
    </div>
        <div class="klasa">
            <span class="footer-title">Informacje</span>
            <ul class="tekst-footer">
                <li>Płatności</li>
                <li>Współpraca</li>
            </ul>
        </div>
        <div class="klasa">
            <span class="footer-title">Regulamin</span>
            <ul class="tekst-footer">
                <li>Zwroty</li>
                <li>Zakupy online</li>
                <li>Polityka prywatności</li>
            </ul>
        </div>
    <div class="klasa">
        <span class="footer-title">Śledz nas</span>
        <p class="tekst-footer" style="font-size:20px;">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </p>
    </div>
    
</div>
</body>
</html>

<script>
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
            if(this.licznik < 42 ){
                licznik += 1;}
            document.getElementById("licznik").innerHTML = licznik;
        };
</script>