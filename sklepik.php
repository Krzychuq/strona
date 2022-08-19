<?php
    include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
    <link rel="stylesheet" href="css/footer.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
        <link rel="stylesheet" href="css/sklepik.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
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
    <div class="nowosci">
        <div class="nnazwa">
            <p>Nowości</p>
        </div>
        <div class="produkty">
            <div class="item">
                <img src="photos/glonojad.jpg" alt="glonojad" id="produkt-img">
                <p>Glonojad</p>
            </div>
            <div class="item">
                <img src="photos/glonojad.jpg" alt="glonojad" id="produkt-img">
                <p>Glonojad</p>
            </div>
            <div class="item">
                <img src="photos/glonojad.jpg" alt="glonojad" id="produkt-img">
                <p>Glonojad</p>
            </div>
            <div class="item">
                <img src="photos/glonojad.jpg" alt="glonojad" id="produkt-img">
                <p>Glonojad</p>
            </div>
        </div>
    </div>




<?php include_once("html/footer.html"); ?>
</div>   
</body>
</html>

