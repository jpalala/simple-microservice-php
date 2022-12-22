<?php
/*
 * $development = array(
		'username' => 'simpleauthservice',
		'password' => 'NipPonxxx23Paint',
		'host'     => 'localhost',
		'database' => 'ydaph'
 );*/
//define in config ^

class Database {


	public function connections() {

		$database = get_object_vars($this);
		$connections = array();

		foreach($database as $k => $e) {
			$connections[$k] = "mysql://{$e['username']}:{$e['password']}@{$e['host']}/{$e['database']}";
		}

		return $connections;

	}
	
}

$db = new Database;
$connections = $db->connections();

ActiveRecord\Config::initialize(function($cfg) use ($connections) {
    $cfg->set_model_directory('.');
    $cfg->set_connections($connections);
});
