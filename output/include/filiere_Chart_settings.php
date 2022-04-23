<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafiliere_Chart = array();
	$tdatafiliere_Chart[".truncateText"] = true;
	$tdatafiliere_Chart[".NumberOfChars"] = 80;
	$tdatafiliere_Chart[".ShortName"] = "filiere_Chart";
	$tdatafiliere_Chart[".OwnerID"] = "";
	$tdatafiliere_Chart[".OriginalTable"] = "filiere";

//	field labels
$fieldLabelsfiliere_Chart = array();
$fieldToolTipsfiliere_Chart = array();
$pageTitlesfiliere_Chart = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfiliere_Chart["French"] = array();
	$fieldToolTipsfiliere_Chart["French"] = array();
	$pageTitlesfiliere_Chart["French"] = array();
	$fieldLabelsfiliere_Chart["French"]["idfiliere"] = "Idfiliere";
	$fieldToolTipsfiliere_Chart["French"]["idfiliere"] = "";
	$fieldLabelsfiliere_Chart["French"]["codefiliere"] = "Codefiliere";
	$fieldToolTipsfiliere_Chart["French"]["codefiliere"] = "";
	$fieldLabelsfiliere_Chart["French"]["nomfiliere"] = "Nomfiliere";
	$fieldToolTipsfiliere_Chart["French"]["nomfiliere"] = "";
	if (count($fieldToolTipsfiliere_Chart["French"]))
		$tdatafiliere_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfiliere_Chart[""] = array();
	$fieldToolTipsfiliere_Chart[""] = array();
	$pageTitlesfiliere_Chart[""] = array();
	if (count($fieldToolTipsfiliere_Chart[""]))
		$tdatafiliere_Chart[".isUseToolTips"] = true;
}


	$tdatafiliere_Chart[".NCSearch"] = true;

	$tdatafiliere_Chart[".ChartRefreshTime"] = 0;


$tdatafiliere_Chart[".shortTableName"] = "filiere_Chart";
$tdatafiliere_Chart[".nSecOptions"] = 0;
$tdatafiliere_Chart[".recsPerRowPrint"] = 1;
$tdatafiliere_Chart[".mainTableOwnerID"] = "";
$tdatafiliere_Chart[".moveNext"] = 1;
$tdatafiliere_Chart[".entityType"] = 3;

$tdatafiliere_Chart[".strOriginalTableName"] = "filiere";

	



$tdatafiliere_Chart[".showAddInPopup"] = false;

$tdatafiliere_Chart[".showEditInPopup"] = false;

$tdatafiliere_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafiliere_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafiliere_Chart[".fieldsForRegister"] = array();
	
$tdatafiliere_Chart[".listAjax"] = false;

	$tdatafiliere_Chart[".audit"] = false;

	$tdatafiliere_Chart[".locking"] = false;

$tdatafiliere_Chart[".edit"] = true;
$tdatafiliere_Chart[".afterEditAction"] = 1;
$tdatafiliere_Chart[".closePopupAfterEdit"] = 1;
$tdatafiliere_Chart[".afterEditActionDetTable"] = "";

$tdatafiliere_Chart[".add"] = true;
$tdatafiliere_Chart[".afterAddAction"] = 1;
$tdatafiliere_Chart[".closePopupAfterAdd"] = 1;
$tdatafiliere_Chart[".afterAddActionDetTable"] = "";

$tdatafiliere_Chart[".list"] = true;

$tdatafiliere_Chart[".view"] = true;




$tdatafiliere_Chart[".delete"] = true;

$tdatafiliere_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafiliere_Chart[".searchSaving"] = false;
//

$tdatafiliere_Chart[".showSearchPanel"] = true;
		$tdatafiliere_Chart[".flexibleSearch"] = true;

$tdatafiliere_Chart[".isUseAjaxSuggest"] = true;




$tdatafiliere_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafiliere_Chart[".isUseTimeForSearch"] = false;





$tdatafiliere_Chart[".allSearchFields"] = array();
$tdatafiliere_Chart[".filterFields"] = array();
$tdatafiliere_Chart[".requiredSearchFields"] = array();

$tdatafiliere_Chart[".allSearchFields"][] = "idfiliere";
	$tdatafiliere_Chart[".allSearchFields"][] = "codefiliere";
	$tdatafiliere_Chart[".allSearchFields"][] = "nomfiliere";
	

$tdatafiliere_Chart[".googleLikeFields"] = array();
$tdatafiliere_Chart[".googleLikeFields"][] = "idfiliere";
$tdatafiliere_Chart[".googleLikeFields"][] = "codefiliere";
$tdatafiliere_Chart[".googleLikeFields"][] = "nomfiliere";


$tdatafiliere_Chart[".advSearchFields"] = array();
$tdatafiliere_Chart[".advSearchFields"][] = "idfiliere";
$tdatafiliere_Chart[".advSearchFields"][] = "codefiliere";
$tdatafiliere_Chart[".advSearchFields"][] = "nomfiliere";

$tdatafiliere_Chart[".tableType"] = "chart";

$tdatafiliere_Chart[".printerPageOrientation"] = 0;
$tdatafiliere_Chart[".nPrinterPageScale"] = 100;

$tdatafiliere_Chart[".nPrinterSplitRecords"] = 40;

$tdatafiliere_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatafiliere_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatafiliere_Chart[".chartType"] = "2DPie";
// end of chart settings


$tdatafiliere_Chart[".listGridLayout"] = 3;

$tdatafiliere_Chart[".isDisplayLoading"] = true;

$tdatafiliere_Chart[".isResizeColumns"] = true;



// view page pdf
$tdatafiliere_Chart[".isViewPagePDF"] = true;
$tdatafiliere_Chart[".nViewPagePDFScale"] = 100;

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafiliere_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatafiliere_Chart[".orderindexes"] = array();

$tdatafiliere_Chart[".sqlHead"] = "SELECT idfiliere,  	codefiliere,  	nomfiliere";
$tdatafiliere_Chart[".sqlFrom"] = "FROM filiere";
$tdatafiliere_Chart[".sqlWhereExpr"] = "";
$tdatafiliere_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafiliere_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafiliere_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatafiliere_Chart[".highlightSearchResults"] = true;

$tableKeysfiliere_Chart = array();
$tableKeysfiliere_Chart[] = "idfiliere";
$tdatafiliere_Chart[".Keys"] = $tableKeysfiliere_Chart;

$tdatafiliere_Chart[".listFields"] = array();
$tdatafiliere_Chart[".listFields"][] = "idfiliere";
$tdatafiliere_Chart[".listFields"][] = "codefiliere";
$tdatafiliere_Chart[".listFields"][] = "nomfiliere";

$tdatafiliere_Chart[".hideMobileList"] = array();


$tdatafiliere_Chart[".viewFields"] = array();
$tdatafiliere_Chart[".viewFields"][] = "idfiliere";
$tdatafiliere_Chart[".viewFields"][] = "codefiliere";
$tdatafiliere_Chart[".viewFields"][] = "nomfiliere";

$tdatafiliere_Chart[".addFields"] = array();
$tdatafiliere_Chart[".addFields"][] = "codefiliere";
$tdatafiliere_Chart[".addFields"][] = "nomfiliere";

$tdatafiliere_Chart[".masterListFields"] = array();
$tdatafiliere_Chart[".masterListFields"][] = "idfiliere";
$tdatafiliere_Chart[".masterListFields"][] = "codefiliere";
$tdatafiliere_Chart[".masterListFields"][] = "nomfiliere";

$tdatafiliere_Chart[".inlineAddFields"] = array();
$tdatafiliere_Chart[".inlineAddFields"][] = "codefiliere";
$tdatafiliere_Chart[".inlineAddFields"][] = "nomfiliere";

$tdatafiliere_Chart[".editFields"] = array();
$tdatafiliere_Chart[".editFields"][] = "codefiliere";
$tdatafiliere_Chart[".editFields"][] = "nomfiliere";

$tdatafiliere_Chart[".inlineEditFields"] = array();
$tdatafiliere_Chart[".inlineEditFields"][] = "codefiliere";
$tdatafiliere_Chart[".inlineEditFields"][] = "nomfiliere";

$tdatafiliere_Chart[".exportFields"] = array();
$tdatafiliere_Chart[".exportFields"][] = "idfiliere";
$tdatafiliere_Chart[".exportFields"][] = "codefiliere";
$tdatafiliere_Chart[".exportFields"][] = "nomfiliere";

$tdatafiliere_Chart[".importFields"] = array();
$tdatafiliere_Chart[".importFields"][] = "idfiliere";
$tdatafiliere_Chart[".importFields"][] = "codefiliere";
$tdatafiliere_Chart[".importFields"][] = "nomfiliere";

$tdatafiliere_Chart[".printFields"] = array();
$tdatafiliere_Chart[".printFields"][] = "idfiliere";
$tdatafiliere_Chart[".printFields"][] = "codefiliere";
$tdatafiliere_Chart[".printFields"][] = "nomfiliere";

//	idfiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idfiliere";
	$fdata["GoodName"] = "idfiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere_Chart","idfiliere");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idfiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idfiliere";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafiliere_Chart["idfiliere"] = $fdata;
//	codefiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codefiliere";
	$fdata["GoodName"] = "codefiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere_Chart","codefiliere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "codefiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codefiliere";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafiliere_Chart["codefiliere"] = $fdata;
//	nomfiliere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nomfiliere";
	$fdata["GoodName"] = "nomfiliere";
	$fdata["ownerTable"] = "filiere";
	$fdata["Label"] = GetFieldLabel("filiere_Chart","nomfiliere");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nomfiliere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomfiliere";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafiliere_Chart["nomfiliere"] = $fdata;

	$tdatafiliere_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">filiere Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatafiliere_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">idfiliere</attr>';
	$tdatafiliere_Chart[".chartXml"] .= '</attr>';
	$tdatafiliere_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">nomfiliere</attr>
	</attr>';
	$tdatafiliere_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafiliere_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("filiere Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("idfiliere").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatafiliere_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafiliere_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">idfiliere</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("filiere_Chart","idfiliere")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafiliere_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">codefiliere</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("filiere_Chart","codefiliere")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafiliere_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">nomfiliere</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("filiere_Chart","nomfiliere")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafiliere_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">filiere Chart</attr>
<attr value="short_table_name">filiere_Chart</attr>
</attr>

</chart>';

$tables_data["filiere Chart"]=&$tdatafiliere_Chart;
$field_labels["filiere_Chart"] = &$fieldLabelsfiliere_Chart;
$fieldToolTips["filiere_Chart"] = &$fieldToolTipsfiliere_Chart;
$page_titles["filiere_Chart"] = &$pageTitlesfiliere_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["filiere Chart"] = array();
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
		
	$detailsTablesData["filiere Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["filiere Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["filiere Chart"][$dIndex]["masterKeys"][]="idfiliere";

				$detailsTablesData["filiere Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["filiere Chart"][$dIndex]["detailKeys"][]="filiere";

// tables which are master tables for current table (detail)
$masterTablesData["filiere Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_filiere_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idfiliere,  	codefiliere,  	nomfiliere";
$proto0["m_strFrom"] = "FROM filiere";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idfiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere Chart"
));

$proto6["m_sql"] = "idfiliere";
$proto6["m_srcTableName"] = "filiere Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codefiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere Chart"
));

$proto8["m_sql"] = "codefiliere";
$proto8["m_srcTableName"] = "filiere Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nomfiliere",
	"m_strTable" => "filiere",
	"m_srcTableName" => "filiere Chart"
));

$proto10["m_sql"] = "nomfiliere";
$proto10["m_srcTableName"] = "filiere Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "filiere";
$proto13["m_srcTableName"] = "filiere Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idfiliere";
$proto13["m_columns"][] = "codefiliere";
$proto13["m_columns"][] = "nomfiliere";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "filiere";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "filiere Chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="filiere Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_filiere_Chart = createSqlQuery_filiere_Chart();


	
		;

			

$tdatafiliere_Chart[".sqlquery"] = $queryData_filiere_Chart;

$tableEvents["filiere Chart"] = new eventsBase;
$tdatafiliere_Chart[".hasEvents"] = false;

?>