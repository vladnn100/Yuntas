<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Conoce quienes somos, nuestra misión y visión como empresa con el fin de brindar una buena experiencia al cliente.">
    
    <title>Nosotros</title>
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet"  href="public/css/nosotros.css">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <?php require_once("views/layouts/enlaces.php") ?>

</head>
<body>
<?php	require_once("views/layouts/navbar.php")?>
<main class="main">
    <div class="back">
        <section class="about container">
            <figure class="about__picture">
                <img src="public/nosotros/logowhite2.webp" class="about__img" alt="logo">
            </figure>
            <div class="about__course">
                <h2 class="title">SOBRE NOSOTROS </h2>
                <div class="form-group col-sm-12 col-xs-12">
                <hr class="hr_black" >
</div>
                <p class="about__paragraph">SOMOS UNA EMPRESA elias CREATIVA DEDICADA A LA DECORACIÓN E ILUMINACIÓN DE AMBIENTES HACIÉNDOLOS ÚNICOS Y DIFERENTES, ADEMÁS NUESTROS PRODUCTOS SON DE EXCELENTE CALIDAD, ÚLTIMA TECNOLOGÍA, Y PERSONALIZADOS A TU GUSTO.</p>
            </div>
        </section>
    </div>

    <div class="back2">
        <section class="about2 container2">

            <div class="about__course2">
                <h2 class="title2 title--border">MISIÓN</h2>
                <hr class="hr_pink">
                <p class="about__paragraph2">HACER REALIDAD LAS IDEAS DE NUESTROS CLIENTES CON NUESTROS PRODUCTOS 
                                    CON LA MEJOR CALIDAD A UN PRECIO IDEAL
                </p>
            </div>

            <figure class="about__picture2">
                <img src="public/nosotros/pexels-nadi-lindsay3.webp" class="about__img2" alt="logo2">
                
                
            </figure>

        </section>
    </div>

    <div class="back3">
        <section class="about3 container3">
            <figure class="about__picture3">
                <img src="public/nosotros/pexels-hussein-altameemi-3960381.webp" class="about__img3" alt="logo3">
            </figure>
            <div class="about__course3">
                <h2 class="title3 title--border">VISIÓN</h2>
                <hr class="hr_black">
                <p class="about__paragraph3">SER LA EMPRESA QUE EXPRESE INNOVACIÓN Y CREATIVIDAD EN EL MUNDO DE LA PUBLICIDAD,
                                             BUSCANDO EVOLUCIONAR EN NUESTROS PROCESOS IMPLEMENTANDO LA TECNOLOGÍA MAS EFICIENTE</p>
                   
            </div>

        </section>
        <div class="titulo2">
            <h2>“CON YUNTAS ES MEJOR ”</h2>
        </div>
    </div>
    
    </main>

    <?php require_once("views/layouts/footer.php") ?>
</body>
</html>