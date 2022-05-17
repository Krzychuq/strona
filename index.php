
<!DOCTYPE html>
<html lang="pl">
<head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <meta charset="UTF-8"/>
       <meta name="robotscontent=noindex,nofollow"/>
       <title>Główna</title>
       <link rel="stylesheet" href="index.css?dat=<?php echo strtotime(date("H:i:s")) ?>" >
       <link rel="stylesheet" href="menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
       <link rel="icon" href="favicon.ico">
       <script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
       <script src="jquery-3.6.0.js"></script>
       <script src="ui/jquery-ui.min.js"></script>
       <link rel="stylesheet" href="ui/jquery-ui.css">

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
              $('.hehe').on('click', function(){            
                     $.ajax({
                            cache: false,
                            url: 'box.php',
                            dataType: 'html',
                            success: function(data) {
                                   $("<div/>").append(data).dialog({draggable: false, resizable: false, modal: true});
                                   $('.ui-dialog-title').text('Okienko');
                                   
                            }
                     });
              });
              
              });
              
                     
       
       </script>
</html>