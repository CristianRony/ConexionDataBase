<?php 
	require_once("autoload.php");

	$objUsuario = new Usuario();

	//Insertar usuario
	//$insert = $objUsuario->insertUsuario("Cristian ROny",74373406,"cyaguno@unsa.edu.pe");
	//echo $insert;
	//
	//Estrae todos los registros
	$users = $objUsuario->getUsuarios();
	print_r("<pre>");
	print_r($users);
	print_r("</pre>");

	$updateUser = $objUsuario->updateUser(4,"Juan Perez",74373400,"juanperez@unsa.edu.pe");
	echo $updateUser;

	$user = $objUsuario->getUser(4);
	print_r("<pre>");
	print_r($user);
	print_r("</pre>");

	$delete = $objUsuario->deluser(3);
	echo $delete;
 ?>