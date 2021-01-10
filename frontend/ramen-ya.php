<?php
 require_once('../php_libraries/bd.php');
 $ofertas = selectOfertaByRestaurante(2);
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramen-Ya Hiro - Recomerçem</title>
    <style>
      body{
     font-family: "Arial"; 
     }
     
     </style>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/recomercem.css">
    <link rel="stylesheet" href="../style/cssLogIn.css">
    <link  rel="icon"   href="../img/iconobirra.png" type="image/png" />
</head>
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id = "textTituloNav">
      <img src="../img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
      Recomerçem
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nuestra selección
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Bar 1</a>
            <a class="dropdown-item" href="#">Bar 2</a>
            <a class="dropdown-item" href="#">Bar 3</a>
            <a class="dropdown-item" href="#">Bar 4</a>
          </div>
        </li> -->

      <li class="nav-item">
        <a class="nav-link" href="../frontend/baresRes.php">Nuestra selección</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../frontend/juegos.php">Juegos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin</a>
      </li>
    </ul>

    <div>
      <img src="../img/user.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy">
      <div class="btn-group dropleft ml-3">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Cuenta
          </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Iniciar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
              <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Mi cuenta</a>
          </div>
        </div>
  </div>
</nav>
<!-- -----------------------------------------BODY----------------------------------------------------------------------- -->   
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img src="../img/ramen.png" width="80%" height="90%" class="imagenTienda"/>
		</div>
		<div class="col-md-6">
            <div class="card cartaPocha">
                <div class="card-header">
                  Ramen-ya Hiro
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p> La cocina de Ramen-Ya Hiro es como un tren de vapor, 
                        con su triple ebullición perpetua. El otro lado de la barra hierve con los clientes sorbiendo caldos
                        que han pasado diez horas a fuego lento durante la noche. El dueño especifica que solo hacen tres variedades de ramen porque quieren
                        especializarse en calidad y rapidez. El menú presenta las recetas clásicas de ramen: soja (con un caldo de pollo y cerdo, con salsa de soja), 
                        miso (lo mismo pero con miso en lugar de soja) y mariscos. Los fideos caseros (mira la máquina al final de la barra) son una maravilla: 
                        puedes ponerlos en tu plato y girarlos alrededor de tus palillos con fuerza hasta que el caldo se escape y todavía estén perfectamente elásticos. </p>
                    <footer class="blockquote-footer">/////////Time Out/////////// <a href="#" class="card-link">https://www.timeout.com/barcelona/restaurants/ramen-ya-hiro</a></footer>
                  </blockquote>
                </div>
              </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Menu
						</th>
						<th>
							Ingredientes
						</th>
						<th>
							Precio
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-danger">
						<td>
							1
						</td>
						<td>
							Ramen de Soja
						</td>
						<td>
							Ramen con caldo de pollo, cerdo y marisco con salsa de soja.
						</td>
						<td>
							11,20 &#8364
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							2
						</td>
						<td>
							Ramen de Miso
						</td>
						<td>
							Ramen con caldo de pollo y cerdo, con salsa de miso.
						</td>
						<td>
							11,20 &#8364
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							3
						</td>
						<td>
							Ramen de Mariscos
						</td>
						<td>
							Ramen con caldo de chirlas y cobertura de marisco del mediterráneo.
						</td>
						<td>
							10,80 &#8364
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							4
						</td>
						<td>
							Tsukemen
						</td>
						<td>
							Fideos fríos con cha shu, bonito seco y lima.
						</td>
						<td>
							11,20 &#8364
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							5
						</td>
						<td>
							Hiyashi Chuka
						</td>
						<td>
                            Fideos ramen fríos con sha shu, pepino, tomate, brotes de soja y huevo, aliñado con una vinagreta refrescante.
						</td>
						<td>
							11,20 &#8364
						</td>
                    </tr>
                    <tr class="table-warning">
						<td>
							6
						</td>
						<td>
							Arroz Blanco
						</td>
						<td>
                            Bol de arroz blanco.
						</td>
						<td>
							2,20 &#8364
						</td>
                    </tr>
                    <tr class="table-warning">
						<td>
							7
						</td>
						<td>
							Cha Shu Don
						</td>
						<td>
                            Bol de arroz con panceta de cerdo guisada y cebolleta con salsa
						</td>
						<td>
							7,50 &#8364
						</td>
                    </tr>
                    <tr class="table-success">
						<td>
							8
						</td>
						<td>
							Onigiri
						</td>
						<td>
                            Onigiri cin ciruela encurtida
						</td>
						<td>
							3,90 &#8364
						</td>
                    </tr>
                    <tr class="table-success">
						<td>
							9
						</td>
						<td>
							Ensalada de Wafu
						</td>
						<td>
                            Ensalada al estilo japonés, alga wakame y sésamo
						</td>
						<td>
							7,20 &#8364
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
            <img src="../img/ramenSitio.PNG" width="80%" height="90%" class="imagenMapa img-thumbnail">
            <a href="https://www.google.com/maps/place/Ramen-ya+Hiro/@41.399648,2.164968,15z/data=!4m5!3m4!1s0x0:0x2fbae62d2688d29d!8m2!3d41.399648!4d2.164968" class="btn" style="background-color: #F3B63E; color: black;">Ubicaciones</a>
		</div>
	</div>
</div>

<div class="card m-3" style="height: 440px;" >
  <div class="row g-0">
    <div class="container">
      <div class="card-body">
        <h3 class="card-title text-center " style="color: #e43b3e;">Ofertas disponibles</h3>
        
        <div class="container">
            <table class="table">
              <tr>
                <th style="color: #F3B63E;">Oferta</th>
                <th style="color: #F3B63E;">Puntos necesarios</th>
              </tr>

                <?php foreach ($ofertas as $oferta) {?>

                    <tr>
                      <td><?php echo $oferta['nombre'] ?></td>
                      <td><?php echo $oferta['puntos'] ?></td>
                    </tr>

              <?php } ?>

              
            </table>
          </div>


      </div>
    </div>
  </div>
</div>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem.git" class="badge badge-primary">GitHub</a>
            <a href="#" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2020-2021 - Proyecto 1 ABP - Centre d’Estudis Politècnics<br> Fran Soriano Román · Hector Garcia Lopez · Illya Samoylenko Barabus · Daniel Moreno Fernandez </p>
      
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>