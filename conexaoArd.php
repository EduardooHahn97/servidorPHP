<?php	

	/*header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	header('Content-Type: application/json; charset=utf-8');*/
	
	$username = "b63fbaa8783c7a";
	$password = "dd8c51c3";
	$conn = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_e38dc7531122647', $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
?>