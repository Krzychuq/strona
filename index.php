
<!DOCTYPE html>
<html lang="pl">
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <meta charset="UTF-8"/>
       <meta name="robotscontent=noindex,nofollow"/>
       <title>Główna</title>
       <link rel="stylesheet" href="index.css?dat=<?php echo strtotime(date("H:i:s")) ?>" >
       <link rel="stylesheet" href="menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
       <link rel="stylesheet" href="logowanie.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
       <link rel="stylesheet" href="ui/jquery-ui.css">
       <link rel="icon" href="favicon.ico">
       <script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
       <script src="jquery-3.6.0.js"></script>
       <script src="ui/jquery-ui.min.js"></script>

</head>
<body>
       
       <div><?php include_once("menu.php"); ?></div>
       <div class="contener">
              <div class="icons">
                     <div class="przycisk-confetti">
                            <button id="startConfetti" class="przyciski" title="Niespodzianka"><span class="ikon"></span></button>
                                   <span style="margin-left:50px;"></span>
                            <button class="hehe" title="Pudełko"><span class="ikona2"></span></button> 
                     </div>
              </div>
              <div class="alu">
                     <img src="alucard.png" alt="alucard" style="width: 200px; height:auto; margin-left:5px;">
                     <p style="font: bold 1em segoe ui ; margin-top:70px; text-shadow: 1px 1px grey;">Ptakiem Hermesa nazywają mnie, zjadam swe skrzydła by poskromić się.<br>-Alucard</p>
                     <img src="dogi.jpg" alt="dogi" style="width: 200px; height:auto;">
                     <p style="font: bold 1em segoe ui ; margin-top:70px; text-shadow: 1px 1px grey;">Zabiere twą st00pke<br>-Pycha</p>
              </div>
              
       </div>
       
      

       <script src="https://rawgit.com/benevolenttech/jquery.confetti.js/master/jquery.confetti.js"></script>

</body>
       <script>
              $(document).ready(function(){
                     $(".opcje").on("click", function(){
                            $(".dropLista").fadeToggle("3000");
                     });  

                     $( ".tryb" ).on("click", function() {
                            if($(this).attr('data-stan') == 0){
                                   $("html").addClass('jasny');
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
                            $.ajax({
                                   cache: false,
                                   url: 'logowanie.php',
                                   dataType: 'html',
                                   success: function (data) {
                                          $('<div/>').append(data).dialog({draggable: false});
                                          $('.ui-dialog-title').text('Zaloguj się');
                                          
                                   }
                            });
                      
                     });
                            $('body').on('click', '.okno_sign', function(){
                                   $.ajax({
                                          cache: false,
                                          url: 'zarejestruj.php',
                                          dataType: 'html',
                                          success: function (data) {
                                                 $('.dialog').empty().append(data);
                                                 $('.ui-dialog-title').text('Zarejestruj się');
                                          }
                                   });
                            });
              
              $('.hehe').on('click', function(){            
                     $.ajax({
                            cache: false,
                            url: 'box.php',
                            dataType: 'html',
                            success: function(data) {
                                   $("<div/>").append(data).dialog({draggable: false});
                                   $('.ui-dialog-title').text('Okienko');
                                   
                            }
                     });
              });
              
              });
              
                     
       
       </script>
</html>