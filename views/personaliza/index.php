<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="<?=URL?>public/css/presupuesto.css">
      <meta name="description" content="En Yuntas Producciones te brindamos la oportunidad que personalizes tu producto. Contactanos y te daremos la informaci®Æn necesaria">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Personaliza</title>

    <style>
        .container-xxl{
            background-color: #df02f1;
            height: 150px;
        }
       .img-d{
        width: 200%;
        height: 350px;
        border-radius: 10px;
       

       }
       p1{
           color: rgb(181 53 244);
           width: 200px;
       }
       h2{
        color: rgb(181 53 244);
       }
       .texto-color{
           color: #fff;
       }
       .fondo-color{
           background-color: rgb(0 2 27);
           
       }
       .nobackground{
           background-image:none;
       }
       .ancho{
           width: 100%;
       }
       @media (min-width: 1024px) { 
            .ancho{
                width: 75%;
            }
        }
        
    </style>
<?php require_once("views/layouts/enlaces.php") ?>
</head>

<body class="fondo-color nobackground">
    <?php require_once("views/layouts/navbar.php") ?>

    
    <header class="container-xxl justify-content-center">
        
        <h1 class="text-light mb-0 p-5 ">PERSONALIZA TU PRODUCTO</h1>
    
    </header>
    
    <div id="carouselExampleIndicators" class="carousel slide ancho w-md-50 px-3 py-5 mx-auto" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/personaliza/Harry-Styles.png" style="filter: drop-shadow(5px 5px 24px #9E1AE0);border-color:rgb(181 53 244);border-width: 3px;border-style: solid; " class=" img-d d-block w-50 mx-auto mb-3" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/personaliza/billie.png" style="filter: drop-shadow(5px 5px 24px #9E1AE0);border-color:rgb(181 53 244);border-width: 3px;border-style: solid; " class="img-d d-block w-50 mx-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/personaliza/tyler.png" style="filter: drop-shadow(5px 5px 24px #9E1AE0);border-color:rgb(181 53 244);border-width: 3px;border-style: solid; " class="img-d d-block w-50 mx-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button><br>
</div>
       <div class="container">
       <div class="">
            <h1 class="texto-color fw-bold">SI QUIERES PERSONALIZAR EL TUYO</h1>
            <h2 class="fw-bold">YUNTASPRODUCCIONES@GMAIL.COM</h2>
            <h1 class="texto-color fw-bold">LL√ÅMANOS AL <p1 class="fs-2 fw-bold">912849782</p1> O COMPLETA EL SIGUIENTE FORMULARIO</h1>
        </div>
        <div class="p-2">

            <form  class="row" action="<?php echo constant('URL')?>enviar_prueba" method="post" class="formulario">

            
            <div class="col-12 col-md-6  p-5" >
                <label for="nombre" class="form-label texto-color fw-bold"><h3>NOMBRE</h3></label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="nombre">
                </div>

                <div class="col-12 col-md-6  p-5" >
                <label for="email" class="form-label texto-color fw-bold"><h3>EMAIL</h3></label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>

                <div class="col-12 col-md-6 p-5" >
                <label for="telefono" class="form-label texto-color fw-bold"><h3>TELEFONO</h3></label>
                <input type="text" class="form-control" id="telefono" aria-describedby="emailHelp" name="telefono">
                </div>

                <div class="col-12 col-md-6 p-5" >
                <label for="asunto" class="form-label texto-color fw-bold"><h3>ASUNTO</h3></label>
                <input type="text" class="form-control" id="asunto" aria-describedby="emailHelp" name="asunto">
                </div>

                <div class="col-12 p-5 " >
                <label for="mensaje" class="form-label texto-color fw-bold"><h3>MENSAJE</h3></label>
                <textarea  rows="6" class="form-control w-100" id="mensaje" cols="135" name="mensaje"></textarea>
                </div>
                <input type="submit" style="color: #fff; background-color:rgb(181 53 244);" class="btn w-25  my-3 d-block mx-auto" value="enviar">
            </form>


    </div>
       </div>
    
     
        
    
    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>