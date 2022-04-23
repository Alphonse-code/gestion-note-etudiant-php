<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamatiere = array();
	$tdatamatiere[".truncateText"] = true;
	$tdatamatiere[".NumberOfChars"] = 80;
	$tdatamatiere[".ShortName"] = "matiere";
	$tdatamatiere[".OwnerID"] = "";
	$tdatamatiere[".OriginalTable"] = "matiere";

//	field labels
$fieldLabelsmatiere = array();
$fieldToolTipsmatiere = array();
$pageTitlesmatiere = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsmatiere["French"] = array();
	$fieldToolTipsmatiere["French"] = array();
	$pageTitlesmatiere["French"] = array();
	$fieldLabelsmatiere["French"]["idmatriere"] = "Idmatriere";
	$fieldToolTipsmatiere["French"]["idmatriere"] = "";
	$fieldLabelsmatiere["French"]["codematiere"] = "Codematiere";
	$fieldToolTipsmatiere["French"]["codematiere"] = "";
	$fieldLabelsmatiere["French"]["nommatiere"] = "Nommatiere";
	$fieldToolTipsmatiere["French"]["nommatiere"] = "";
	$fieldLabelsmatiere["French"]["coeff"] = "Coeff";
	$fieldToolTipsmatiere["French"]["coeff"] = "";
	if (count($fieldToolTipsmatiere["French"]))
		$tdatamatiere[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmatiere[""] = array();
	$fieldToolTipsmatiere[""] = array();
	$pageTitlesmatiere[""] = array();
	if (count($fieldToolTipsmatiere[""]))
		$tdatamatiere[".isUseToolTips"] = true;
}


	$tdatamatiere[".NCSearch"] = true;



$tdatamatiere[".shortTableName"] = "matiere";
$tdatamatiere[".nSecOptions"] = 0;
$tdatamatiere[".recsPerRowPrint"] = 1;
$tdatamatiere[".mainTableOwnerID"] = "";
$tdatamatiere[".moveNext"] = 1;
$tdatamatiere[".entityType"] = 0;

$tdatamatiere[".strOriginalTableName"] = "matiere";

	



$tdatamatiere[".showAddInPopup"] = true;

$tdatamatiere[".showEditInPopup"] = true;

$tdatamatiere[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view_bootstrap_2col";
			;
$popupPagesLayoutNames["edit"] = "view_bootstrap_2col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatamatiere[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamatiere[".fieldsForRegister"] = array();
	
	$tdatamatiere[".listAjax"] = true;

	$tdatamatiere[".audit"] = false;

	$tdatamatiere[".locking"] = false;



$tdatamatiere[".list"] = true;

$tdatamatiere[".inlineEdit"] = true;
$tdatamatiere[".inlineAdd"] = true;
$tdatamatiere[".view"] = true;




$tdatamatiere[".delete"] = true;

$tdatamatiere[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatamatiere[".searchSaving"] = false;
//

$tdatamatiere[".showSearchPanel"] = true;
		$tdatamatiere[".flexibleSearch"] = true;

$tdatamatiere[".isUseAjaxSuggest"] = true;

$tdatamatiere[".rowHighlite"] = true;



$tdatamatiere[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamatiere[".isUseTimeForSearch"] = false;





$tdatamatiere[".allSearchFields"] = array();
$tdatamatiere[".filterFields"] = array();
$tdatamatiere[".requiredSearchFields"] = array();

$tdatamatiere[".allSearchFields"][] = "idmatriere";
	$tdatamatiere[".allSearchFields"][] = "codematiere";
	$tdatamatiere[".allSearchFields"][] = "nommatiere";
	$tdatamatiere[".allSearchFields"][] = "coeff";
	

$tdatamatiere[".googleLikeFields"] = array();
$tdatamatiere[".googleLikeFields"][] = "idmatriere";
$tdatamatiere[".googleLikeFields"][] = "codematiere";
$tdatamatiere[".googleLikeFields"][] = "nommatiere";
$tdatamatiere[".googleLikeFields"][] = "coeff";


$tdatamatiere[".advSearchFields"] = array();
$tdatamatiere[".advSearchFields"][] = "idmatriere";
$tdatamatiere[".advSearchFields"][] = "codematiere";
$tdatamatiere[".advSearchFields"][] = "nommatiere";
$tdatamatiere[".advSearchFields"][] = "coeff";

$tdatamatiere[".tableType"] = "list";

$tdatamatiere[".printerPageOrientation"] = 0;
$tdatamatiere[".nPrinterPageScale"] = 100;

$tdatamatiere[".nPrinterSplitRecords"] = 40;

$tdatamatiere[".nPrinterPDFSplitRecords"] = 40;



$tdatamatiere[".geocodingEnabled"] = false;





$tdatamatiere[".listGridLayout"] = 3;

$tdatamatiere[".isDisplayLoading"] = true;

$tdatamatiere[".isResizeColumns"] = true;



// view page pdf
$tdatamatiere[".isViewPagePDF"] = true;
$tdatamatiere[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatamatiere[".pageSize"] = 20;

$tdatamatiere[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamatiere[".strOrderBy"] = $tstrOrderBy;

$tdatamatiere[".orderindexes"] = array();

$tdatamatiere[".sqlHead"] = "SELECT idmatriere,  	codematiere,  	nommatiere,  	coeff";
$tdatamatiere[".sqlFrom"] = "FROM matiere";
$tdatamatiere[".sqlWhereExpr"] = "";
$tdatamatiere[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamatiere[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamatiere[".arrGroupsPerPage"] = $arrGPP;

$tdatamatiere[".highlightSearchResults"] = true;

$tableKeysmatiere = array();
$tableKeysmatiere[] = "idmatriere";
$tdatamatiere[".Keys"] = $tableKeysmatiere;

$tdatamatiere[".listFields"] = array();
$tdatamatiere[".listFields"][] = "idmatriere";
$tdatamatiere[".listFields"][] = "codematiere";
$tdatamatiere[".listFields"][] = "nommatiere";
$tdatamatiere[".listFields"][] = "coeff";

$tdatamatiere[".hideMobileList"] = array();


$tdatamatiere[".viewFields"] = array();
$tdatamatiere[".viewFields"][] = "idmatriere";
$tdatamatiere[".viewFields"][] = "codematiere";
$tdatamatiere[".viewFields"][] = "nommatiere";
$tdatamatiere[".viewFields"][] = "coeff";

$tdatamatiere[".addFields"] = array();

$tdatamatiere[".masterListFields"] = array();
$tdatamatiere[".masterListFields"][] = "idmatriere";
$tdatamatiere[".masterListFields"][] = "codematiere";
$tdatamatiere[".masterListFields"][] = "nommatiere";
$tdatamatiere[".masterListFields"][] = "coeff";

$tdatamatiere[".inlineAddFields"] = array();
$tdatamatiere[".inlineAddFields"][] = "codematiere";
$tdatamatiere[".inlineAddFields"][] = "nommatiere";
$tdatamatiere[".inlineAddFields"][] = "coeff";

$tdatamatiere[".editFields"] = array();

$tdatamatiere[".inlineEditFields"] = array();
$tdatamatiere[".inlineEditFields"][] = "codematiere";
$tdatamatiere[".inlineEditFields"][] = "nommatiere";
$tdatamatiere[".inlineEditFields"][] = "coeff";

$tdatamatiere[".exportFields"] = array();

$tdatamatiere[".importFields"] = array();

$tdatamatiere[".printFields"] = array();

//	idmatriere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idmatriere";
	$fdata["GoodName"] = "idmatriere";
	$fdata["ownerTable"] = "matiere";
	$fdata["Label"] = GetFieldLabel("matiere","idmatriere");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "idmatriere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idmatriere";

	
	
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




	$tdatamatiere["idmatriere"] = $fdata;
//	codematiere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codematiere";
	$fdata["GoodName"] = "codematiere";
	$fdata["ownerTable"] = "matiere";
	$fdata["Label"] = GetFieldLabel("matiere","codematiere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "codematiere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codematiere";

	
	
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




	$tdatamatiere["codematiere"] = $fdata;
//	nommatiere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nommatiere";
	$fdata["GoodName"] = "nommatiere";
	$fdata["ownerTable"] = "matiere";
	$fdata["Label"] = GetFieldLabel("matiere","nommatiere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nommatiere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nommatiere";

	
	
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




	$tdatamatiere["nommatiere"] = $fdata;
//	coeff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "coeff";
	$fdata["GoodName"] = "coeff";
	$fdata["ownerTable"] = "matiere";
	$fdata["Label"] = GetFieldLabel("matiere","coeff");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "coeff";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coeff";

	
	
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




	$tdatamatiere["coeff"] = $fdata;


$tables_data["matiere"]=&$tdatamatiere;
$field_labels["matiere"] = &$fieldLabelsmatiere;
$fieldToolTips["matiere"] = &$fieldToolTipsmatiere;
$page_titles["matiere"] = &$pageTitlesmatiere;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["matiere"] = array();
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
		
	$detailsTablesData["matiere"][$dIndex] = $detailsParam;

	
		$detailsTablesData["matiere"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["matiere"][$dIndex]["masterKeys"][]="idmatriere";

				$detailsTablesData["matiere"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["matiere"][$dIndex]["detailKeys"][]="idmatiere";
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
		
	$detailsTablesData["matiere"][$dIndex] = $detailsParam;

	
		$detailsTablesData["matiere"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["matiere"][$dIndex]["masterKeys"][]="idmatriere";

				$detailsTablesData["matiere"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["matiere"][$dIndex]["detailKeys"][]="idmatiere";

// tables which are master tables for current table (detail)
$masterTablesData["matiere"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_matiere()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idmatriere,  	codematiere,  	nommatiere,  	coeff";
$proto3["m_strFrom"] = "FROM matiere";
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
	"m_strName" => "idmatriere",
	"m_strTable" => "matiere",
	"m_srcTableName" => "matiere"
));

$proto9["m_sql"] = "idmatriere";
$proto9["m_srcTableName"] = "matiere";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "codematiere",
	"m_strTable" => "matiere",
	"m_srcTableName" => "matiere"
));

$proto11["m_sql"] = "codematiere";
$proto11["m_srcTableName"] = "matiere";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nommatiere",
	"m_strTable" => "matiere",
	"m_srcTableName" => "matiere"
));

$proto13["m_sql"] = "nommatiere";
$proto13["m_srcTableName"] = "matiere";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "coeff",
	"m_strTable" => "matiere",
	"m_srcTableName" => "matiere"
));

$proto15["m_sql"] = "coeff";
$proto15["m_srcTableName"] = "matiere";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "matiere";
$proto18["m_srcTableName"] = "matiere";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "idmatriere";
$proto18["m_columns"][] = "codematiere";
$proto18["m_columns"][] = "nommatiere";
$proto18["m_columns"][] = "coeff";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "matiere";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "matiere";
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
$proto3["m_srcTableName"]="matiere";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_matiere = createSqlQuery_matiere();


	
		;

				

$tdatamatiere[".sqlquery"] = $queryData_matiere;

$tableEvents["matiere"] = new eventsBase;
$tdatamatiere[".hasEvents"] = false;

?>