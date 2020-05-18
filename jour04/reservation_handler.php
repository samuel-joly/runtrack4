<?php
	$pdo = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");
	include("class/reservation.php");
	$Res = new Reservation();
	
	if(isset($_POST["function"]) || isset($_GET["function"]))
	{
		$function = $_GET["function"]??$_POST["function"];
		
		switch($function)
		{
			case "add_reserv":
				$date = new dateTime($_POST["reserv"][0]);

				$ret = $Res->add_reservation( [$_SESSION["id"], $_POST["reserv"][1], date_format($date,'Y-m-d') ] ) ;

				if($ret)
				{
					echo json_encode(["res"=>true ]);
				}
				else
				{
					echo json_encode(["res"=>false ,"error"=>$ret ]);
				}
			break;

			case "get_reservation":	
				$stmt = $pdo->prepare("SELECT * FROM reservation WHERE id_utilisateur = ? AND date > CURRENT_DATE");
				$stmt->execute(array($_SESSION["id"]));
				$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

				if($reservations)
				{
					echo json_encode(["return"=>true, "data"=>$reservations]);
				}
				else
				{
					echo json_encode(["return"=>false, "error"=>$stmt->errorInfo()]);
				}
			break;

		}
	}

?>
