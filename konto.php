<?php
    include 'dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/menu.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/footer.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
<link rel="stylesheet" href="css/konto.css?dat=<?php echo strtotime(date("H:i:s")) ?>">
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
<?php include_once("html/menu.php");?>
<div class="box">
    <div class="sideboxleft">
        <div class="title">
            <p>Mam już konto</p>
        </div>
            <form class="inputs" action="">
                <input class="inp" type="email" placeholder="Email">
                <input class="inp" type="password" placeholder="Hasło">
                <button class="login" type="submit">Zaloguj się</button>
                
            </form>
            <p class="passrem">Nie pamiętasz hasła?</p>
    </div>
    
    <div class="sideboxright">
        <div class="title">
            <p>Nie masz konta?</p>
            <p style="padding-top:4px;">To nie problem</p>
                <form class="inputs" action="">
                    <input class="inp" type="email" placeholder="Email">
                    <input class="inp" type="password" placeholder="Hasło">
                    <input class="inp" type="password" placeholder="Powtórz hasło">
                    <button class="login" type="submit">Zarejestruj się</button>
                </form>
        </div>

    </div>
</div>


<?php include_once("html/footer.html"); ?>
</body>
</html>
<script>


</script>