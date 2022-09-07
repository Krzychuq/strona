<?php
    include_once 'dbh.inc.php';
?>
<div class="banner">
    <!-- <p>Promocja na wszystkie filtry!!!</p> -->
    <p>Uwaga jest to strona poglądowa. Nie służy do zakupów!!!</p>
</div>
    <div class="header">
        <div class="logo">
            <a style="color:white;" href="index"><img class="plogo" src="favicon.ico" alt="logo"></a>
        </div>
        <div class="search">
            <!-- (A) SEARCH FORM -->
            <form method="post">
            <div class="search-menu">
                <input type="text" class="input-search"  name="search" title="Wyszukaj produkt" placeholder="Wyszukaj" required/>
                <input type="submit" class="but-search" value="Szukaj"/>
            </div>
            <?php
            // (B) PROCESS SEARCH WHEN FORM SUBMITTED
            if (isset($_POST["search"])) {
            // (B1) SEARCH FOR USERS
            require "search-form.php";

            // (B2) DISPLAY RESULTS
            if (count($results) > 0) { foreach ($results as $r) {
                echo"<div class='wyszukanie'><a href='$r[nazwa].php'>$r[nazwa]</a></div>";
            }} else { echo "<div class='wyszukanie'>Nie znaleziono produktu</div>"; }
            }
            ?>
            </form>

            
        </div>
        <div class="account">
            <h4 id="ikony0"><a id="konto1" href="konto"><i class="bi bi-person-circle"></i></a></h4>
            <a id="konto2" href="#konto">Konto</a>
        </div>
        <div class="cart">
            <h4 id="ikony0"><a id="koszyk1" href="koszyk"><i class="bi bi-basket2-fill"></i></a></h4>   
            <a id="koszyk2" href="#koszyk">Koszyk</a>
        </div>
    </div>
    
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
            <a href="ryby" style="color:white;"><span>RYBY</span></a>
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
        <a href="index" style="color: white;">NOWOŚCI</a>
    </div>  
</div>