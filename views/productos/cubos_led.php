<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="En Yuntas Producciones te brindamos nuevas experiencias para publicitar tu negocio. Ventas de Luces,Letreros y Pantallas LED .">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Bungee&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <title>Cubos LED</title>
    <style>
    .contenedor_Principal{
     font-family: 'Bungee', cursive;
        
        height : 75vh;
        background-image: url("public/cubos/3382-cubo-rgb-led-para-ver-el-uso-de-tu-cpu1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        
    }
        @media (min-width: 700px) {
          .contenedor_Principal{
            
            height : 95vh;
          } 
          
        }
		.cortina{
          height: 100%;
          width: 100%;
          
        }
		.whatsapp span{
          border-radius: 50px;
         }
         .a-w{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
		@media(min-width:700px)
		{
			.img_abajo{
			height: 480px;
		}
		
		}
		.title{
		    font-size: 40px;
		}
		.numero{
            width: 300px;
            text-align: center;
            height: 50px;
            margin: auto;
            font-size: 25px;
         }
         .img_abajo{
             border-radius: 30px;
             
         }
         
	

    </style>
    <?php require_once("views/layouts/enlaces.php") ?>
  </head>
  <body>
    <?php	require_once("views/layouts/navbar.php");?>

    <div class="contenedor_Principal d-flex align-items-end justify-cotent-start">
    <div class="cortina d-flex align-items-end">
        <div class="texto_principal p-3 p-md-5 text-white">
            <h1 class="title fw-bold">CUBOS LED</h1>
            
            <div class="whatsapp what_principal my-4 d-flex justify-content-around">
                <a href="https://wa.me/51912849782?text=Hola,%20estoy%20interesado%20en%20los%20Cubos%20Led" class="fs-3 nav-link border text-white bg-info a-w rounded-full d-flex justify-content-center align-items-center "><i class="fa-brands fa-whatsapp d-block"></i></a>
                    <span class="bg-info numero p-2 px-1 border ">912 849 782</span>
            </div>

        </div>
      </div>
    </div>

	<div class="row py-4 px-5 mx-auto d-block container-fluid">
        
            <img class="img_abajo" src="public\cubos\15.jpg" alt="">
                               
             
          </div>

       

	<div class=" row py-4 px-5 mx-auto d-block container-fluid">
        
            <img class="img_abajo" src="public\cubos\Screenshot_1.jpg" alt="">
                               
               
          </div>

   


    

    <?php require_once("views/layouts/enlaces.php") ?>

    <?php require_once("views/layouts/footer.php") ?>
    
  </body>
</html>