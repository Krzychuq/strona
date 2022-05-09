<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="robotscontent=noindex,nofollow"/>
<title>Zdjęcia</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="zdjecia.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.js"></script>
<script src="ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="ui/jquery-ui.css">
</head>


<body>
    


    <div>
        <?php include_once("menu.php"); ?>
    </div>



<article>
    <div class="zdjecia_row">
        <div class="zdjecia_column">
            <img src="2.jpg" style="width:374px;height:754px;">
            <img src="3.jpg" style="width:374px;height:754px;">
            <img src="4.jpg" style="width:374px;height:754px;">
            <img src="5.jpg" style="width:374px;height:754px;">
            <img src="6.jpg" style="width:374px;height:754px;">
            <!-- <img src="8.jpg" style="height:682px;"> -->
            <img src="10.jpg" style="width:374px;height:754px;">
            <!-- <img src="1.jpg" style="width:682px;height:384px;">
            <img src="11.jpg" style="width:682px;height:384px;">
            <img src="12.jpg" style="width:682px;height:384px;">
            <img src="9.jpg"> -->
        </div>
    </div>
</article>

<div class="dialog" title="Zaloguj się">
        <span>Podaj email</span>
        <br>
        <span>Podaj hasło</span>
        <br>
        <span>Zapamietaj mnie</span>
        <br>
        <span>Nie pamiętam hasła</span>
        <br>
        <span>Zaloguj się</span>
    </div>

</body>





<script>
       $(document).ready(function(){
              $(".opcje").on("click", function(){
                     $(".dropLista").fadeToggle("3000");
              });  

              $( ".tryb" ).on("click", function() {
                     if($(this).attr('data-stan') == 0){
                            $("html").addClass("jasny");
                            $(this).attr('data-stan', 1);
                            $(this).html('<i class="fa-solid fa-moon"></i> Ciemny tryb');
                     }
                     else{
                            $("html").removeClass("jasny");
                            $(this).attr('data-stan', 0);
                            $(this).html('<i class="fa-solid fa-sun"></i> Jasny tryb');
                     }
              });
            $('.login').on('click', function(){
                $.post("login.php",function(data){
                    $( ".dialog" ).dialog();
                });   
            });
    });
</script>

</html>