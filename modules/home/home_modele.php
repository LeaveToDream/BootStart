<?php
	function get_data_present($limit)
	{
		$bdd = PDO2::getInstance();
		$req = "SELECT * FROM page_home";
		if($limit == 1)
		{
			$req = "SELECT * FROM page_home LIMIT 0,1";
		}
		$sql = $bdd -> query($req)or die (print_r($bdd->errorInfo()));;
		$data = $sql -> fetchAll();
		$sql -> closeCursor();
		return $data ;
	}