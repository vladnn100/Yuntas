<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	
<?php	require_once("views/layouts/navbar.php");?>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col border">
    <img src="public/catalogo/holografica1.jpeg" alt="" class=" w-100 h-100">
      
      Column
    </div>
    <div class="col">
        <img src="public/catalogo/holografica2.jpeg" alt="" class=" w-100 h-100">
      Column
    </div> 
    <div class="col bg-secondary">
    <img src="public/catalogo/holografica3.jpeg" alt="" class=" w-100 h-100 ">
     
      Column
    </div>
  </div>
</div>
</body>
<?php require_once("views/layouts/footer.php") ?>

</html>