
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="robotscontent=noindex,nofollow"/>
    <title>Główna</title>
    <link rel="stylesheet" href="index.css?dat=<?php echo strtotime(date("H:i:s")) ?>" >
    <link rel="stylesheet" href="menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
    <link rel="stylesheet" href="ui/jquery-ui.css">
    <link rel="icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.js"></script>
    <script src="ui/jquery-ui.min.js"></script>

    
</head>
       <body>
              <div>
                     <?php include_once("menu.php"); ?>

              </div>
       <div class="contener">
              
                     <!-- <div class="wideo">
                     <iframe class="wideo1" src="https://www.youtube.com/embed/UAYzbudee40" title="Dolphinflip yt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div> -->
                     
                     <div class="1blok">
                            
                     </div>
                     
                     <div class="2blok">


                     </div>
                     
                     <div class="3blok">


                     </div>


       </div>
       
       
       
       
       <div class="dialog" title="Zaloguj się">
        <div class="username"><input type="text" placeholder="Podaj email"required></div>
        
       <div class="password"><input type="password" placeholder="Podaj hasło" required></div>

       <div class="remember"><input type="checkbox"><p>Zapamietaj mnie</p></div>
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
       }
        ); 
      });
       });
                     
       
</script>
</html>