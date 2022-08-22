<?php
    include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
    <link rel="stylesheet" href="css/footer.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
        <link rel="stylesheet" href="css/pokrywy.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <meta charset="UTF-8"/>
                    <meta name="robotscontent=noindex,nofollow"/>
                        <link rel="stylesheet" href="ui/jquery-ui.css">
                            <link rel="icon" href="favicon.ico">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>

<div class="contener">
<?php include_once("html/menu.html"); ?>
<!-- /////////////////////////////////////////////////////  PC nowosci  ////////////////////////////////////////////////////////////////////////////////// -->
    <div class="nowosci">
        <div class="nnazwa">
            <p>Ryby</p>
        </div>
        <div class="produkty">
            <div class="item">
                <a href="pokrywaJuwel60"><img src="photos/pokrywa juwel60.jpg" id="produkt-mobile">
                <p>Pokrywa Juwel PRIMOLUX 60</p>
                </a>
            </div>
        </div>
    </div>


<?php include_once("html/footer.html"); ?>
</div>   
</body>
</html>
<script>
let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slides[slideIndex-1].style.display = "block";  
    }
    </script>