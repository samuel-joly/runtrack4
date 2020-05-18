<!doctype html>

<html lang='fr'>

	<head>
		<meta charset='utf-8'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel='stylesheet' href='css/stylesheet.css'/>
			<link rel='stylesheet' href='css/agenda.css'/>
	</head>

	<body>
		<header class='container-fluid m-0 p-0'>
			<?php
				include("header.php");
			?>
		</header>


		<main class='row container-fluid mt-4 justify-content-center p-0 m-0'>

				<div class='row col-12 justify-content-around p-0 mt-4'>
					<div class='col-lg-7 col-md-12 mb-sm-4 row m-0 p-0' id-'agendaZone'>
						<?php
							include("agenda.php");
						?>
					</div>

					<div class='col-lg-4 col-sm-11 bg-light border p-3  ' id='connZone'>
					<?php
						if(isset($_SESSION["id"]))
						{
							include("infosReservation.php");
						}
						else
						{
							include("connInscr.php");
						}
					?>
					</div>
				</div>

				<div class='row col-12 justify-content-around p-0 '>

					<div class='col-lg-7 col-sm-11 mb-3 bg-light border p-0 row' style='height:15em;overflow-y:hidden'>
					<?php
						if(isset($_SESSION["id"]))
						{
							
						}
						else
						{ ?>
							<div class='row container m-0 p-0 col-12'>
								<img src='css/images/assets/secu.png' id='imgSecu' class='col-lg-8 col-sm-8 p-0'/>
								<div class='col-4 col-sm-4 mt-lg-2 container-fluid'>
									<p class='h3 text-center'>Regles Covid</p>
									<ul class='m-0 p-0 text-left'>
										<li class='text-center'><b>L'accès n'est autorisé que si le nombre de personnes est inférieur à 15.</b></li>
										<li>-Vous désinfecter les mains avec du gel hydroalcoolique</li>
										<li>-Mettre un masque</li>
										<li>-Prendre des lingettes désinfectantes</li>
										<li>-Travailler seul à votre table</li>
										<li>-Rester à plus d'un mettre des autres </li>
									</ul>
								</div>
							</div>
					<?php	}

					?>
					</div>

					<div class='col-lg-4 col-sm-11 bg-light border p-0 row' style='height:15em;'>
						<div class='row col-12 m-0 p-0'>
						<?php
							if(isset($_SESSION["id"]))
							{ ?>
							
								<p class='h3 text-center col-12'>Mes réservations</p>
						<?php	}
							else
							{ ?>
								<p class='col-12 h5 text-center'>Vous devez etre connecté pour acceder aux réservations</p>

						<?php	}	?>
						</div>
					</div>

				</div>


		</main>



		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src='js/script.js'></script>
		<footer>
		
		</footer>

	</body>
</html>

