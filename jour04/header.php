<?php
	$stmt = new PDO("mysql:host=localhost;dbname=bigjob", "root", "");

	session_start();
	if(isset($_SESSION["id"]))
	{
		$deco = "<a href='index.php?deco=true' class='h4 text-white col-lg-6 col-sm-12 text-right  align-self-center m-0 p-1 justify-self-end'>Deconnexion</a>";
	}
	else
	{
		$deco = "";
	}

	if(isset($_SESSION["admin"]))
	{
		$admin = "<a href='admin.php' class='h4 text-white m-2 justify-self-end'>Admin</a>";
	}
	else
	{
		$admin = "";
	}

	if(isset($_GET["deco"]))
	{
		session_destroy();
		header("location:index.php");
	}

?>
<nav class='navbar navbar-light  bg-info align-item-center justify-content-around row p-1 w-100 m-0'>
	<div class='justify-content-start col-6 row row-cols-2 p-0' style='min-width:15em;'>
		<a href='index.php' class='navbar-brand m-0 col-2 p-0 ' >
			<img src='css/images/assets/logo.png' width='75' height='50' />
		</a>
		<p class='h4 text-white  align-self-center m-0 p-0 col-10' style='min-width:13em;'>LaPlateforme_ Covid edition</p>
	</div>
	
	<div class=' row col-5 justify-content-end p-0' >
		<?= $admin ?>
		<?= $deco ?>
	</div>
</nav>





