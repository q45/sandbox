<?php	
	
	include_once "class.class.php";



	$object = new User;

	$object->password = "of the world";
	$pass =  $object->get_password();



	echo $pass;

?>