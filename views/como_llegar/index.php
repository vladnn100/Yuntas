<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Ubicanos en Urb. Alameda la rivera Mz F Lt 30, Ate 15001. Siguenos en nuestras redes sociales: Facebook, Instagram, TikTok">
    <link rel="stylesheet" href="<?=URL?>public/css/presupuesto.css">
    <title>Presupuesto</title>
    
    <?php require_once("views/layouts/enlaces.php") ?>
</head>

<body>
    <?php require_once("views/layouts/navbar.php") ?>

    <section class="container text-white">
        <h2 class="titulo ">¡VISÍTANOS!</h2>
        <div class ="d-flex justify-content-center">
        <figure class="overflow-hidden mapa">
            <a href="https://www.google.com/maps/place/Yuntas+Producciones/@-12.0292327,-76.9261273,13.75z/data=!4m5!3m4!1s0x9105c97c8934a213:0x7f6ccb249e86b5e6!8m2!3d-12.0256319!4d-76.9414459?hl=es-ES" aria-label="ubicacion de la tienda" target="_blank" >
                <img src="public/nosotros/maps.webp" alt="ubicacion en el mapa" class="img-mapa">
            </a>
        </figure>
        </div>
        <h2 class="titulo-modify titulo">¡SÍGUENOS EN NUESTRAS REDES!</h2>
        <div class="card2">
            <figure class="card-1">
                <a href="https://web.facebook.com/YuntasProducciones/" target="_blank"><img class="zoom" src="<?=URL?>public/presupuesto/FB.webp" alt="logo de facebook" width= "70" height ="70"></a>
                <figcaption>Yuntas Producciones</figcaption>
            </figure>
            <figure class="card-2">
            <a href="https://www.instagram.com/yuntasproducciones/?hl=es-la" target="_blank">    <img class="zoom" src="<?=URL?>public/presupuesto/IG.webp" alt="logo de instagram" width= "70" height ="70"></a>
                <figcaption>@yuntasproducciones</figcaption>
            </figure>
            <figure class="card-3">
            <a href="https://www.tiktok.com/@yuntasproduccionesof" target="_blank">    <img class="zoom"  src="<?=URL?>public/presupuesto/TikTok.webp" alt="logo de tiktok" width= "70" height ="70"></a>
                <figcaption>@yuntasproducciones</figcaption>
            </figure>
            <figure class="card-4">
            <a href="https://www.youtube.com/watch?v=m_-aN4MX6YA" target="_blank">    <img class="zoom"  src="<?=URL?>public/presupuesto/youtube.webp" alt="logo de wsp" width= "70" height ="70"></a>
                <figcaption>Yuntas Producciones</figcaption>
            </figure>
            <!-- <figure class="card-4"> -->
            <!-- <a href="https://api.whatsapp.com/send?phone=912849782" target="_blank">    <img class="zoom"  src="<?=URL?>public/presupuesto/WSPIco.webp" alt="logo de wsp" width= "70" height ="70"></a> -->
                <!-- <figcaption>Yuntas Producciones</figcaption> -->
            <!-- </figure> -->
        </div>
    </section>
    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>