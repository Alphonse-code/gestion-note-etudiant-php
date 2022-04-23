<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanote_Chart = array();
	$tdatanote_Chart[".truncateText"] = true;
	$tdatanote_Chart[".NumberOfChars"] = 80;
	$tdatanote_Chart[".ShortName"] = "note_Chart";
	$tdatanote_Chart[".OwnerID"] = "";
	$tdatanote_Chart[".OriginalTable"] = "note";

//	field labels
$fieldLabelsnote_Chart = array();
$fieldToolTipsnote_Chart = array();
$pageTitlesnote_Chart = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsnote_Chart["French"] = array();
	$fieldToolTipsnote_Chart["French"] = array();
	$pageTitlesnote_Chart["French"] = array();
	$fieldLabelsnote_Chart["French"]["idnote"] = "Idnote";
	$fieldToolTipsnote_Chart["French"]["idnote"] = "";
	$fieldLabelsnote_Chart["French"]["idetudiant"] = "Idetudiant";
	$fieldToolTipsnote_Chart["French"]["idetudiant"] = "";
	$fieldLabelsnote_Chart["French"]["idmatiere"] = "Idmatiere";
	$fieldToolTipsnote_Chart["French"]["idmatiere"] = "";
	$fieldLabelsnote_Chart["French"]["idcontrole"] = "Idcontrole";
	$fieldToolTipsnote_Chart["French"]["idcontrole"] = "";
	$fieldLabelsnote_Chart["French"]["note"] = "Note";
	$fieldToolTipsnote_Chart["French"]["note"] = "";
	if (count($fieldToolTipsnote_Chart["French"]))
		$tdatanote_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnote_Chart[""] = array();
	$fieldToolTipsnote_Chart[""] = array();
	$pageTitlesnote_Chart[""] = array();
	if (count($fieldToolTipsnote_Chart[""]))
		$tdatanote_Chart[".isUseToolTips"] = true;
}


	$tdatanote_Chart[".NCSearch"] = true;

	$tdatanote_Chart[".ChartRefreshTime"] = 0;


$tdatanote_Chart[".shortTableName"] = "note_Chart";
$tdatanote_Chart[".nSecOptions"] = 0;
$tdatanote_Chart[".recsPerRowPrint"] = 1;
$tdatanote_Chart[".mainTableOwnerID"] = "";
$tdatanote_Chart[".moveNext"] = 1;
$tdatanote_Chart[".entityType"] = 3;

$tdatanote_Chart[".strOriginalTableName"] = "note";

	



$tdatanote_Chart[".showAddInPopup"] = false;

$tdatanote_Chart[".showEditInPopup"] = false;

$tdatanote_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanote_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanote_Chart[".fieldsForRegister"] = array();
	
$tdatanote_Chart[".listAjax"] = false;

	$tdatanote_Chart[".audit"] = false;

	$tdatanote_Chart[".locking"] = false;

$tdatanote_Chart[".edit"] = true;
$tdatanote_Chart[".afterEditAction"] = 1;
$tdatanote_Chart[".closePopupAfterEdit"] = 1;
$tdatanote_Chart[".afterEditActionDetTable"] = "";

$tdatanote_Chart[".add"] = true;
$tdatanote_Chart[".afterAddAction"] = 1;
$tdatanote_Chart[".closePopupAfterAdd"] = 1;
$tdatanote_Chart[".afterAddActionDetTable"] = "";

$tdatanote_Chart[".list"] = true;

$tdatanote_Chart[".view"] = true;




$tdatanote_Chart[".delete"] = true;

$tdatanote_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatanote_Chart[".searchSaving"] = false;
//

$tdatanote_Chart[".showSearchPanel"] = true;
		$tdatanote_Chart[".flexibleSearch"] = true;

$tdatanote_Chart[".isUseAjaxSuggest"] = true;




$tdatanote_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanote_Chart[".isUseTimeForSearch"] = false;



$tdatanote_Chart[".badgeColor"] = "EDCA00";


$tdatanote_Chart[".allSearchFields"] = array();
$tdatanote_Chart[".filterFields"] = array();
$tdatanote_Chart[".requiredSearchFields"] = array();

$tdatanote_Chart[".allSearchFields"][] = "idnote";
	$tdatanote_Chart[".allSearchFields"][] = "idetudiant";
	$tdatanote_Chart[".allSearchFields"][] = "idmatiere";
	$tdatanote_Chart[".allSearchFields"][] = "idcontrole";
	$tdatanote_Chart[".allSearchFields"][] = "note";
	

$tdatanote_Chart[".googleLikeFields"] = array();
$tdatanote_Chart[".googleLikeFields"][] = "idnote";
$tdatanote_Chart[".googleLikeFields"][] = "idetudiant";
$tdatanote_Chart[".googleLikeFields"][] = "idmatiere";
$tdatanote_Chart[".googleLikeFields"][] = "idcontrole";
$tdatanote_Chart[".googleLikeFields"][] = "note";


$tdatanote_Chart[".advSearchFields"] = array();
$tdatanote_Chart[".advSearchFields"][] = "idnote";
$tdatanote_Chart[".advSearchFields"][] = "idetudiant";
$tdatanote_Chart[".advSearchFields"][] = "idmatiere";
$tdatanote_Chart[".advSearchFields"][] = "idcontrole";
$tdatanote_Chart[".advSearchFields"][] = "note";

$tdatanote_Chart[".tableType"] = "chart";

$tdatanote_Chart[".printerPageOrientation"] = 0;
$tdatanote_Chart[".nPrinterPageScale"] = 100;

$tdatanote_Chart[".nPrinterSplitRecords"] = 40;

$tdatanote_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatanote_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatanote_Chart[".chartType"] = "Combined";
// end of chart settings


$tdatanote_Chart[".listGridLayout"] = 3;

$tdatanote_Chart[".isDisplayLoading"] = true;

$tdatanote_Chart[".isResizeColumns"] = true;



// view page pdf
$tdatanote_Chart[".isViewPagePDF"] = true;
$tdatanote_Chart[".nViewPagePDFScale"] = 100;

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanote_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatanote_Chart[".orderindexes"] = array();

$tdatanote_Chart[".sqlHead"] = "SELECT idnote,  	idetudiant,  	idmatiere,  	idcontrole,  	note";
$tdatanote_Chart[".sqlFrom"] = "FROM note";
$tdatanote_Chart[".sqlWhereExpr"] = "";
$tdatanote_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanote_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanote_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatanote_Chart[".highlightSearchResults"] = true;

$tableKeysnote_Chart = array();
$tableKeysnote_Chart[] = "idnote";
$tdatanote_Chart[".Keys"] = $tableKeysnote_Chart;

$tdatanote_Chart[".listFields"] = array();
$tdatanote_Chart[".listFields"][] = "idnote";
$tdatanote_Chart[".listFields"][] = "idetudiant";
$tdatanote_Chart[".listFields"][] = "idmatiere";
$tdatanote_Chart[".listFields"][] = "idcontrole";
$tdatanote_Chart[".listFields"][] = "note";

$tdatanote_Chart[".hideMobileList"] = array();


$tdatanote_Chart[".viewFields"] = array();
$tdatanote_Chart[".viewFields"][] = "idnote";
$tdatanote_Chart[".viewFields"][] = "idetudiant";
$tdatanote_Chart[".viewFields"][] = "idmatiere";
$tdatanote_Chart[".viewFields"][] = "idcontrole";
$tdatanote_Chart[".viewFields"][] = "note";

$tdatanote_Chart[".addFields"] = array();
$tdatanote_Chart[".addFields"][] = "idetudiant";
$tdatanote_Chart[".addFields"][] = "idmatiere";
$tdatanote_Chart[".addFields"][] = "idcontrole";
$tdatanote_Chart[".addFields"][] = "note";

$tdatanote_Chart[".masterListFields"] = array();
$tdatanote_Chart[".masterListFields"][] = "idnote";
$tdatanote_Chart[".masterListFields"][] = "idetudiant";
$tdatanote_Chart[".masterListFields"][] = "idmatiere";
$tdatanote_Chart[".masterListFields"][] = "idcontrole";
$tdatanote_Chart[".masterListFields"][] = "note";

$tdatanote_Chart[".inlineAddFields"] = array();
$tdatanote_Chart[".inlineAddFields"][] = "idetudiant";
$tdatanote_Chart[".inlineAddFields"][] = "idmatiere";
$tdatanote_Chart[".inlineAddFields"][] = "idcontrole";
$tdatanote_Chart[".inlineAddFields"][] = "note";

$tdatanote_Chart[".editFields"] = array();
$tdatanote_Chart[".editFields"][] = "idetudiant";
$tdatanote_Chart[".editFields"][] = "idmatiere";
$tdatanote_Chart[".editFields"][] = "idcontrole";
$tdatanote_Chart[".editFields"][] = "note";

$tdatanote_Chart[".inlineEditFields"] = array();
$tdatanote_Chart[".inlineEditFields"][] = "idetudiant";
$tdatanote_Chart[".inlineEditFields"][] = "idmatiere";
$tdatanote_Chart[".inlineEditFields"][] = "idcontrole";
$tdatanote_Chart[".inlineEditFields"][] = "note";

$tdatanote_Chart[".exportFields"] = array();
$tdatanote_Chart[".exportFields"][] = "idnote";
$tdatanote_Chart[".exportFields"][] = "idetudiant";
$tdatanote_Chart[".exportFields"][] = "idmatiere";
$tdatanote_Chart[".exportFields"][] = "idcontrole";
$tdatanote_Chart[".exportFields"][] = "note";

$tdatanote_Chart[".importFields"] = array();
$tdatanote_Chart[".importFields"][] = "idnote";
$tdatanote_Chart[".importFields"][] = "idetudiant";
$tdatanote_Chart[".importFields"][] = "idmatiere";
$tdatanote_Chart[".importFields"][] = "idcontrole";
$tdatanote_Chart[".importFields"][] = "note";

$tdatanote_Chart[".printFields"] = array();
$tdatanote_Chart[".printFields"][] = "idnote";
$tdatanote_Chart[".printFields"][] = "idetudiant";
$tdatanote_Chart[".printFields"][] = "idmatiere";
$tdatanote_Chart[".printFields"][] = "idcontrole";
$tdatanote_Chart[".printFields"][] = "note";

//	idnote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idnote";
	$fdata["GoodName"] = "idnote";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note_Chart","idnote");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idnote";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idnote";

	
	
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




	$tdatanote_Chart["idnote"] = $fdata;
//	idetudiant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idetudiant";
	$fdata["GoodName"] = "idetudiant";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note_Chart","idetudiant");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idetudiant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idetudiant";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "etudiant";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idetudiant";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idetudiant";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanote_Chart["idetudiant"] = $fdata;
//	idmatiere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idmatiere";
	$fdata["GoodName"] = "idmatiere";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note_Chart","idmatiere");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idmatiere";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idmatiere";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "matiere";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idmatriere";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idmatriere";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanote_Chart["idmatiere"] = $fdata;
//	idcontrole
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idcontrole";
	$fdata["GoodName"] = "idcontrole";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note_Chart","idcontrole");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idcontrole";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idcontrole";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "controle";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idcontrole";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idcontrole";

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatanote_Chart["idcontrole"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note_Chart","note");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "note";

	
	
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




	$tdatanote_Chart["note"] = $fdata;

	$tdatanote_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">note Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">combined</attr>
		</attr>

		<attr value="parameters">';
	$tdatanote_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">idetudiant</attr>';
	$tdatanote_Chart[".chartXml"] .= '</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">note</attr>';
	$tdatanote_Chart[".chartXml"] .= '</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="2">
			<attr value="name">idetudiant</attr>';
	$tdatanote_Chart[".chartXml"] .= '</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">note</attr>
	</attr>';
	$tdatanote_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatanote_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("note Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("idetudiant").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatanote_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatanote_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">idnote</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("note_Chart","idnote")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">idetudiant</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("note_Chart","idetudiant")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">idmatiere</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("note_Chart","idmatiere")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">idcontrole</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("note_Chart","idcontrole")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatanote_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">note</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("note_Chart","note")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatanote_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">note Chart</attr>
<attr value="short_table_name">note_Chart</attr>
</attr>

</chart>';

$tables_data["note Chart"]=&$tdatanote_Chart;
$field_labels["note_Chart"] = &$fieldLabelsnote_Chart;
$fieldToolTips["note_Chart"] = &$fieldToolTipsnote_Chart;
$page_titles["note_Chart"] = &$pageTitlesnote_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["note Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["note Chart"] = array();


	
				$strOriginalDetailsTable="controle";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="controle";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "controle";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["note Chart"][0] = $masterParams;
				$masterTablesData["note Chart"][0]["masterKeys"] = array();
	$masterTablesData["note Chart"][0]["masterKeys"][]="idcontrole";
				$masterTablesData["note Chart"][0]["detailKeys"] = array();
	$masterTablesData["note Chart"][0]["detailKeys"][]="idcontrole";
		
	
				$strOriginalDetailsTable="etudiant";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="etudiant";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "etudiant";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["note Chart"][1] = $masterParams;
				$masterTablesData["note Chart"][1]["masterKeys"] = array();
	$masterTablesData["note Chart"][1]["masterKeys"][]="idetudiant";
				$masterTablesData["note Chart"][1]["detailKeys"] = array();
	$masterTablesData["note Chart"][1]["detailKeys"][]="idetudiant";
		
	
				$strOriginalDetailsTable="matiere";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="matiere";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "matiere";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["note Chart"][2] = $masterParams;
				$masterTablesData["note Chart"][2]["masterKeys"] = array();
	$masterTablesData["note Chart"][2]["masterKeys"][]="idmatriere";
				$masterTablesData["note Chart"][2]["detailKeys"] = array();
	$masterTablesData["note Chart"][2]["detailKeys"][]="idmatiere";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_note_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idnote,  	idetudiant,  	idmatiere,  	idcontrole,  	note";
$proto0["m_strFrom"] = "FROM note";
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
	"m_strName" => "idnote",
	"m_strTable" => "note",
	"m_srcTableName" => "note Chart"
));

$proto6["m_sql"] = "idnote";
$proto6["m_srcTableName"] = "note Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idetudiant",
	"m_strTable" => "note",
	"m_srcTableName" => "note Chart"
));

$proto8["m_sql"] = "idetudiant";
$proto8["m_srcTableName"] = "note Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idmatiere",
	"m_strTable" => "note",
	"m_srcTableName" => "note Chart"
));

$proto10["m_sql"] = "idmatiere";
$proto10["m_srcTableName"] = "note Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idcontrole",
	"m_strTable" => "note",
	"m_srcTableName" => "note Chart"
));

$proto12["m_sql"] = "idcontrole";
$proto12["m_srcTableName"] = "note Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "note",
	"m_srcTableName" => "note Chart"
));

$proto14["m_sql"] = "note";
$proto14["m_srcTableName"] = "note Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "note";
$proto17["m_srcTableName"] = "note Chart";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idnote";
$proto17["m_columns"][] = "idetudiant";
$proto17["m_columns"][] = "idmatiere";
$proto17["m_columns"][] = "idcontrole";
$proto17["m_columns"][] = "note";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "note";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "note Chart";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="note Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_note_Chart = createSqlQuery_note_Chart();


	
		;

					

$tdatanote_Chart[".sqlquery"] = $queryData_note_Chart;

$tableEvents["note Chart"] = new eventsBase;
$tdatanote_Chart[".hasEvents"] = false;

?>