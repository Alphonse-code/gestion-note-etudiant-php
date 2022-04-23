<?php
$dalTablematiere = array();
$dalTablematiere["idmatriere"] = array("type"=>3,"varname"=>"idmatriere");
$dalTablematiere["codematiere"] = array("type"=>200,"varname"=>"codematiere");
$dalTablematiere["nommatiere"] = array("type"=>200,"varname"=>"nommatiere");
$dalTablematiere["coeff"] = array("type"=>3,"varname"=>"coeff");
	$dalTablematiere["idmatriere"]["key"]=true;

$dal_info["gestionetudiant_at_localhost__matiere"] = &$dalTablematiere;
?>