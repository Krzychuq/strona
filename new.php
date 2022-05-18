<html>
<head>
<link rel="stylesheet" href="new.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8"/>
<meta name="robotscontent=noindex,nofollow"/>
<script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.js"></script>
<script src="ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="ui/jquery-ui.css">
<link rel="icon" href="favicon.ico">
<title>Nowa strona</title>
</head>

<body>

<div class="promocja-bar">
        <span>Promocja 20% na produkty!!</span>
</div>


<!-- MENU -->

<div class="nav">
       <div class="rows">
                <div class="row1">
                        <div class="info">
                        <span class="info_spany">(+48) 884 321 940</span>
                        <span id="puste" style="margin-left:20px;"></span>  
                        <span class="info_spany">email@gmail.com</span>
                        <span id="puste" style="margin-left:20px;"></span>    
                        <span class="info_spany">Zaloguj</span>
                        <span id="puste" style="margin-left:20px;"></span>     
                        <span class="info_spany">Ulubione(x)</span>
                        <span id="puste" style="margin-left:20px;"></span> 
                        </div>
                </div>

                <div class="row2">
                        <img src="logo.png" style="width:250px; height:auto; float:left; padding:10px 20px; margin-left:40px; margin-top:10px;">
                        <div class="row2-1">
                                <input class="searchbar" type="text" name="text" autocomplete="off" placeholder="CZEGO SZUKASZ?">
                                        <span style="margin-left:50px;"><i class="fa-solid fa-cart-shopping"></i></span>
                                                        <span style="margin-left:10px ;"></span>
                                                <span style="font-size:15px;">&#10102;</span>
                                        <span style="margin-left:50px;">0.00 PLN </span>
                                <span style="margin-left:5px;"><i class="fa-solid fa-angle-right"></i></span>
                        </div>
                </div>
        
                <div class="nav_bottom">
                        <div class="list1">
                        <span id="1">Nowość</span>
                                <div class="lista1">
                                        <span>1</span>
                                </div>
                        </div>

                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="2" class="dropdown1">Odzież    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="3" class="dropdown2">Akcesoria    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="4" class="dropdown3">Buty    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="5" class="dropdown4">Deskorolka    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="6" class="dropdown5">Snowboard    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="7" class="dropdown6">Wyprzedaż    <i class="fa-solid fa-angle-down"></i></span>
                                <span id="puste" style="margin-left:5px;"></span>
                                        <span id="puste" style="margin-left:25px;"></span>
                        <span id="8">Marki</span>
                                <span id="puste" style="margin-left:5px;"></span>
                                
                </div>
       </div>
</div>


<div class="lista1">
                <span>1</span>
        </div>
                <div class="lista2">
                        <span>2</span>
                </div>
                        <div class="lista3">
                                <span>3</span>
                        </div>
                                <div class="lista4">
                                        <span>4</span>
                                </div>
                        <div class="lista5">
                                <span>5</span>
                        </div>
                <div class="lista6">
                        <span>6</span>
                </div>
        <div class="lista7">
                <span>7</span>
        </div>



<!-- MENU -->

<div class="slajdy">
        <img src="photos/1.jpg" alt="photo" style="width:fit-content; height:auto;">
        <img src="photos/2.jpg" alt="photo" style="width:fit-content; height:auto;">
        <img src="photos/3.jpg" alt="photo" style="width:fit-content; height:auto;">
</div>


</body>
</html>


<script>
        $(document).ready(function(){
                $(".dropdown1").hover(function(){
                        $(".lista1").fadeToggle("3000");
                });  
                        $(".dropdown2").hover(function(){
                                $(".lista2").fadeToggle("3000");
                        }); 
                                $(".dropdown3").hover(function(){
                                        $(".lista3").fadeToggle("3000");
                                }); 
                                $(".dropdown4").hover(function(){
                                        $(".lista4").fadeToggle("3000");
                                }); 
                        $(".dropdown5").hover(function(){
                                $(".lista5").fadeToggle("3000");
                        }); 
                $(".dropdown6").hover(function(){
                        $(".lista6").fadeToggle("3000");
                });                 
        });
</script>