<?php
include("bdd.php");




class Reservation extends Bdd {
	private $bdd = "";

	function get_reservations_utilisateur($id_utilisateur)
	{
		$stmt = "SELECT * FROM reservations WHERE id_utilisateur = ? AND date > CURRENT_DATE";
		return $this->request($stmt, [$id_utilisateur]);
	}



	function add_reservation($args)
	{
		$verif = "SELECT * FROM reservations WHERE id_utilisateur = ? AND date = ?";
		$check_verif =  $this->pdo->prepare($verif ) ;
		$check_verif->execute([$args[0], $args[2]]);
		$check_verif = $check_verif->fetchAll(PDO::FETCH_ASSOC);
		if(empty($check_verif))
		{
			$stmt = "INSERT INTO `reservations`(`id`, `id_utilisateur`, `commentaire`, `valide`, `date`) VALUES(NULL, ?, ?, 0, ? )";
			$this->pdo->prepare($stmt)->execute($args);

			if($stmt)
			{	
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
}

$res = new Reservation();
var_dump($res->add_reservation([10,"le comm", "2020-06-18"]));

?>
