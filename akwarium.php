<?php
    include 'dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/footer.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/kategoria.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/podobny-sprzet.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
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
    <!-- <a href="https://akwar.epizy.com/"> Powrot</a> -->
<div class="contener">
<div><?php include_once("html/menu.php");?></div>

<div class="shortcuts">
    <a href="szkla" class="sh1">
        <p>Szkła</p>
    </a>
    <a href="pokrywy" class="sh1">
        <p>Pokrywy</p>
    </a>
</div>
    
    



<div><?php include_once("html/podobny-sprzet.html");?></div>
<div><?php include_once("html/footer.html"); ?></div>
</div>
</body>
</html>
<script>


</script>