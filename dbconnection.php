<?php
	require "vendor/autoload.php";

	$m = new MongoDB\Client("mongodb://localhost:27017");
	$db = $m->id_app;
	$collection = $db->Student_registration;
?>