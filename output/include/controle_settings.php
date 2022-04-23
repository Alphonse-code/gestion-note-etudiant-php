<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontrole = array();
	$tdatacontrole[".truncateText"] = true;
	$tdatacontrole[".NumberOfChars"] = 80;
	$tdatacontrole[".ShortName"] = "controle";
	$tdatacontrole[".OwnerID"] = "";
	$tdatacontrole[".OriginalTable"] = "controle";

//	field labels
$fieldLabelscontrole = array();
$fieldToolTipscontrole = array();
$pageTitlescontrole = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscontrole["French"] = array();
	$fieldToolTipscontrole["French"] = array();
	$pageTitlescontrole["French"] = array();
	$fieldLabelscontrole["French"]["idcontrole"] = "Idcontrole";
	$fieldToolTipscontrole["French"]["idcontrole"] = "";
	$fieldLabelscontrole["French"]["numcont"] = "Numcont";
	$fieldToolTipscontrole["French"]["numcont"] = "";
	$fieldLabelscontrole["French"]["datecont"] = "Datecont";
	$fieldToolTipscontrole["French"]["datecont"] = "";
	if (count($fieldToolTipscontrole["French"]))
		$tdatacontrole[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontrole[""] = array();
	$fieldToolTipscontrole[""] = array();
	$pageTitlescontrole[""] = array();
	if (count($fieldToolTipscontrole[""]))
		$tdatacontrole[".isUseToolTips"] = true;
}


	$tdatacontrole[".NCSearch"] = true;



$tdatacontrole[".shortTableName"] = "controle";
$tdatacontrole[".nSecOptions"] = 0;
$tdatacontrole[".recsPerRowPrint"] = 1;
$tdatacontrole[".mainTableOwnerID"] = "";
$tdatacontrole[".moveNext"] = 1;
$tdatacontrole[".entityType"] = 0;

$tdatacontrole[".strOriginalTableName"] = "controle";

	



$tdatacontrole[".showAddInPopup"] = true;

$tdatacontrole[".showEditInPopup"] = true;

$tdatacontrole[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatacontrole[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrole[".fieldsForRegister"] = array();
	
	$tdatacontrole[".listAjax"] = true;

	$tdatacontrole[".audit"] = false;

	$tdatacontrole[".locking"] = false;



$tdatacontrole[".list"] = true;

$tdatacontrole[".inlineEdit"] = true;
$tdatacontrole[".inlineAdd"] = true;
$tdatacontrole[".view"] = true;




$tdatacontrole[".delete"] = true;

$tdatacontrole[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatacontrole[".searchSaving"] = false;
//

$tdatacontrole[".showSearchPanel"] = true;
		$tdatacontrole[".flexibleSearch"] = true;

$tdatacontrole[".isUseAjaxSuggest"] = true;

$tdatacontrole[".rowHighlite"] = true;



$tdatacontrole[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrole[".isUseTimeForSearch"] = false;



$tdatacontrole[".badgeColor"] = "1E90FF";


$tdatacontrole[".allSearchFields"] = array();
$tdatacontrole[".filterFields"] = array();
$tdatacontrole[".requiredSearchFields"] = array();

$tdatacontrole[".allSearchFields"][] = "idcontrole";
	$tdatacontrole[".allSearchFields"][] = "numcont";
	$tdatacontrole[".allSearchFields"][] = "datecont";
	

$tdatacontrole[".googleLikeFields"] = array();
$tdatacontrole[".googleLikeFields"][] = "idcontrole";
$tdatacontrole[".googleLikeFields"][] = "numcont";
$tdatacontrole[".googleLikeFields"][] = "datecont";


$tdatacontrole[".advSearchFields"] = array();
$tdatacontrole[".advSearchFields"][] = "idcontrole";
$tdatacontrole[".advSearchFields"][] = "numcont";
$tdatacontrole[".advSearchFields"][] = "datecont";

$tdatacontrole[".tableType"] = "list";

$tdatacontrole[".printerPageOrientation"] = 0;
$tdatacontrole[".nPrinterPageScale"] = 100;

$tdatacontrole[".nPrinterSplitRecords"] = 40;

$tdatacontrole[".nPrinterPDFSplitRecords"] = 40;



$tdatacontrole[".geocodingEnabled"] = false;





$tdatacontrole[".listGridLayout"] = 3;

$tdatacontrole[".isDisplayLoading"] = true;

$tdatacontrole[".isResizeColumns"] = true;



// view page pdf
$tdatacontrole[".isViewPagePDF"] = true;
$tdatacontrole[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatacontrole[".pageSize"] = 20;

$tdatacontrole[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrole[".strOrderBy"] = $tstrOrderBy;

$tdatacontrole[".orderindexes"] = array();

$tdatacontrole[".sqlHead"] = "SELECT idcontrole,  	numcont,  	datecont";
$tdatacontrole[".sqlFrom"] = "FROM controle";
$tdatacontrole[".sqlWhereExpr"] = "";
$tdatacontrole[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrole[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrole[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrole[".highlightSearchResults"] = true;

$tableKeyscontrole = array();
$tableKeyscontrole[] = "idcontrole";
$tdatacontrole[".Keys"] = $tableKeyscontrole;

$tdatacontrole[".listFields"] = array();
$tdatacontrole[".listFields"][] = "idcontrole";
$tdatacontrole[".listFields"][] = "numcont";
$tdatacontrole[".listFields"][] = "datecont";

$tdatacontrole[".hideMobileList"] = array();


$tdatacontrole[".viewFields"] = array();
$tdatacontrole[".viewFields"][] = "idcontrole";
$tdatacontrole[".viewFields"][] = "numcont";
$tdatacontrole[".viewFields"][] = "datecont";

$tdatacontrole[".addFields"] = array();

$tdatacontrole[".masterListFields"] = array();
$tdatacontrole[".masterListFields"][] = "idcontrole";
$tdatacontrole[".masterListFields"][] = "numcont";
$tdatacontrole[".masterListFields"][] = "datecont";

$tdatacontrole[".inlineAddFields"] = array();
$tdatacontrole[".inlineAddFields"][] = "numcont";
$tdatacontrole[".inlineAddFields"][] = "datecont";

$tdatacontrole[".editFields"] = array();

$tdatacontrole[".inlineEditFields"] = array();
$tdatacontrole[".inlineEditFields"][] = "numcont";
$tdatacontrole[".inlineEditFields"][] = "datecont";

$tdatacontrole[".exportFields"] = array();

$tdatacontrole[".importFields"] = array();

$tdatacontrole[".printFields"] = array();

//	idcontrole
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcontrole";
	$fdata["GoodName"] = "idcontrole";
	$fdata["ownerTable"] = "controle";
	$fdata["Label"] = GetFieldLabel("controle","idcontrole");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "idcontrole";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcontrole";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacontrole["idcontrole"] = $fdata;
//	numcont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numcont";
	$fdata["GoodName"] = "numcont";
	$fdata["ownerTable"] = "controle";
	$fdata["Label"] = GetFieldLabel("controle","numcont");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "numcont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numcont";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacontrole["numcont"] = $fdata;
//	datecont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "datecont";
	$fdata["GoodName"] = "datecont";
	$fdata["ownerTable"] = "controle";
	$fdata["Label"] = GetFieldLabel("controle","datecont");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "datecont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datecont";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatacontrole["datecont"] = $fdata;


$tables_data["controle"]=&$tdatacontrole;
$field_labels["controle"] = &$fieldLabelscontrole;
$fieldToolTips["controle"] = &$fieldToolTipscontrole;
$page_titles["controle"] = &$pageTitlescontrole;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["controle"] = array();
//	note
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="note";
		$detailsParam["dOriginalTable"] = "note";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "note";
	$detailsParam["dCaptionTable"] = GetTableCaption("note");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["controle"][$dIndex] = $detailsParam;

	
		$detailsTablesData["controle"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["controle"][$dIndex]["masterKeys"][]="idcontrole";

				$detailsTablesData["controle"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["controle"][$dIndex]["detailKeys"][]="idcontrole";
//	note Chart
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="note Chart";
		$detailsParam["dOriginalTable"] = "note";
		$detailsParam["proceedLink"] = true;
			$detailsParam["dType"]=PAGE_CHART;
		$detailsParam["dShortTable"] = "note_Chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("note_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["controle"][$dIndex] = $detailsParam;

	
		$detailsTablesData["controle"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["controle"][$dIndex]["masterKeys"][]="idcontrole";

				$detailsTablesData["controle"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["controle"][$dIndex]["detailKeys"][]="idcontrole";

// tables which are master tables for current table (detail)
$masterTablesData["controle"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_controle()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idcontrole,  	numcont,  	datecont";
$proto3["m_strFrom"] = "FROM controle";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
	
		;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "idcontrole",
	"m_strTable" => "controle",
	"m_srcTableName" => "controle"
));

$proto9["m_sql"] = "idcontrole";
$proto9["m_srcTableName"] = "controle";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "numcont",
	"m_strTable" => "controle",
	"m_srcTableName" => "controle"
));

$proto11["m_sql"] = "numcont";
$proto11["m_srcTableName"] = "controle";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "datecont",
	"m_strTable" => "controle",
	"m_srcTableName" => "controle"
));

$proto13["m_sql"] = "datecont";
$proto13["m_srcTableName"] = "controle";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "controle";
$proto16["m_srcTableName"] = "controle";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idcontrole";
$proto16["m_columns"][] = "numcont";
$proto16["m_columns"][] = "datecont";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "controle";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "controle";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="controle";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_controle = createSqlQuery_controle();


	
		;

			

$tdatacontrole[".sqlquery"] = $queryData_controle;

$tableEvents["controle"] = new eventsBase;
$tdatacontrole[".hasEvents"] = false;

?>