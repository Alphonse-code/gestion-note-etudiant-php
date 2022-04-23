<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacycle = array();
	$tdatacycle[".truncateText"] = true;
	$tdatacycle[".NumberOfChars"] = 80;
	$tdatacycle[".ShortName"] = "cycle";
	$tdatacycle[".OwnerID"] = "";
	$tdatacycle[".OriginalTable"] = "cycle";

//	field labels
$fieldLabelscycle = array();
$fieldToolTipscycle = array();
$pageTitlescycle = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscycle["French"] = array();
	$fieldToolTipscycle["French"] = array();
	$pageTitlescycle["French"] = array();
	$fieldLabelscycle["French"]["idcycle"] = "Idcycle";
	$fieldToolTipscycle["French"]["idcycle"] = "";
	$fieldLabelscycle["French"]["codecycle"] = "Codecycle";
	$fieldToolTipscycle["French"]["codecycle"] = "";
	$fieldLabelscycle["French"]["nomcycle"] = "Nomcycle";
	$fieldToolTipscycle["French"]["nomcycle"] = "";
	$fieldLabelscycle["French"]["filiere"] = "Filiere";
	$fieldToolTipscycle["French"]["filiere"] = "";
	if (count($fieldToolTipscycle["French"]))
		$tdatacycle[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscycle[""] = array();
	$fieldToolTipscycle[""] = array();
	$pageTitlescycle[""] = array();
	if (count($fieldToolTipscycle[""]))
		$tdatacycle[".isUseToolTips"] = true;
}


	$tdatacycle[".NCSearch"] = true;



$tdatacycle[".shortTableName"] = "cycle";
$tdatacycle[".nSecOptions"] = 0;
$tdatacycle[".recsPerRowPrint"] = 1;
$tdatacycle[".mainTableOwnerID"] = "";
$tdatacycle[".moveNext"] = 1;
$tdatacycle[".entityType"] = 0;

$tdatacycle[".strOriginalTableName"] = "cycle";

	



$tdatacycle[".showAddInPopup"] = true;

$tdatacycle[".showEditInPopup"] = true;

$tdatacycle[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatacycle[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacycle[".fieldsForRegister"] = array();
	
	$tdatacycle[".listAjax"] = true;

	$tdatacycle[".audit"] = false;

	$tdatacycle[".locking"] = false;



$tdatacycle[".list"] = true;

$tdatacycle[".inlineEdit"] = true;
$tdatacycle[".inlineAdd"] = true;
$tdatacycle[".view"] = true;




$tdatacycle[".delete"] = true;

$tdatacycle[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatacycle[".searchSaving"] = false;
//

$tdatacycle[".showSearchPanel"] = true;
		$tdatacycle[".flexibleSearch"] = true;

$tdatacycle[".isUseAjaxSuggest"] = true;

$tdatacycle[".rowHighlite"] = true;



$tdatacycle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacycle[".isUseTimeForSearch"] = false;



$tdatacycle[".badgeColor"] = "00C2C5";


$tdatacycle[".allSearchFields"] = array();
$tdatacycle[".filterFields"] = array();
$tdatacycle[".requiredSearchFields"] = array();

$tdatacycle[".allSearchFields"][] = "idcycle";
	$tdatacycle[".allSearchFields"][] = "codecycle";
	$tdatacycle[".allSearchFields"][] = "nomcycle";
	$tdatacycle[".allSearchFields"][] = "filiere";
	

$tdatacycle[".googleLikeFields"] = array();
$tdatacycle[".googleLikeFields"][] = "idcycle";
$tdatacycle[".googleLikeFields"][] = "codecycle";
$tdatacycle[".googleLikeFields"][] = "nomcycle";
$tdatacycle[".googleLikeFields"][] = "filiere";


$tdatacycle[".advSearchFields"] = array();
$tdatacycle[".advSearchFields"][] = "idcycle";
$tdatacycle[".advSearchFields"][] = "codecycle";
$tdatacycle[".advSearchFields"][] = "nomcycle";
$tdatacycle[".advSearchFields"][] = "filiere";

$tdatacycle[".tableType"] = "list";

$tdatacycle[".printerPageOrientation"] = 0;
$tdatacycle[".nPrinterPageScale"] = 100;

$tdatacycle[".nPrinterSplitRecords"] = 40;

$tdatacycle[".nPrinterPDFSplitRecords"] = 40;



$tdatacycle[".geocodingEnabled"] = false;





$tdatacycle[".listGridLayout"] = 3;

$tdatacycle[".isDisplayLoading"] = true;

$tdatacycle[".isResizeColumns"] = true;



// view page pdf
$tdatacycle[".isViewPagePDF"] = true;
$tdatacycle[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatacycle[".pageSize"] = 20;

$tdatacycle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacycle[".strOrderBy"] = $tstrOrderBy;

$tdatacycle[".orderindexes"] = array();

$tdatacycle[".sqlHead"] = "SELECT idcycle,  	codecycle,  	nomcycle,  	filiere";
$tdatacycle[".sqlFrom"] = "FROM `cycle`";
$tdatacycle[".sqlWhereExpr"] = "";
$tdatacycle[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacycle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacycle[".arrGroupsPerPage"] = $arrGPP;

$tdatacycle[".highlightSearchResults"] = true;

$tableKeyscycle = array();
$tableKeyscycle[] = "idcycle";
$tdatacycle[".Keys"] = $tableKeyscycle;

$tdatacycle[".listFields"] = array();
$tdatacycle[".listFields"][] = "idcycle";
$tdatacycle[".listFields"][] = "codecycle";
$tdatacycle[".listFields"][] = "nomcycle";
$tdatacycle[".listFields"][] = "filiere";

$tdatacycle[".hideMobileList"] = array();


$tdatacycle[".viewFields"] = array();
$tdatacycle[".viewFields"][] = "idcycle";
$tdatacycle[".viewFields"][] = "codecycle";
$tdatacycle[".viewFields"][] = "nomcycle";
$tdatacycle[".viewFields"][] = "filiere";

$tdatacycle[".addFields"] = array();

$tdatacycle[".masterListFields"] = array();
$tdatacycle[".masterListFields"][] = "idcycle";
$tdatacycle[".masterListFields"][] = "codecycle";
$tdatacycle[".masterListFields"][] = "nomcycle";
$tdatacycle[".masterListFields"][] = "filiere";

$tdatacycle[".inlineAddFields"] = array();
$tdatacycle[".inlineAddFields"][] = "codecycle";
$tdatacycle[".inlineAddFields"][] = "nomcycle";
$tdatacycle[".inlineAddFields"][] = "filiere";

$tdatacycle[".editFields"] = array();

$tdatacycle[".inlineEditFields"] = array();
$tdatacycle[".inlineEditFields"][] = "codecycle";
$tdatacycle[".inlineEditFields"][] = "nomcycle";
$tdatacycle[".inlineEditFields"][] = "filiere";

$tdatacycle[".exportFields"] = array();

$tdatacycle[".importFields"] = array();

$tdatacycle[".printFields"] = array();

//	idcycle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcycle";
	$fdata["GoodName"] = "idcycle";
	$fdata["ownerTable"] = "cycle";
	$fdata["Label"] = GetFieldLabel("cycle","idcycle");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "idcycle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcycle";

	
	
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




	$tdatacycle["idcycle"] = $fdata;
//	codecycle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codecycle";
	$fdata["GoodName"] = "codecycle";
	$fdata["ownerTable"] = "cycle";
	$fdata["Label"] = GetFieldLabel("cycle","codecycle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "codecycle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codecycle";

	
	
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




	$tdatacycle["codecycle"] = $fdata;
//	nomcycle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nomcycle";
	$fdata["GoodName"] = "nomcycle";
	$fdata["ownerTable"] = "cycle";
	$fdata["Label"] = GetFieldLabel("cycle","nomcycle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nomcycle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomcycle";

	
	
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




	$tdatacycle["nomcycle"] = $fdata;
//	filiere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "filiere";
	$fdata["GoodName"] = "filiere";
	$fdata["ownerTable"] = "cycle";
	$fdata["Label"] = GetFieldLabel("cycle","filiere");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "filiere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filiere";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "filiere";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idfiliere";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nomfiliere";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacycle["filiere"] = $fdata;


$tables_data["cycle"]=&$tdatacycle;
$field_labels["cycle"] = &$fieldLabelscycle;
$fieldToolTips["cycle"] = &$fieldToolTipscycle;
$page_titles["cycle"] = &$pageTitlescycle;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cycle"] = array();
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
		
	$detailsTablesData["cycle"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cycle"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cycle"][$dIndex]["masterKeys"][]="idcycle";

				$detailsTablesData["cycle"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cycle"][$dIndex]["detailKeys"][]="cycle";

// tables which are master tables for current table (detail)
$masterTablesData["cycle"] = array();


	
				$strOriginalDetailsTable="filiere";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="filiere";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "filiere";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cycle"][0] = $masterParams;
				$masterTablesData["cycle"][0]["masterKeys"] = array();
	$masterTablesData["cycle"][0]["masterKeys"][]="idfiliere";
				$masterTablesData["cycle"][0]["detailKeys"] = array();
	$masterTablesData["cycle"][0]["detailKeys"][]="filiere";
		
	
				$strOriginalDetailsTable="filiere";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="filiere Chart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "filiere_Chart";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["cycle"][1] = $masterParams;
				$masterTablesData["cycle"][1]["masterKeys"] = array();
	$masterTablesData["cycle"][1]["masterKeys"][]="idfiliere";
				$masterTablesData["cycle"][1]["detailKeys"] = array();
	$masterTablesData["cycle"][1]["detailKeys"][]="filiere";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cycle()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idcycle,  	codecycle,  	nomcycle,  	filiere";
$proto3["m_strFrom"] = "FROM `cycle`";
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
	"m_strName" => "idcycle",
	"m_strTable" => "cycle",
	"m_srcTableName" => "cycle"
));

$proto9["m_sql"] = "idcycle";
$proto9["m_srcTableName"] = "cycle";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "codecycle",
	"m_strTable" => "cycle",
	"m_srcTableName" => "cycle"
));

$proto11["m_sql"] = "codecycle";
$proto11["m_srcTableName"] = "cycle";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nomcycle",
	"m_strTable" => "cycle",
	"m_srcTableName" => "cycle"
));

$proto13["m_sql"] = "nomcycle";
$proto13["m_srcTableName"] = "cycle";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "filiere",
	"m_strTable" => "cycle",
	"m_srcTableName" => "cycle"
));

$proto15["m_sql"] = "filiere";
$proto15["m_srcTableName"] = "cycle";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "cycle";
$proto18["m_srcTableName"] = "cycle";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idcycle";
$proto18["m_columns"][] = "codecycle";
$proto18["m_columns"][] = "nomcycle";
$proto18["m_columns"][] = "filiere";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "`cycle`";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "cycle";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="cycle";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_cycle = createSqlQuery_cycle();


	
		;

				

$tdatacycle[".sqlquery"] = $queryData_cycle;

$tableEvents["cycle"] = new eventsBase;
$tdatacycle[".hasEvents"] = false;

?>