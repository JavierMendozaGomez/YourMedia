<?php
function readByName(){

	return false;
}
function registerUserDAO($TUser, $conn){
	$sql = "INSERT INTO USER(email,contrasena,nick,newOffers) VALUES ('".$TUser->getEmail()."', '".$TUser->getPassword()."', '".$TUser->getNick()."', ".$TUser->getNewOffers().")";
	if($conn->query($sql) === TRUE)
		return TRUE;
	else
		return FALSE;
}
function readByIDDAO(){

}
function readUserByEmailDAO( $tUser,$conn){
	try{
	$sql = "SELECT * FROM USER WHERE email = '".$tUser->getEmail()."' FOR update";
	$resultado = $conn->query($sql);
  	$num_filas = $resultado->num_rows;
  	$fila = $resultado->fetch_array(MYSQLI_NUM);
	$resultado->close();
	if($num_filas == 0){
		return null;
	}
	else{
		return new TransferUser($fila[1],$fila[2],$fila[3],$fila[4]);
	}
	}
	catch(Exception $e){
	}

}

function readUserByNickDAO( $tUser,$conn){
	try{
	$sql = "SELECT * FROM USER WHERE nick = '".$tUser->nick() ."' FOR update";
	$resultado = $conn->query($sql);
  	$num_filas = $resultado->num_rows;
  	$fila = $resultado->fetch_array(MYSQLI_NUM);
	$resultado->close();
	if($num_filas == 0){
		return null;
	}
	else{
		return new TransferUser($fila[1],$fila[2],$fila[3],$fila[4]);
	}
	}
	catch(Exception $e){
		
	}

}

function readAllUsersDAO($conn){
	$arrayUsers = array();
 	$sql = "SELECT * FROM USER ";
		if ($conn->multi_query($sql)) {
		    do {
		        if ($resultado = $conn->use_result()) {
		            while ($fila = $resultado->fetch_row()) {
		            	$tUser = new TransferUser($fila[1],$fila[2],$fila[3],$fila[4]);
		            	array_push($arrayUsers,$tUser);
		            }
		            $resultado->close();
		        }
		    } while ($conn->next_result());
		}

	for($i = 0; $i< count($arrayUsers);$i++){
		$arrayUsers[i]->imprime();
	}

}
function deleteUserDAO(){

}
function modifyUserDAO(){

}

?>