<?php
    include_once 'dbh.inc.php';
?>
<!-- Menu Mobile ⬇️-->
<div class="lista">
    <button class="butmobilemenu2"><i class="bi bi-x-lg"></i></button>
    <div class="blok1">
        <p>Akwarium</p>
            <div class="bloczek1">
                <li><s>Szkła</s></li>
                <li><a href="pokrywy">Pokrywy</a></li>
            </div>
    </div>
        <div class="blok2">
            <p>Sprzęt</p>
                <div class="bloczek2">
                    <li><a href="filtry">Filtry</a></li>
                    <li><a href="grzalki">Grzałki</a></li>
                    <li><s>Termometry</s></li>
                </div>
        </div>
            <div class="blok3">
                <a href="ryby"><div class="blok3link">Ryby</div></a> 
            </div>
        <div class="blok4">
            <p>Dekoracje</p>
                <div class="bloczek4"> 
                        <li><s>Roślinki</s></li>
                        <li><s>Ozdoby</s></li>
                        <li><s>Tła</s></li>
                </div>
        </div>
    <div class="blok5">
        <a href="index"><div class="blok5link">Nowość</div></a>   
    </div>
</div> 
<!-- Menu Mobile ⬆️-->

<div class="banner">
    <!-- <p>Promocja na wszystkie filtry!!!</p> -->
    <p>Uwaga jest to strona poglądowa. Nie służy do zakupów!!!</p>
</div>
    <div class="header">
        <div class="logo">
            <a href="index"><img class="plogo" src="favicon.ico" alt="logo"></a>
        </div>
            <div class="account">
                <h4><a id="konto1" href="konto"><i class="bi bi-person-circle"></i></a></h4>
                <a id="konto2" href="#konto">Konto</a>
            </div>
            <div class="cart">
                <h4><a id="koszyk1" href="koszyk"><i class="bi bi-basket2-fill"></i></a></h4>   
                <a id="koszyk2" href="#koszyk">Koszyk</a>
            </div>
        <div class="cart">
            <button class="butmobilemenu1"><i class="bi bi-list"></i></button>
        </div>
    </div>



    <!-- Menu PC ⬇️-->
<div class="menu">

    <div class="dropdown1">
    <span>AKWARIUM</span>
        <div class="droplista1">
            <li><s>Szkła</s></li>
            <li><a href="pokrywy">Pokrywy</a></li>
        </div>
    </div>

        <div class="dropdown2">
            <span>SPRZĘT</span>
                <div class="droplista2">
                    <li><a href="filtry">Filtry</a></li>
                    <li><a href="grzalki">Grzałki</a></li>
                    <li><s>Termometry</s></li>
                </div>
        </div>    

            <div class="dropdown3">
                <a href="ryby">RYBY</a>           <!-- kolor czcionki -->
            </div> 

        <div class="dropdown4">
        <span>DEKORACJE</span> 
            <div class="droplista4"> 
                    <li><s>Roślinki</s></li>
                    <li><s>Ozdoby</s></li>
                    <li><s>Tła</s></li>
            </div>
        </div> 
        
    <div class="dropdown5">
        <a href="index">NOWOŚCI</a>                  <!-- kolor czcionki -->
    </div> 
    
</div>
 <!-- Menu PC ⬆️-->
 

<script>
$('.butmobilemenu1').click(function(){
    $('.lista').css('display','flex');
    $('.blok1').css('display','block');
    $('.blok2').css('display','block');
    $('.blok3').css('display','block');
    $('.blok4').css('display','block');
    $('.blok5').css('display','block');
    $('.butmobilemenu1').css('display','none');
    $('.butmobilemenu2').css('display','block');
});

$('.butmobilemenu2').click(function(){
    $('.lista').css('display','none');
    $('.butmobilemenu2').css('display','none');
    $('.butmobilemenu1').css('display','block'); 
});
</script>
<!-- Menu Mobile ⬆️-->


<!-- searchbar -->
    <div class="search">
        <!-- SEARCH FORM -->
        <form method="post" id="resulty">
            <div class="search-menu">
                <input type="text" class="input-search"  name="search" title="Wyszukaj produkt" placeholder="Wyszukaj" required/>
                <input type="submit" class="but-search" value="&#8981;"/>
            </div>
            <?php
                // PROCESS SEARCH WHEN FORM SUBMITTED
                if (isset($_POST["search"])) {
                // SEARCH FOR USERS
                require "search-form.php";

            // DISPLAY RESULTS
            if (count($results) > 0) { foreach ($results as $r) {
                echo"<a href='$r[nazwa].php'><div class='wyszukanie'>$r[nazwa]</div></a>";
            }} else { echo "<div class='wyszukanie'>Nie znaleziono produktu</div>"; }
            }
            ?>
        </form>       
    </div>

