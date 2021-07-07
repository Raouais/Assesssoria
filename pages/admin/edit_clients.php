<?php

if(!isset($session->username)) {
	header("Location: index.php?p=home");
}


$dao->setTable("clients");


$clients = $dao->all();



?>