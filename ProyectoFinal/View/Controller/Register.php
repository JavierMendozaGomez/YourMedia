<?php
require '../../SA/TransferUser.php';
require '../../SA/SAUser.php';
	 session_start();
	$tUsuario = new TransferUser();
	$tUsuario->setEmail($_POST["email"]);
	$tUsuario->setPassword($_POST["contrasena"]);
	$tUsuario->setNick($_POST["nick"]);
	if($_POST["newOffers"] == "on")
		$tUsuario->setNewOffers(TRUE);
	else	
		$tUsuario->setNewOffers(FALSE);

	$tUsuario->setImage($_POST["urlImgPerfil"]); 
	if($tUsuario->getImage()=="")
		$tUsuario->setImage("http://www.cyclogen.com/wp-content/uploads/2014/07/perfil-anonimo-160x160.jpg");
	$tUsuario->setCity($_POST["city"]);
	$tUsuario->setPostalCode($_POST["postalCode"]);
	registerUserSA($tUsuario);
	$_SESSION['nick'] = $tUsuario->getNick();
	$_SESSION['urlImg'] = $tUsuario->getImage();
	$_SESSION['myPassword'] = $tUsuario->getPassword();
	$_SESSION['email'] = $tUsuario->getEmail();
	$_SESSION['city'] = $tUsuario->getCity();
	$_SESSION['newOffers'] = $tUsuario->getNewOffers();
	header("Location: ../Inicio/index.php");
?>