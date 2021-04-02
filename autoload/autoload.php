<?php 
	session_start();
	require_once __DIR__. '/../libraries/Database.php';
	require_once __DIR__. '/../libraries/Function.php';

	$db = new Database;

	define ("ROOT", $_SERVER['DOCUMENT_ROOT']."/webdienthoai/public/uploads");
 ?>