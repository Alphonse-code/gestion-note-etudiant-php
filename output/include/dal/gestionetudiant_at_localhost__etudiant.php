<?php
$dalTableetudiant = array();
$dalTableetudiant["idetudiant"] = array("type"=>3,"varname"=>"idetudiant");
$dalTableetudiant["matricule"] = array("type"=>200,"varname"=>"matricule");
$dalTableetudiant["noms"] = array("type"=>200,"varname"=>"noms");
$dalTableetudiant["cycle"] = array("type"=>3,"varname"=>"cycle");
$dalTableetudiant["niveau"] = array("type"=>3,"varname"=>"niveau");
$dalTableetudiant["datenais"] = array("type"=>7,"varname"=>"datenais");
	$dalTableetudiant["idetudiant"]["key"]=true;

$dal_info["gestionetudiant_at_localhost__etudiant"] = &$dalTableetudiant;
?>