<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsDashboard["French"] = array();
	$fieldLabelsDashboard["French"]["note_Chart_idnote"] = "Idnote";
	$fieldLabelsDashboard["French"]["note_Chart_idetudiant"] = "Idetudiant";
	$fieldLabelsDashboard["French"]["note_Chart_idmatiere"] = "Idmatiere";
	$fieldLabelsDashboard["French"]["note_Chart_idcontrole"] = "Idcontrole";
	$fieldLabelsDashboard["French"]["note_Chart_note"] = "Note";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"note Chart", "field"=>"idnote" );
$tdataDashboard[".searchFields"]["note_Chart_idnote"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"note Chart", "field"=>"idetudiant" );
$tdataDashboard[".searchFields"]["note_Chart_idetudiant"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"note Chart", "field"=>"idmatiere" );
$tdataDashboard[".searchFields"]["note_Chart_idmatiere"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"note Chart", "field"=>"idcontrole" );
$tdataDashboard[".searchFields"]["note_Chart_idcontrole"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"note Chart", "field"=>"note" );
$tdataDashboard[".searchFields"]["note_Chart_note"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "note_Chart_idnote";
$tdataDashboard[".allSearchFields"][] = "note_Chart_idetudiant";
$tdataDashboard[".allSearchFields"][] = "note_Chart_idmatiere";
$tdataDashboard[".allSearchFields"][] = "note_Chart_idcontrole";
$tdataDashboard[".allSearchFields"][] = "note_Chart_note";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "note_Chart_idnote";
$tdataDashboard[".googleLikeFields"][] = "note_Chart_idetudiant";
$tdataDashboard[".googleLikeFields"][] = "note_Chart_idmatiere";
$tdataDashboard[".googleLikeFields"][] = "note_Chart_idcontrole";
$tdataDashboard[".googleLikeFields"][] = "note_Chart_note";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "note_Chart_details", "table" => "note Chart", "type" => 5);
	$dbelement["cellName"] = "cell_0_0";

				$dbelement["notUsedDetailTables"] = array();
	$dbelement["initialTabDetailTable"] = "";
	$dbelement["details"] = array();


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";



$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>