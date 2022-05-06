
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="robotscontent=noindex,nofollow"/>
    <title>Główna</title>
    <link rel="stylesheet" href="index.css?dat=<?php echo strtotime(date("H:i:s")) ?>" >
    <link rel="icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.js"></script>
</head>
       <body>
              <div>
                     <?php include_once("menu.php"); ?>
              </div>
       <div class="contener">
              <article>
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/UAYzbudee40" title="Dolphinflip yt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <p class="nap">napis</p>
                     <p>napis</p>
                     <p>napis</p>
                     <p>napis</p>
                     <p>napis</p>
              </article>

       </div>
       
       
       
       
       
       </body>
<script>
       $(document).ready(function(){
              $(".buttonl").on("click", function(){
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
              
              $('.nap').typeIt({
              whatToType: "Hejka",
              typeSpeed: 200
});
             
       });
       
</script>
</html> 

