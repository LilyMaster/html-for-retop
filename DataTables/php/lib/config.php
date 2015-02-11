<?php
//if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

/*
 * DB connection script for Editor
 * Created by http://editor.datatables.net/generator
 */

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');

$localIP = getHostByName(getHostName());

if (strpos($localIP, "192") === false){
	$sql_details = array(
		"type" => "Mysql",
		"user" => "bornform_useris",
		"pass" => "6gv_n(M,)kAA4GBi",
		"host" => "localhost",
		"port" => "",
		"db"   => "bornform_duombaze",
		"dsn"  => "charset=utf8"
	);
} else {
	/*
 * Edit the following with your database connection options
 */
	$sql_details = array(
		"type" => "Mysql",
		"user" => "root",
		"pass" => "6gv_n(M,)kAA4GBi",
		"host" => "localhost",
		"port" => "",
		"db"   => "bornform_duombaze",
		"dsn"  => "charset=utf8"
	);
}


