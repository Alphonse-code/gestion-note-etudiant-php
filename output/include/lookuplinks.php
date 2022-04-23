<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["filiere"]["cycle.filiere"]["edit"] = array("table" => "cycle", "field" => "filiere", "page" => "edit");
	$lookupTableLinks["cycle"]["etudiant.cycle"]["edit"] = array("table" => "etudiant", "field" => "cycle", "page" => "edit");
	$lookupTableLinks["niveau"]["etudiant.niveau"]["edit"] = array("table" => "etudiant", "field" => "niveau", "page" => "edit");
	$lookupTableLinks["etudiant"]["note.idetudiant"]["edit"] = array("table" => "note", "field" => "idetudiant", "page" => "edit");
	$lookupTableLinks["matiere"]["note.idmatiere"]["edit"] = array("table" => "note", "field" => "idmatiere", "page" => "edit");
	$lookupTableLinks["controle"]["note.idcontrole"]["edit"] = array("table" => "note", "field" => "idcontrole", "page" => "edit");
	$lookupTableLinks["etudiant"]["note_Chart.idetudiant"]["search"] = array("table" => "note Chart", "field" => "idetudiant", "page" => "search");
	$lookupTableLinks["matiere"]["note_Chart.idmatiere"]["search"] = array("table" => "note Chart", "field" => "idmatiere", "page" => "search");
	$lookupTableLinks["controle"]["note_Chart.idcontrole"]["search"] = array("table" => "note Chart", "field" => "idcontrole", "page" => "search");
}

?>