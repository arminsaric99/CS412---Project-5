<?php
try{
 $db = new mysqli("localhost", "root", "", "contact_db");
} 	catch (Exception $exc){
	echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$is_insert = $db -> query("INSERT INTO 'data' ('name','email','message')
VALUES('$name','$email','$message')");

if($is_insert == TRUE){
	echo "<h2> Hvala Vam, vaša poruka je poslana</h2>";
	exit();
}
}



?>