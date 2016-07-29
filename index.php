<!DOCTYPE html>
<html>
<head>
    <!-- Iso -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title is the first phrase you see as a search result. -->
    <title>Luxury | Supercolchones</title>

    <!-- Description of your website. Max 160 Characters-->
    <meta name="description" content="Page description. No longer than 155 characters."/>


    <!-- Most important word to use on specific page. / No more than 10 keyword phrases -->
    <meta name="keywords" content="words">

    <!-- Favicon -->

    <!-- Allows robots to crawl your website. https://yoast.com/robots-meta-tags/ -->
    <meta name="robots" content="selection">

    <!-- Schema.org markup for Google+ and Pinterest  http://schema.org/docs/gs.html-->
    <meta itemprop="name" content="The Name or Title Here">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content="http://www.example.com/image.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Luxury | Supercolchones">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="http://www.example.com/image.jpg">

    <!--
    Twitter thumbnail: 120x120px
    Twitter large image: 280x150px
    Facebook: Standards vary, but an image at least 200x200px works best.
    Facebook recommends large images up to 1200x630px wide.
    -->

    <!-- Open Graph data for sharing in Facebook -->
    <meta property="og:title" content="Luxury | Supercolchones"/>
    <meta property="og:type" content="Luxury | Supercolchones"/>
    <meta property="og:url" content="http://www.supercolchones.com/"/>
    <meta property="og:image" content="http://example.com/image.jpg"/>
    <meta property="og:description" content="Description Here"/>
    <meta property="og:site_name" content="Luxury | Supercolchones"/>
    <meta property="og:locale:alternate" content="es_MX"/>
    <meta property="og:locale:alternate" content="en_US"/>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts src -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
</head>
<body>
<div class="side-b">
    <nav>
        <img class="nav-logo" src="img/logos/luxury.png" alt="">
    </nav>
    <div class="side-b-main-content">
        <h1>Copy en su version corta.</h1>
        <h2>Aqui va un texto que hable acerca de la marca y unas cuantas cosas mas para lograr envolver al usuario y que realice una sita, para la compra de su colchonsin, aproximadamente.</h2>
        <form enctype="multipart/form-data" name="pagerform" id="pageForm">
            <input type="text" name="nombre" placeholder="Nombre" class="required movil">
            <input type="text" name="correo" placeholder="Correo" class="required movil">
            <input type="text" name="telefono" placeholder="Teléfono" class="required movil">
            <input type="button" name="enviar" id="enviar" value="Enviar" onclick="validateForm('pageForm')" class="form-button">
            <a href="#">Contacto</a>
        </form>
    </div>
    <footer>
        <ul>
            <li><img src="img/logos/sf.png" alt=""></li>
            <li><img src="img/logos/tempur.png" alt=""></li>
            <li><img src="img/logos/magnus.png" alt=""></li>
        </ul>
    </footer>
</div>
<div class="add-blackout"></div>
<div class="msg append"></div>

<div class="side-a" id="side-a">
    <div class="side-a-square"></div>
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4738uIisDOYyffs-UVzfBWYAJ4AAYiC0&callback=initMap">
</script>

</body>
</html>