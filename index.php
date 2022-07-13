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
            <li>AKWARIUM</li>
                <li>SPRZĘT</li>
                    <li>RYBY</li>
                <li>DEKORACJE</li>
            <li>NOWOŚCI</li>
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
                                
                                <br>
                            </div>
                        <div id="ilosc">
                            <p>Ilosc</p>
                            <br><br><br><br>
                        </div>
                    <div id="zakup">
                        <button class="btkup"><i class="bi bi-bag-fill"></i> Dodaj 0,00zł</button>
                    </div>
                </div>
            <div class="opis">
                <p>Opis</p><br>
                <p>Skalar</p><br>
                <p>-posis</p>
                <p>-posis</p>
                <p>-posis</p>
                <p>-posis</p>

            </div>
        </div>

    </div>
<div class="footer">

</div>
</body>


</html>

<script>
	$(document).ready(function(){
		var x = 0;
    // for next slide
		$('.prawy').click(function(){
    
        x= (x<=200)?(x+100):0;
      $('figure').css('left', -x+'%');
		});


     // for prev slide
     $('.lewy').click(function(){
    
        x= (x>=100)?(x-100):400;
      $('figure').css('left', -x+'%');
    });
	});
</script>