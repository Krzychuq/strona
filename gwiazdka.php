<!DOCTYPE html>
<html lang="pl">
<head>
<link href = "https://code.jquery.com/ui/1.13.2/themes/ui-darkness/jquery-ui.css" rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="gwiazdka.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Strona</title>
</head>
<body>
<div class="contener">
    <div class="baner">
        <a href='index.php'><p>San fransisco</p></a>
    </div>
    
    <div class="menu">
        <div class="m1">
            <button class="pmenu" id="info"><i class="bi bi-info-lg"></i></button>
        </div>
        <div class="m2">
            <button class="pmenu" id="lokalizacja"><i class="bi bi-geo-alt-fill"></i></button>
        </div>
        <div class="m3">
            <button class="pmenu" id="oferta"><i class="bi bi-cash-coin"></i></button>
        </div>
        <div class="m4">
            <button class="pmenu" id="kontakt"><i class="bi bi-telephone"></i></button>
        </div>
    </div>

    <div class="content">
        <div class="info">
            <div class="zdj">
                <img src="https://fajnepodroze.pl/wp-content/uploads/2019/08/most-golden-gate.jpg" width="100%" height="auto" alt="most red">
            </div>
            <div class="tekstInfo">
                <p>
                    San Francisco – miasto i hrabstwo w stanie Kalifornia w Stanach Zjednoczonych, położone na półwyspie San Francisco, otoczonym przez Ocean Spokojny na zachodzie, zatokę San Francisco na wschodzie i cieśninę Golden Gate na północy, czwarte pod względem liczby ludności miasto w Kalifornii i trzynaste w całym kraju. Jest częścią obszaru metropolitalnego San Francisco Bay Area, którego liczba ludności przekracza 7,2 miliona.
                </p>
            </div>

        </div>

            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82487.21280036475!2d-122.47579717409134!3d37.736718308157755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20Kalifornia%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1666789622045!5m2!1spl!2spl" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="oferta">
                <p><span id="te">Mieszkania do kupna </span> <a id="te" target=”_blank” href="https://pl.arkadia.com/na-sprzedaz/san-francisco-g1735/">tutaj</a></p>

            </div>
        
        <div class="kontakt">
            <p id="te">Nasza infolinia: 842 239 212</p>
            <p><span id="te">Hotele </span> <a id="te" target=”_blank” href="https://www.booking.com/searchresults.pl.html?label=gen173nr-1FCAEoggI46AdIM1gEaLYBiAEBmAEeuAEXyAEP2AEB6AEB-AELiAIBqAIDuAL39-SaBsACAdICJDdmYmFiZmQzLWFhZWYtNDBjZC04MDliLTY2MjFiYjUxMTViZNgCBuACAQ&sid=6e91e3243a2c5b633c4a06afc6bc7eee&sb=1&sb_lp=1&src=index&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Findex.pl.html%3Flabel%3Dgen173nr-1FCAEoggI46AdIM1gEaLYBiAEBmAEeuAEXyAEP2AEB6AEB-AELiAIBqAIDuAL39-SaBsACAdICJDdmYmFiZmQzLWFhZWYtNDBjZC04MDliLTY2MjFiYjUxMTViZNgCBuACAQ%26sid%3D6e91e3243a2c5b633c4a06afc6bc7eee%26sb_price_type%3Dtotal%26%26&ss=San+Francisco%2C+California%2C+Stany+Zjednoczone+Ameryki&is_ski_area=&checkin_year=&checkin_month=&checkout_year=&checkout_month=&efdco=1&group_adults=2&group_children=0&no_rooms=1&b_h4u_keep_filters=&from_sf=1&ss_raw=san+fr&ac_position=0&ac_langcode=pl&ac_click_type=b&ac_meta=GhA1NGExNjFiYjViOTQwNGY3IAAoATICcGw6BnNhbiBmckAASgBQAA%3D%3D&dest_id=20015732&dest_type=city&iata=SFO&place_id_lat=37.787804&place_id_lon=-122.4075&search_pageview_id=54a161bb5b9404f7&search_selected=true&search_pageview_id=54a161bb5b9404f7&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0">tutaj</a></p>
        </div>
    </div>
</div>
</body>

</html>

<script>
$(document).ready(function(){
    $('#lokalizacja').click(function(){
        $('.content').css('display','block');
            $('.mapa').css('display','block');
                $('.kontakt').css('display','none');
            $('.oferta').css('display','none');
        $('.info').css('display','none');
    });
        $('#info').click(function(){
            $('.content').css('display','block');
                $('.mapa').css('display','none');
                    $('.kontakt').css('display','none');
                $('.oferta').css('display','none');
            $('.info').css('display','block');
        });
        $('#oferta').click(function(){
            $('.content').css('display','block');
                $('.mapa').css('display','none');
                    $('.kontakt').css('display','none');
                $('.oferta').css('display','block');
            $('.info').css('display','none');
        });
    $('#kontakt').click(function(){
        $('.content').css('display','block');
            $('.mapa').css('display','none');
                $('.kontakt').css('display','block');
            $('.oferta').css('display','none');
        $('.info').css('display','none');
    });
});



</script>

