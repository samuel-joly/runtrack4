<?php

	if(isset($_POST["login"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];

		$prep = $stmt->prepare("SELECT password, id FROM utilisateurs WHERE email=?");
		$prep->execute(array($email));
		$usr = $prep->fetch(PDO::FETCH_ASSOC);
		if(!empty($usr))
		{
			if(password_verify($password, $usr["password"]))
			{
				$_SESSION["id"] = $usr["id"];
				
				$admin = $stmt->prepare("SELECT * FROM admin WHERE id_utilisateur = ?");
				$admin->execute(array($usr["id"]));
				$admin = $admin->fetch(PDO::FETCH_ASSOC);
				if(!empty($admin))
				{
					$_SESSION["admin"] = $admin["id"];
				}
				header("location:index.php");
			}
		}
	}

	if(isset($_POST["register"]))
	{
		$error = [];
		$data = [];
		foreach($_POST as $input=>$value)
		{
			if(empty($input))
			{
				$error[] = "Tous les champs doivent etres remplits";
			}
			else
			{
				switch($input)
				{
					case "email":
						$check = $stmt->prepare("SELECT * FROM utilisateurs WHERE email = ?");
						$check->execute(array($value));
						$check = $check->fetch(PDO::FETCH_ASSOC);

						if(empty($check))
						{
							$data[] = $value;
						}

					break;

					case "password":
						if(strlen($value) < 8)
						{
							$error[] = "Mot de passe trop court";
						}
						else
						{
							if(!empty($_POST["Cpassword"]))
							{
								if($_POST["Cpassword"] == $value)
								{
									$psw = password_hash($value, PASSWORD_BCRYPT);
									$data[] = $psw;
								}
							}
						}
													
					break;
				}

				
			}
		}

		if(count($data) == 2)
		{
			$newUsr = $stmt->prepare("INSERT INTO utilisateurs(`id`,`email`,`password`)
					VALUE(NULL, ?, ?)");
			$newUsr->execute($data);
		}
	}


?>

<div class='row  align-items-center p-3 d-inline ' id='connChoice'>
	<div id='showLog' class='col-11 justify-content-center align-items-center p-0 m-auto'>
		<p class='h4 text-center' >Connectez vous</p>
		<p class='text-center'>Et réservez un ou plusieurs jour en cliquant sur l'agenda </p>
	</div>

	<div class='separatorS'></div>

	<div id='showSign' class='col-11 justify-content-center align-items-center p-0 m-auto'>
		<p class=' h4 text-center' >Inscrivez vous</p>
		<p class='text-center'>Pour pouvoir réserver un créneau dans les locaux de la plateforme</p>
	</div>
</div>

<form action='' method='post' id='connect' class='rounded form-group w-100 m-0 d-none mt-4'>
	<div class='row justify-content-between'>
		<p class='h4 text-center mb-3 container col-11'>Connectez vous</p>
	</div>
	<div class='form-group col-12 mb-3 row justify-content-center m-0'>
		<label for='email' class='text-center p-0'>Email
			<input type='email' class='form-control' name='email' >
		</label>
	</div>

	<div class='form-group col-12 mb-3 row justify-content-center m-0'>
		<label for='password' class='p-0 text-center'>Mot de passe
			<input type='password' class='form-control' name='password'>
		</label>
	</div>

	<div class='container row col-12 justify-content-center align-self-center m-0 p-0'>
		<input type='submit' class='btn btn-primary col-5 m-1' value='Connexion' name='login'/>
		<input type='reset' class='btn btn-warning col-5 m-1 goindexbtn' value='Retour'/>
	</div>
</form>


<form action='' method='post' id='signup' class=' rounded form-group width-100 d-none'>
	<div class='row justify-content-between'>
		<p class='h4 text-center col-12'>Inscrivez vous</p>
	</div>

	<div class='form-group col-12 mt-3 row justify-content-center m-0 text-center'>
		<label for='email' >Email
			<input type='email' class='form-control' name='email' area-describedby='emailI'>
			<small id='emailI' class='form-text text-muted '>Vous devez avoir un email <b><u>laplateforme.io</u></b>.</small>
		</label>
	</div>

	<div class='form-group col-12 row justify-content-center m-0 text-center'>
		<label for='password'>Mot de passe
			<input type='password' class='form-control' name='password' 
				area-describedby='pswI'>
			<small id='pswI' class='form-text text-muted'>
				Doit contenir au moins 8 caracteres.
			</small>
		</label>
	</div>


	<div class='form-group col-12 row justify-content-center mb-3 m-0 text-center'>
		<label for='Cpassword'>Confirmation mot de passe
			<input type='password' class='form-control' name='Cpassword'
			area-describedby='pswC'>
			<small id='pswC' class='form-text text-muted'>
				Les mots de passes doivent correspondre.
			</small>
		</label>
	</div>

	<div class='container row col-12 justify-content-center m-0 p-0'>
		<input type='submit' class='btn btn-primary col-5 m-1' value='Inscription' name='register'/>
		<input type='reset' class='btn btn-warning col-5 m-1  goindexbtn' value='Retour'/>
	</div>
</form>
