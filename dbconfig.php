<?php


	$db_host = "serwer1761925.home.pl";
	$db_name = "24151948_0000001";
	$db_user = "24151948_0000001";
	$db_pass = "inzynierka13";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>