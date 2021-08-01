<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://inteco.pc/novo/");
	$config['dbname'] = 'inteco2018';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://www.inteco.com.br/novo/");
	$config['dbname'] = 'intecoc_inteco2018';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'intecoc_admin';
	$config['dbpass'] = 'Admin3b2a1.';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);