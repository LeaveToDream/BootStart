<?php

	// Chemins à utiliser pour accéder aux vues/modeles/controleur
	define('CHEMIN_CONTROL','modules/'.$module.'/'.$module.'.php');
	define('CHEMIN_VUE',    'modules/'.$module.'/'.$module.'_vue.php');
	define('CHEMIN_MODELE', 'modules/'.$module.'/'.$module.'_modele.php');

	// Identifiants pour la base de données.
	define('SQL_DSN',      'mysql:host=localhost;dbname=tdp;charset=utf8');
	define('SQL_USERNAME', 'root');
	define('SQL_PASSWORD', '');

	// Definition de $today, contenant la date actuel
	$today = date("Y-m-d");

	// Défintion du titre du site, apparaissant dans les onglet de navigateur
	$title = "New Project";

	// Défintion des méta-tags, tel qu'ils apparaitrons en entête, pour le robot de chez GooGle
	$metacontent = "new, project, new project";

	// Defintion de $url

	if(isset($_GET['page']))
	{
		$url = ("index.php?page=".$_GET['page']);
	}
	else $url = ("index.php?page=home");

	function secu($p)
	{
		return htmlspecialchars($p);
	}
