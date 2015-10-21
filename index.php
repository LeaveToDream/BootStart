<?php
	// Inclusion et initialisation de code"invisible"
	session_start();

	if (!isset($_GET['page']))
	{
		$module = "home" ;
	}
	else
	{
		$module = htmlspecialchars($_GET['page']);
	}
	// echo phpinfo();
	// Inclusion de différentes bibliotèques, et des constante pour le bon fonctionnement de ses dernieres
	require_once('global/config.inc.php');
	require_once('global/libs/pdo2.lib.php');
	require_once('global/libs/image.lib.php');

	if(isset($_GET['log_out']) AND $_GET["log_out"] == true)
	{
		session_destroy();
		header("Location:".$url."");
	}
	// Inclusion des parties du code "visible"
	include('global/head.php');

	if (isset($module) && file_exists(CHEMIN_CONTROL))
	{
		include(CHEMIN_CONTROL);
	}
	elseif (!file_exists(CHEMIN_CONTROL))
	{
		include('modules/home/home.php');
	}

	include('global/foot.php');
?>
