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
                            <link rel="icon" href="favicon.ico">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/vader/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>

<div class="contener">
<?php include_once("html/menu.php"); ?>
<!-- /////////////////////////////////////////////////////  PC nowosci  ////////////////////////////////////////////////////////////////////////////////// -->
<div class="nowosci">
        <div class="nnazwa">
            <p>Pokrywy</p>
        </div>
        <div class="produkty">

            <div class="item">
                <a href="Pokrywa Aquel leddy 40"><img src="photos/pokrywa aquel leddy1.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=10");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
            </div>

            <div class="item">
                <a href="Pokrywa Aquel leddy 60"><img src="photos/pokrywa aquel leddy1.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=11");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
            </div>

            <div class="item">
                <a href="Pokrywa Aquel Classic 100"><img src="photos/pokrywa aquel classic1.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=12");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
            </div>

            <div class="item">
                <a href="Pokrywa Aquel Classic 120"><img src="photos/pokrywa aquel classic1.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=13");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
            </div>

            <div class="item">
                <a href="Pokrywa Juwel PRIMOLUX 60"><img src="photos/pokrywa juwel60.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=9");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
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