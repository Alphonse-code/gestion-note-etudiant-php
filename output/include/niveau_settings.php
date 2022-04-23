<?php
require_once(getabspath("classes/cipherer.php"));




$tdataniveau = array();
	$tdataniveau[".truncateText"] = true;
	$tdataniveau[".NumberOfChars"] = 80;
	$tdataniveau[".ShortName"] = "niveau";
	$tdataniveau[".OwnerID"] = "";
	$tdataniveau[".OriginalTable"] = "niveau";

//	field labels
$fieldLabelsniveau = array();
$fieldToolTipsniveau = array();
$pageTitlesniveau = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsniveau["French"] = array();
	$fieldToolTipsniveau["French"] = array();
	$pageTitlesniveau["French"] = array();
	$fieldLabelsniveau["French"]["idniveau"] = "Idniveau";
	$fieldToolTipsniveau["French"]["idniveau"] = "";
	$fieldLabelsniveau["French"]["niveau"] = "Niveau";
	$fieldToolTipsniveau["French"]["niveau"] = "";
	$fieldLabelsniveau["French"]["annee"] = "Annee";
	$fieldToolTipsniveau["French"]["annee"] = "";
	if (count($fieldToolTipsniveau["French"]))
		$tdataniveau[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsniveau[""] = array();
	$fieldToolTipsniveau[""] = array();
	$pageTitlesniveau[""] = array();
	if (count($fieldToolTipsniveau[""]))
		$tdataniveau[".isUseToolTips"] = true;
}


	$tdataniveau[".NCSearch"] = true;



$tdataniveau[".shortTableName"] = "niveau";
$tdataniveau[".nSecOptions"] = 0;
$tdataniveau[".recsPerRowPrint"] = 1;
$tdataniveau[".mainTableOwnerID"] = "";
$tdataniveau[".moveNext"] = 1;
$tdataniveau[".entityType"] = 0;

$tdataniveau[".strOriginalTableName"] = "niveau";

	



$tdataniveau[".showAddInPopup"] = true;

$tdataniveau[".showEditInPopup"] = true;

$tdataniveau[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view_bootstrap_2col";
			;
$popupPagesLayoutNames["edit"] = "view_bootstrap_2col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdataniveau[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataniveau[".fieldsForRegister"] = array();
	
	$tdataniveau[".listAjax"] = true;

	$tdataniveau[".audit"] = false;

	$tdataniveau[".locking"] = false;



$tdataniveau[".list"] = true;

$tdataniveau[".inlineEdit"] = true;
$tdataniveau[".inlineAdd"] = true;
$tdataniveau[".view"] = true;




$tdataniveau[".delete"] = true;

$tdataniveau[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataniveau[".searchSaving"] = false;
//

$tdataniveau[".showSearchPanel"] = true;
		$tdataniveau[".flexibleSearch"] = true;

$tdataniveau[".isUseAjaxSuggest"] = true;

$tdataniveau[".rowHighlite"] = true;



$tdataniveau[".addPageEvents"] = false;

// use timepicker for search panel
$tdataniveau[".isUseTimeForSearch"] = false;





$tdataniveau[".allSearchFields"] = array();
$tdataniveau[".filterFields"] = array();
$tdataniveau[".requiredSearchFields"] = array();

$tdataniveau[".allSearchFields"][] = "idniveau";
	$tdataniveau[".allSearchFields"][] = "niveau";
	$tdataniveau[".allSearchFields"][] = "annee";
	

$tdataniveau[".googleLikeFields"] = array();
$tdataniveau[".googleLikeFields"][] = "idniveau";
$tdataniveau[".googleLikeFields"][] = "niveau";
$tdataniveau[".googleLikeFields"][] = "annee";


$tdataniveau[".advSearchFields"] = array();
$tdataniveau[".advSearchFields"][] = "idniveau";
$tdataniveau[".advSearchFields"][] = "niveau";
$tdataniveau[".advSearchFields"][] = "annee";

$tdataniveau[".tableType"] = "list";

$tdataniveau[".printerPageOrientation"] = 0;
$tdataniveau[".nPrinterPageScale"] = 100;

$tdataniveau[".nPrinterSplitRecords"] = 40;

$tdataniveau[".nPrinterPDFSplitRecords"] = 40;



$tdataniveau[".geocodingEnabled"] = false;





$tdataniveau[".listGridLayout"] = 3;

$tdataniveau[".isDisplayLoading"] = true;

$tdataniveau[".isResizeColumns"] = true;



// view page pdf
$tdataniveau[".isViewPagePDF"] = true;
$tdataniveau[".nViewPagePDFScale"] = 100;

// print page pdf


$tdataniveau[".pageSize"] = 20;

$tdataniveau[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataniveau[".strOrderBy"] = $tstrOrderBy;

$tdataniveau[".orderindexes"] = array();

$tdataniveau[".sqlHead"] = "SELECT idniveau,  	niveau,  	annee";
$tdataniveau[".sqlFrom"] = "FROM niveau";
$tdataniveau[".sqlWhereExpr"] = "";
$tdataniveau[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataniveau[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataniveau[".arrGroupsPerPage"] = $arrGPP;

$tdataniveau[".highlightSearchResults"] = true;

$tableKeysniveau = array();
$tableKeysniveau[] = "idniveau";
$tdataniveau[".Keys"] = $tableKeysniveau;

$tdataniveau[".listFields"] = array();
$tdataniveau[".listFields"][] = "idniveau";
$tdataniveau[".listFields"][] = "niveau";
$tdataniveau[".listFields"][] = "annee";

$tdataniveau[".hideMobileList"] = array();


$tdataniveau[".viewFields"] = array();
$tdataniveau[".viewFields"][] = "idniveau";
$tdataniveau[".viewFields"][] = "niveau";
$tdataniveau[".viewFields"][] = "annee";

$tdataniveau[".addFields"] = array();

$tdataniveau[".masterListFields"] = array();
$tdataniveau[".masterListFields"][] = "idniveau";
$tdataniveau[".masterListFields"][] = "niveau";
$tdataniveau[".masterListFields"][] = "annee";

$tdataniveau[".inlineAddFields"] = array();
$tdataniveau[".inlineAddFields"][] = "niveau";
$tdataniveau[".inlineAddFields"][] = "annee";

$tdataniveau[".editFields"] = array();

$tdataniveau[".inlineEditFields"] = array();
$tdataniveau[".inlineEditFields"][] = "niveau";
$tdataniveau[".inlineEditFields"][] = "annee";

$tdataniveau[".exportFields"] = array();

$tdataniveau[".importFields"] = array();

$tdataniveau[".printFields"] = array();

//	idniveau
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idniveau";
	$fdata["GoodName"] = "idniveau";
	$fdata["ownerTable"] = "niveau";
	$fdata["Label"] = GetFieldLabel("niveau","idniveau");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "idniveau";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idniveau";

	
	
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




	$tdataniveau["idniveau"] = $fdata;
//	niveau
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "niveau";
	$fdata["GoodName"] = "niveau";
	$fdata["ownerTable"] = "niveau";
	$fdata["Label"] = GetFieldLabel("niveau","niveau");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "niveau";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "niveau";

	
	
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




	$tdataniveau["niveau"] = $fdata;
//	annee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "annee";
	$fdata["GoodName"] = "annee";
	$fdata["ownerTable"] = "niveau";
	$fdata["Label"] = GetFieldLabel("niveau","annee");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "annee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "annee";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataniveau["annee"] = $fdata;


$tables_data["niveau"]=&$tdataniveau;
$field_labels["niveau"] = &$fieldLabelsniveau;
$fieldToolTips["niveau"] = &$fieldToolTipsniveau;
$page_titles["niveau"] = &$pageTitlesniveau;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["niveau"] = array();
//	etudiant
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="etudiant";
		$detailsParam["dOriginalTable"] = "etudiant";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "etudiant";
	$detailsParam["dCaptionTable"] = GetTableCaption("etudiant");
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
		
	$detailsTablesData["niveau"][$dIndex] = $detailsParam;

	
		$detailsTablesData["niveau"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["niveau"][$dIndex]["masterKeys"][]="idniveau";

				$detailsTablesData["niveau"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["niveau"][$dIndex]["detailKeys"][]="niveau";

// tables which are master tables for current table (detail)
$masterTablesData["niveau"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_niveau()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idniveau,  	niveau,  	annee";
$proto3["m_strFrom"] = "FROM niveau";
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
	"m_strName" => "idniveau",
	"m_strTable" => "niveau",
	"m_srcTableName" => "niveau"
));

$proto9["m_sql"] = "idniveau";
$proto9["m_srcTableName"] = "niveau";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "niveau",
	"m_strTable" => "niveau",
	"m_srcTableName" => "niveau"
));

$proto11["m_sql"] = "niveau";
$proto11["m_srcTableName"] = "niveau";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "annee",
	"m_strTable" => "niveau",
	"m_srcTableName" => "niveau"
));

$proto13["m_sql"] = "annee";
$proto13["m_srcTableName"] = "niveau";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "niveau";
$proto16["m_srcTableName"] = "niveau";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idniveau";
$proto16["m_columns"][] = "niveau";
$proto16["m_columns"][] = "annee";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "niveau";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "niveau";
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
$proto3["m_srcTableName"]="niveau";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_niveau = createSqlQuery_niveau();


	
		;

			

$tdataniveau[".sqlquery"] = $queryData_niveau;

$tableEvents["niveau"] = new eventsBase;
$tdataniveau[".hasEvents"] = false;

?>