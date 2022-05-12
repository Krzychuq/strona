
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
              <div class="1blok">

              </div>
                     
              <div class="2blok">

              </div>
              
              <div class="3blok">

              </div>

       </div>

       


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
              });
                     
       
       </script>
</html>