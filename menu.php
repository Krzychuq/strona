<script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.js"></script>
<script src="ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="ui/jquery-ui.css">
                     <div class="nav">
                            <div class="flexi">
                                   <a class="linkA" href="https://www.instagram.com/krzychu_jowy/" target="_blank" title="instagram">
                                   <i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="flexf">
                                   <a class="linkA" href="https://www.facebook.com/Krzychuq12/" target="blank" title="facebook">
                                   <i class="fa-brands fa-facebook"></i></a>
                            </div>

                                   <div class="flex_gap1"></div>
                                   

                            <div class="flexh">
                                   <a class="linkA" href="index.php" title="Główna">
                                   <i class="fa-solid fa-house-chimney"></i> Główna</a>
                            </div>
                            <div class="flexp">
                            <a class="linkA" href="zdjecia.php" title="Zdjęcia">
                                   <i class="fa-solid fa-camera"></i> Zdjęcia</a>
                            </div>
                            <div class="flexa">
                                   <span class="login" title="Zaloguj się">
                                   <i class="fa-solid fa-door-open"></i> Zaloguj</span>
                            </div>
                            
                            <div class="dropdown">          
                                          <div class="opcje" title="Opcje"><i class="fa-solid fa-wrench"></i> Opcje</div>
                                          <div class="dropLista">
                                          <span class="tryb" data-stan="0"><i class="fa-solid fa-sun"></i> Jasny tryb</span>
                                          </div>
                            </div>        
                     </div>
                     <script>
              $(document).ready(function(){
                     $(".opcje").on("click", function(){
                            $(".dropLista").fadeToggle("3000");
                     });  

                     $('body').on("click", '.tryb', function() {
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
                                          $('<div/>').append(data).dialog({draggable: false, resizable: false, modal: true});
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
