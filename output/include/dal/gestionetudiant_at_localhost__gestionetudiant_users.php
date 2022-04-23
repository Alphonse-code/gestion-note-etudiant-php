<?php
$dalTablegestionetudiant_users = array();
$dalTablegestionetudiant_users["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablegestionetudiant_users["username"] = array("type"=>200,"varname"=>"username");
$dalTablegestionetudiant_users["password"] = array("type"=>200,"varname"=>"password");
$dalTablegestionetudiant_users["email"] = array("type"=>200,"varname"=>"email");
$dalTablegestionetudiant_users["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTablegestionetudiant_users["groupid"] = array("type"=>200,"varname"=>"groupid");
$dalTablegestionetudiant_users["active"] = array("type"=>3,"varname"=>"active");
	$dalTablegestionetudiant_users["ID"]["key"]=true;

$dal_info["gestionetudiant_at_localhost__gestionetudiant_users"] = &$dalTablegestionetudiant_users;
?>