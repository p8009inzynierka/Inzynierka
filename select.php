<?php

/* Plik potrzebny do sprawdzania dostepnosci domeny */
include_once 'dbconfig.php';
$sth = $db_con->prepare("SELECT domain, paid FROM domeny WHERE domain = :domain");
$sth->execute(array(
	'domain' => $_POST['domain']
));

header('Content-Type: application/json');
echo json_encode($sth->fetch());
