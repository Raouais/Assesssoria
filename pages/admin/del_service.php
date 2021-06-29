<?php 

if(!isset($session->username) && empty($_GET['id'])) {
	header("Location: index.php?p=home");
}

$dao->setTable("services");

$dao->delete($_GET['id']);

header("Location: index.php?p=home");
?>




