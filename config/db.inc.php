<?php 

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_DIR);
$dotenv->load();

// Retrive env variable
$userName = $_ENV['USER_NAME'];

echo $userName; //jfBiswajit

$database['development'] = array(
		'username' => 'nipponpaint',
		'password' => 'NipPon()##Paint',
		'host'     => 'localhost',
		'database' => 'ydaph'
	);

$database['production'] = array(
		'username' => 'ydaph',
		'password' => '8rkljCOvtBKNhKTo',
		'host'     => 'localhost',
		'database' => 'ydaph'
	);

	
