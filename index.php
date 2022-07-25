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
</head>

<body>


    <div class="contener">
        <div class="banner">
            <p>Promocja na wszystkie filtry!!!</p>
        </div>
            <div class="header">
                <div class="logo">
                    <p>SKLEP.AM</p>
                </div>
                    <div class="search">
                        <input type="text" class="icon1" value placeholder="Czego szukasz?">
                        <input type="text" class="icon2" value>
                    </div>
                    <div class="account">
                        <h4 id="ikony0"><a id="konto1" href="konto.php"><i class="bi bi-person-circle"></i></a></h4>
                        <a id="konto2" href="konto.php">Konto</a>
                    </div>
                <div class="cart">
                    <h4 id="ikony0"><a id="koszyk1" href="koszyk.php"><i class="bi bi-basket2-fill"></i></a></h4>   
                    <a id="koszyk2" href="koszyk.php">Koszyk</a>
                </div>
            </div>
        <div class="menu">
            <div class="dropdown1">
                <span>AKWARIUM</span>
                    <div class="droplista1">
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </div>
            </div>
            <div class="dropdown2">
                    <span>SPRZĘT</span>
                        <div class="droplista2">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </div>      
                <div class="dropdown3">
                    <span>RYBY</span>
                    <div class="droplista3">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </div>  
                <div class="dropdown4">
                    <span>DEKORACJE</span> 
                    <div class="droplista4">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </div>
                </div> 
            <div class="dropdown5">
                    <span>NOWOŚCI</span>
                <div class="droplista5">
                     <li>test</li>
                     <li>test</li>
                     <li>test</li>
                </div>
            </div>  
        </div>


        <div class="prodcon">
            <div id="produkt">
                <figure>
                    <img src="photos/skalar1.jpg"> 
                        <img src="photos/skalar2.jpg">
                            <img src="photos/skalar3.jpg">
                        <img  id="photo" src="photos/skalar4.jpg">
                    </figure>
                <button class="lewy"><i class="fa fa-arrow-circle-left"></i> </button>
                <button class="prawy"><i class="fa fa-arrow-circle-right"></i> </button>
            </div>
                <div class="info">
                    <div id="tytul">
                        <h2>Skalar</h2>
                    </div>
                        <div id="cena">
                            <p>10,99zł</p><br><br>
                        </div>
                            <div id="rodzaj">
                                <p>Rodzaj</p>
                            </div>
                                    <div class="kolor-rodzaj">
                                        <button class="black"></button>
                                            <button class="white"></button>
                                            <button class="yellow"></button>
                                        <button class="orange"></button>
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
                                <p>Dostępność 10szt</p>
                            </div>
                            <br><br><br><br><br><br>
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
                            Kirysek Panda w akwarium
                            Kiryski są rybkami stadnymi. Najlepiej trzymać je w grupach od 6szt wzwyż. 
                            Cztery sztuki to absolutne minimum i wtedy wystarczy im akwarium 40 litrowe. 
                            Na podłoże najlepiej użyć piasku. Jeżeli jednak z jakiegoś powodu nie chcemy samego piasku to na części dna można zrobić drobny żwirek.
                            Ważne by nie był to żwirek o ostrych krawędziach. 
                            Roślinki są bardzo dobrym rozwiązaniem, aczkolwiek niekoniecznym. 
                            Dobrze jest zapewnić rybom zacienione miejsca. 
                            Można to osiągnąć na różne sposoby. 
                            Mogą to być roślinki pływające, korzeń, grota lub skały. 
                            Moim zdaniem bardzo fajnym rozwiązaniem będzie taki kawałek kory. 
                            Pamiętaj by przynajmniej część tafli wody była wolna od roślin.
                        </p>
                    </div>
                    <div class="opis2">
                        <table class="tabelka">
                            <tr>
                                <td style="font-weight: bold; width: 35%;">Dorasta do</td>
                                <td>20cm</td>
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
                                <td>23-27°C</td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
            <div class="podobne">
                <span>Podobne produkty</span>
            </div>

    </div>
<div class="footer">

</div>
</body>
</html>

<script>
	$(document).ready(function(){
		var x = 0;
    // w prawo przesuniecie
    $('.prawy').click(function(){

        x= (x<=200)?(x+100):0;
        $('figure').css('left', -x+'%');
    });
     // w lewo przesuniecie
     $('.lewy').click(function(){
    
        x= (x>=100)?(x-100):300;
        $('figure').css('left', -x+'%');
    });
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
            if(this.licznik < 10 ){
                licznik += 1;}
            document.getElementById("licznik").innerHTML = licznik;
        };



</script>