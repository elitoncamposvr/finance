<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/projects/financas/");
	$config['dbname'] = 'financas';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	
}
if(ENVIRONMENT == 'production'){
	define("BASE_URL", "https://enfance.7upweb.com.br/areaadmin/");
	$config['dbname'] = 'u206120604_enfance';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'u206120604_enfance';
	$config['dbpass'] = 'mIJu05e/00';
	
}

global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}