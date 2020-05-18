<?php
$pdo = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");

if(isset($_GET["function"]) || isset($_POST["function"]))
{
	$function = $_POST["function"]??$_GET["function"];

	switch($function)
	{
		case "is_logged":
			if(isset($_SESSION["id"]))
			{
				echo json_encode(["res"=>true , "id" => $_SESSION["id"]]);
			}
			else
			{
				echo json_encode(["res"=>true]);
			}
		break;
	}
}


?>
