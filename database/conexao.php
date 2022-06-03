<?php
	$servidor="localhost";
	$banco="mamada";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>