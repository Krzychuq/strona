<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
    <meta name="robotscontent=noindex,nofollow"/>
<title>Zdjęcia</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="zdjecia.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<script src="https://kit.fontawesome.com/98a8f2243f.js" crossorigin="anonymous"></script>
<script src="jquery-3.6.0.js"></script>
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
             
       });
</script>

</html>