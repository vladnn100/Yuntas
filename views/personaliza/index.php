<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="<?=URL?>public/css/presupuesto.css">
      <meta name="description" content="En Yuntas Producciones te brindamos la oportunidad que personalizes tu producto. Contactanos y te daremos la informaci��n necesaria">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Personaliza</title>

    <style>
        .container-copy{
            background-color: #df02f1;
            height: 150px;
            display:flex;
    justify-content: center;
    align-items: center;
        }
        .underline{
            text-decoration:underline;
        }
        .text-light{
             
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
           background-color: #fff;
           
       }
       .nobackground{
           background-image:none;
       }
       .ancho{
           width: 100%;
       }
       .container__gallery{
           margin:0 auto;
           margin-top:50px;
           margin-bottom:50px;
           max-width:1200px;
           display:flex;
         width:90%;
            justify-content: space-evenly;
            gap:50px
       }
       .container__form{
           width:90%;
            display:flex;
            justify-content: space-evenly;
             margin:0 auto;
           margin-top:50px;
           margin-bottom:50px;
           max-width:1200px;
       }
       .form__picture{
           width:45%;
       }
       .form__control{
           width:45%;
           text-align:left;
       }
       .form__imgg{
          width:100%;
           height:100%;
       }
       .gallery__picture{
           width:30%;
       }
       .gallery__img{
           width:100%;
           height:100%;
           border-radius: 10px;
           border: 3px solid #df02f1;
       }
       .form-control{
           background-color: #39c !important;
           border:none !important;
           border-radius:0 !important;
       }
       .form-label{
           padding:0 !important;
           padding-top:20px !important;
       }
       .text--color{
         color: #000!important;
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

    
    <header class="container-copy justify-content-center">
        
        <h1 class="text-light mb-0 p-5 ">PERSONALIZA TU <br> PRODUCTO</h1>
    
    </header>
    
   
        <div class="container__gallery">
            <figure class="gallery__picture"> <img class="gallery__img" src="public/personaliza/Harry-Styles.jpg" alt="imagen neon"></figure>
            <figure class="gallery__picture"> <img class="gallery__img" src="public/personaliza/billie.jpg" alt="imagen neon"></figure>
            <figure class="gallery__picture"> <img class="gallery__img" src="public/personaliza/tyler.jpg" alt="imagen neon"></figure>
        </div>
       <div class="container">
       <div class="">
            <h1 class="texto-color fw-bold text--color">SI QUIERES PERSONALIZAR EL TUYO</h1>
            
            <h1 class="texto-color fw-bold text--color">LLÁMANOS AL <p1 class="fs-2 fw-bold underline text--color">912849782</p1 class="text--color"> O COMPLETA EL SIGUIENTE FORMULARIO</h1>
        </div>
       
       </div>
         <div class="container__form">
              <figure class="form__picture"> <img class="form__imgg" src="public/personaliza/Harry-Styles.jpg" alt="imagen neon"></figure>
              <form  class="form__control row" action="<?php echo constant('URL')?>enviar_prueba" method="post" class="formulario">
                   <label for="nombre" class="form-label texto-color fw-bold text--color"><h3>NOMBRE*</h3></label>
                  <input type="text" class="form-control form__input" id="nombre" aria-describedby="emailHelp" name="nombre">
                   <label for="email" class="form-label texto-color fw-bold text--color"><h3>EMAIL*</h3></label>
                 <input type="email" class="form-control form__input" id="email" aria-describedby="emailHelp" name="email">
                  <label for="telefono" class="form-label texto-color fw-bold text--color"><h3>TELEFONO*</h3></label>
                <input type="text" class="form-control form__input" id="telefono" aria-describedby="emailHelp" name="telefono">
                <label for="mensaje" class="form-label texto-color fw-bold text--color"><h3>MENSAJE*</h3></label>
                <textarea  rows="6" class="form-control w-100" id="mensaje form__input" cols="135" name="mensaje"></textarea>
                 <input type="submit" style="color: #fff; background-color:rgb(181 53 244);" class="btn w-25  my-3 d-block mx-auto" value="enviar">
              </form>
         </div>
    
     
        
    
    <?php require_once("views/layouts/footer.php") ?>
</body>

</html>