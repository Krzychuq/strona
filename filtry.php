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
            <p>Filtry</p>
        </div>
        <div class="produkty">
            <div class="item">
                <a href="Filtr Juwel BIOFLOW L"><img src="photos/juwel filtrL1.jpg" id="produkt-mobile">
<?php
$stmt = $conn->prepare(
    "SELECT * FROM produkty WHERE id=7");
$stmt->execute();
$prod = $stmt->fetchAll();
foreach($prod as $prod) {
?>
                <p><?php echo $prod['nazwa']; ?></p>
                <p><?php echo $prod['cena']; ?>zł</p></a>
<?php } ?>
            </div>
            <div class="item">
                <!-- <a href=""><img src="" id="produkt-mobile"> -->
            </div>            
            <div class="item">
                <!-- <a href=""><img src="" id="produkt-mobile"> -->
            </div>            
            <div class="item">
                <!-- <a href=""><img src="" id="produkt-mobile"> -->
            </div>
            <div class="item">
                <!-- <a href=""><img src="" id="produkt-mobile"> -->
            </div>
            
            <div class="item">
                <!-- <a href=""><img src="" id="produkt-mobile"> -->
            </div>
        </div>
    </div>
<?php include_once("html/footer.html"); ?>
</div>   
</body>
</html>
<script>

</script>