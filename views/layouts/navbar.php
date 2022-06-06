

<header class="bg-primary bg-dark py-0.5 ">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<style>
    .t_letra{
        font-size: 1.5rem;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
	<img class="logo"  width="200" height="100" alt="logo yuntas" src="public/productos_neon_led/logowhite.webp">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link active text-white text-uppercase t_letra" aria-current="page" href="main">Home</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link text-white text-uppercase t_letra" href="nosotros">nosotros</a>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white text-uppercase t_letra" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            productos
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white text-uppercase t_letra" href="neon_led">neón led</a></li>
            <!--<li><a class="dropdown-item text-white text-uppercase" href="paneles_led">paneles led</a></li>-->
			<li><a class="dropdown-item text-white text-uppercase t_letra" href="pantallas_led">pantallas led</a></li>
			<li><a class="dropdown-item text-white text-uppercase t_letra" href="efectos3d">efectos 3d led</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
		<li class="nav-item px-2">
    <a class="nav-link text-white text-uppercase t_letra" href="<?php echo constant('URL') ?>personaliza">personaliza</a>
        </li>
		<li class="nav-item px-2">
          <a class="nav-link text-white text-uppercase t_letra" href="como_llegar">¿cómo llegar?</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

	
	</header>

<!-- <script>
	document.getElementById("productos").addEventListener("click", function(){document.getElementById("sub-menu").classList.toggle("d-none");});
</script> -->