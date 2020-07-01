<?php 
  session_start();
  if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
    header("Location:login.php");
    exit;
  }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Hidros</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<link rel="stylesheet" href="assets/css/manutencao.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>


		<!-- fullcalendar -->
		<link rel="stylesheet" href="assets/css/fullcalendar.min.css" />
		<script src="assets/js/fullcalendar.min.js"></script>
		<script src="assets/js/pt-br.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="usuario.php">Hidros</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="usuario.php">Home</a></li>
							<li>
								<a href="#">Registros</a>
								<ul>
									<li>
										<a href="#">Histórico</a>
										<ul>
											<li><a href="#">Energia Gerada</a></li>
											<li><a href="#">Água Consumida</a></li>
											<li><a href="manutencao.php">Manutenção</a></li>
										</ul>
									</li>
									<li><a href="dispositivo.php">Dispositivo</a></li>
									<li><a href="hidraulica.php">Hidráulica</a></li>
									<li><a href="energia.php">Energia</a></li>
								</ul>
							</li>
							<li><a href="perfil.php">Perfil</a></li>
							<li><a href="assets/php/sair.php" class="button primary">Sair</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="one" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Manutenção</h2>
							<p>Monitore a manutenção</p>
						</header>

						<!-- calendario -->
						<div class="row">
							<div class="col"></div>
							<div class="col-12 col-12-medium"><div id="calendario"></div></div>
							<div class="col"></div>
						</div>

					</div>
				</div>

			<script type="text/javascript">
				$(document).ready(function(){
					$('#calendario').fullCalendar({

						dayClick: function(date, jsEvent, view){
							alert("Dia selecionado:" +date.format());
							alert("Mês selecionado:" +view.name);
							$(this).css('background-color', 'red');
							$("#exampleModalCenter").modal();

						},
						events: 'assets/php/data_manutencao.php',

						eventClick: function(calEvent, jsEvent, view){
							$('#energia').html(calEvent.energ_gerada);
							$('#agua').html(calEvent.agua_consu);
							$("#exampleModalCenter").modal();


						}
					});

				});
			</script>

    			<!-- modal adicionar -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
				  <div class="modal-dialog modal-dialog-centered" role="document" >
				    <div class="modal-content" style="background: rgba(39, 40, 51, 0.965);">
				      <div class="modal-header">
				        <h3>Adicionar</h3>
				        <button type="button" style="color: white;" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div id="energia"></div>
				      	<div id="agua"></div>
				      </div>
				      <div class="modal-footer">
				        <button class="btn btn-success" type="button">Adicionar</button>
				        <button class="btn btn-warning" type="button">Editar</button>
				        <button class="btn btn-danger" type="button">Apagar</button>
				        <button class="btn btn-default" type="button">Cancelar</button>
				      </div>
				    </div>
				  </div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Hidros. Todos os direitos reservados.</li><li>Design: <a>VK</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->		
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	</body>
</html>