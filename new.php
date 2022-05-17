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

<!-- MENU -->

<div class="nav">
       <div class="rows">
              <div class="row1">
                     <div class="info">
                     <span class="info_spany">(+48) 884 321 940</span>
                            
                     <span class="info_spany">email@gmail.com</span>
                            
                     <span class="info_spany">Zaloguj</span>
                            
                     <span class="info_spany">Ulubione(x)</span>
                     <span id="puste" style="width:20px;"></span>
                     </div>
              </div>

              <div class="row2">
                     <img src="logo.png" style="width:100px; height:auto; float:left; padding:10px 10px;">
                        <div class="row2-1">
                                <input class="searchbar" type="text" name="text" autocomplete="off" placeholder="CZEGO SZUKASZ?">
                        </div>



              </div>
       </div>
</div>
<!-- MENU -->



</body>
</html>


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