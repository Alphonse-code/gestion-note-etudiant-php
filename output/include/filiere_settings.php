<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafiliere = array();
	$tdatafiliere[".truncateText"] = true;
	$tdatafiliere[".NumberOfChars"] = 80;
	$tdatafiliere[".ShortName"] = "filiere";
	$tdatafiliere[".OwnerID"] = "";
	$tdatafiliere[".OriginalTable"] = "filiere";

//	field labels
$fieldLabelsfiliere = array();
$fieldToolTipsfiliere = array();
$pageTitlesfiliere = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfiliere["French"] = array();
	$fieldToolTipsfiliere["French"] = array();
	$pageTitlesfiliere["French"] = array();
	$fieldLabelsfiliere["French"]["idfiliere"] = "Idfiliere";
	$fieldToolTipsfiliere["French"]["idfiliere"] = "";
	$fieldLabelsfiliere["French"]["codefiliere"] = "Codefiliere";
	$fieldToolTipsfiliere["French"]["codefiliere"] = "";
	$fieldLabelsfiliere["French"]["nomfiliere"] = "Nomfiliere";
	$fieldToolTipsfiliere["French"]["nomfiliere"] = "";
	if (count($fieldToolTipsfiliere["French"]))
		$tdatafiliere[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfiliere[""] = array();
	$fieldToolTipsfiliere[""] = array();
	$pageTitlesfiliere[""] = array();
	if (count($fieldToolTipsfiliere[""]))
		$tdatafiliere[".isUseToolTips"] = true;
}


	$tdatafiliere[".NCSearch"] = true;



$tdatafiliere[".shortTableName"] = "filiere";
$tdatafiliere[".nSecOptions"] = 0;
$tdatafiliere[".recsPerRowPrint"] = 1;
$tdatafiliere[".mainTableOwnerID"] = "";
$tdatafiliere[".moveNext"] = 1;
$tdatafiliere[".entityType"] = 0;

$tdatafiliere[".strOriginalTableName"] = "filiere";

	



$tdatafiliere[".showAddInPopup"] = true;

$tdatafiliere[".showEditInPopup"] = true;

$tdatafiliere[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view_bootstrap_2col";
			;
$popupPagesLayoutNames["edit"] = "view_bootstrap_2col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatafiliere[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafiliere[".fieldsForRegister"] = array();
	
	$tdatafiliere[".listAjax"] = true;

	$tdatafiliere[".audit"] = false;

	$tdatafiliere[".locking"] = false;



$tdatafiliere[".list"] = true;

$tdatafiliere[".inlineEdit"] = true;
$tdatafiliere[".inlineAdd"] = true;
$tdatafiliere[".view"] = true;




$tdatafiliere[".delete"] = true;

$tdatafiliere[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatafiliere[".searchSaving"] = false;
//

$tdatafiliere[".showSearchPanel"] = true;
		$tdatafiliere[".flexibleSearch"] = true;

$tdatafiliere[".isUseAjaxSuggest"] = true;

$tdatafiliere[".rowHighlite"] = true;



$tdatafiliere[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafiliere[".isUseTimeForSearch"] = false;





$tdatafiliere[".allSearchFields"] = array();
$tdatafiliere[".filterFields"] = array();
$tdatafiliere[".requiredSearchFields"] = array();

$tdatafiliere[".allSearchFields"][] = "idfiliere";
	$tdatafiliere[".allSearchFields"][] = "codefiliere";
	$tdatafiliere[".allSearchFields"][] = "nomfiliere";
	

$tdatafiliere[".googleLikeFields"] = array();
$tdatafiliere[".googleLikeFields"][] = "idfiliere";
$tdatafiliere[".googleLikeFields"][] = "codefiliere";
$tdatafiliere[".googleLikeFields"][] = "nomfiliere";


$tdatafiliere[".advSearchFields"] = array();
$tdatafiliere[".advSearchFields"][] = "idfiliere";
$tdatafiliere[".advSearchFields"][] = "codefiliere";
$tdatafiliere[".advSearchFields"][] = "nomfiliere";

$tdatafiliere[".tableType"] = "list";

$tdatafiliere[".printerPageOrientation"] = 0;
$tdatafiliere[".nPrinterPageScale"] = 100;

$tdatafiliere[".nPrinterSplitRecords"] = 40;

$tdatafiliere[".nPrinterPDFSplitRecords"] = 40;



$tdatafiliere[".geocodingEnabled"] = false;





$tdatafiliere[".listGridLayout"] = 3;

$tdatafiliere[".isDisplayLoading"] = true;

$tdatafiliere[".isResizeColumns"] = true;



// view page pdf
$tdatafiliere[".isViewPagePDF"] = true;
$tdatafiliere[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatafiliere[".pageSize"] = 20;

$tdatafiliere[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafiliere[".strOrderBy"] = $tstrOrderBy;

$tdatafiliere[".orderindexes"] = array();

$tdatafiliere[".sqlHead"] = "SELECT idfiliere,  	codefiliere,  	nomfiliere";
$tdatafiliere[".sqlFrom"] = "FROM filiere";
$tdatafiliere[".sqlWhereExpr"] = "";
$tdatafiliere[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafiliere[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafiliere[".arrGroupsPerPage"] = $arrGPP;

$tdatafiliere[".highlightSearchResults"] = true;

$tableKeysfiliere = array();
$tableKeysfiliere[] = "idfiliere";
$tdatafiliere[".Keys"] = $tableKeysfiliere;

$tdatafiliere[".listFields"] = array();
$tdatafiliere[".listFields"][] = "idfiliere";
$tdatafiliere[".listFields"][] = "codefiliere";
$tdatafiliere[".listFields"][] = "nomfiliere";

$tdatafiliere[".hideMobileList"] = array();


$tdatafiliere[".viewFields"] = array();
$tdatafiliere[".viewFields"][] = "idfiliere";
$tdatafiliere[".viewFields"][] = "codefiliere";
$tdatafiliere[".viewFields"][] = "nomfiliere";

$tdatafiliere[".addFields"] = array();

$tdatafiliere[".masterListFields"] = array();
$tdatafiliere[".masterListFields"][] = "idfiliere";
$tdatafiliere[".masterListFields"][] = "codefiliere";
$tdatafiliere[".masterListFields"][] = "nomfiliere";

$tdatafiliere[".inlineAddFields"] = array();
$tdatafiliere[".inlineAddFields"][] = "codefiliere";
$tdatafiliere[".inlineAddFields"][] = "nomfiliere";

$tdatafiliere[".editFields"] = array();

$tdatafiliere[".inlineEditFields"] = array();
$tdatafiliere[".inlineEditFields"][] = "codefiliere";
$tdatafiliere[".inlineEditFields"][] = "nomfiliere";

$tdatafiliere[".exportFields"] = array();

$tdatafiliere[".importFields"] = array();

$tdatafiliere[".printFields"] = array();

//	idfiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idfiliere";
	$fdata["GoodName"] = "idfiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere","idfiliere");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "idfiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idfiliere";

	
	
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




	$tdatafiliere["idfiliere"] = $fdata;
//	codefiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codefiliere";
	$fdata["GoodName"] = "codefiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere","codefiliere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "codefiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codefiliere";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafiliere["codefiliere"] = $fdata;
//	nomfiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nomfiliere";
	$fdata["GoodName"] = "nomfiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere","nomfiliere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nomfiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomfiliere";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafiliere["nomfiliere"] = $fdata;


$tables_data["filiere"]=&$tdatafiliere;
$field_labels["filiere"] = &$fieldLabelsfiliere;
$fieldToolTips["filiere"] = &$fieldToolTipsfiliere;
$page_titles["filiere"] = &$pageTitlesfiliere;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filiere"] = array();
//	cycle
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cycle";
		$detailsParam["dOriginalTable"] = "cycle";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cycle";
	$detailsParam["dCaptionTable"] = GetTableCaption("cycle");
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
		
	$detailsTablesData["filiere"][$dIndex] = $detailsParam;

	
		$detailsTablesData["filiere"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["filiere"][$dIndex]["masterKeys"][]="idfiliere";

				$detailsTablesData["filiere"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["filiere"][$dIndex]["detailKeys"][]="filiere";

// tables which are master tables for current table (detail)
$masterTablesData["filiere"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filiere()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idfiliere,  	codefiliere,  	nomfiliere";
$proto3["m_strFrom"] = "FROM filiere";
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
	"m_strName" => "idfiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere"
));

$proto9["m_sql"] = "idfiliere";
$proto9["m_srcTableName"] = "filiere";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "codefiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere"
));

$proto11["m_sql"] = "codefiliere";
$proto11["m_srcTableName"] = "filiere";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nomfiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere"
));

$proto13["m_sql"] = "nomfiliere";
$proto13["m_srcTableName"] = "filiere";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "filiere";
$proto16["m_srcTableName"] = "filiere";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idfiliere";
$proto16["m_columns"][] = "codefiliere";
$proto16["m_columns"][] = "nomfiliere";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "filiere";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "filiere";
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
$proto3["m_srcTableName"]="filiere";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_filiere = createSqlQuery_filiere();


	
		;

			

$tdatafiliere[".sqlquery"] = $queryData_filiere;

$tableEvents["filiere"] = new eventsBase;
$tdatafiliere[".hasEvents"] = false;

?>