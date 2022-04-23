<?php
require_once(getabspath("classes/cipherer.php"));




$tdatanote = array();
	$tdatanote[".truncateText"] = true;
	$tdatanote[".NumberOfChars"] = 80;
	$tdatanote[".ShortName"] = "note";
	$tdatanote[".OwnerID"] = "";
	$tdatanote[".OriginalTable"] = "note";

//	field labels
$fieldLabelsnote = array();
$fieldToolTipsnote = array();
$pageTitlesnote = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsnote["French"] = array();
	$fieldToolTipsnote["French"] = array();
	$pageTitlesnote["French"] = array();
	$fieldLabelsnote["French"]["idnote"] = "Idnote";
	$fieldToolTipsnote["French"]["idnote"] = "";
	$fieldLabelsnote["French"]["idetudiant"] = "Idetudiant";
	$fieldToolTipsnote["French"]["idetudiant"] = "";
	$fieldLabelsnote["French"]["idmatiere"] = "Idmatiere";
	$fieldToolTipsnote["French"]["idmatiere"] = "";
	$fieldLabelsnote["French"]["idcontrole"] = "DateControle";
	$fieldToolTipsnote["French"]["idcontrole"] = "";
	$fieldLabelsnote["French"]["note"] = "Note";
	$fieldToolTipsnote["French"]["note"] = "";
	if (count($fieldToolTipsnote["French"]))
		$tdatanote[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsnote[""] = array();
	$fieldToolTipsnote[""] = array();
	$pageTitlesnote[""] = array();
	if (count($fieldToolTipsnote[""]))
		$tdatanote[".isUseToolTips"] = true;
}


	$tdatanote[".NCSearch"] = true;



$tdatanote[".shortTableName"] = "note";
$tdatanote[".nSecOptions"] = 0;
$tdatanote[".recsPerRowPrint"] = 1;
$tdatanote[".mainTableOwnerID"] = "";
$tdatanote[".moveNext"] = 1;
$tdatanote[".entityType"] = 0;

$tdatanote[".strOriginalTableName"] = "note";

	



$tdatanote[".showAddInPopup"] = true;

$tdatanote[".showEditInPopup"] = true;

$tdatanote[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view_bootstrap_2col";
			;
$popupPagesLayoutNames["edit"] = "view_bootstrap_2col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatanote[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanote[".fieldsForRegister"] = array();
	
	$tdatanote[".listAjax"] = true;

	$tdatanote[".audit"] = false;

	$tdatanote[".locking"] = false;



$tdatanote[".list"] = true;

$tdatanote[".inlineEdit"] = true;
$tdatanote[".inlineAdd"] = true;
$tdatanote[".view"] = true;

$tdatanote[".import"] = true;

$tdatanote[".exportTo"] = true;

$tdatanote[".printFriendly"] = true;

$tdatanote[".delete"] = true;

$tdatanote[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatanote[".searchSaving"] = false;
//

$tdatanote[".showSearchPanel"] = true;
		$tdatanote[".flexibleSearch"] = true;

$tdatanote[".isUseAjaxSuggest"] = true;

$tdatanote[".rowHighlite"] = true;



$tdatanote[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanote[".isUseTimeForSearch"] = false;



$tdatanote[".badgeColor"] = "4169E1";


$tdatanote[".allSearchFields"] = array();
$tdatanote[".filterFields"] = array();
$tdatanote[".requiredSearchFields"] = array();

$tdatanote[".allSearchFields"][] = "idnote";
	$tdatanote[".allSearchFields"][] = "idetudiant";
	$tdatanote[".allSearchFields"][] = "idmatiere";
	$tdatanote[".allSearchFields"][] = "idcontrole";
	$tdatanote[".allSearchFields"][] = "note";
	

$tdatanote[".googleLikeFields"] = array();
$tdatanote[".googleLikeFields"][] = "idnote";
$tdatanote[".googleLikeFields"][] = "idetudiant";
$tdatanote[".googleLikeFields"][] = "idmatiere";
$tdatanote[".googleLikeFields"][] = "idcontrole";
$tdatanote[".googleLikeFields"][] = "note";


$tdatanote[".advSearchFields"] = array();
$tdatanote[".advSearchFields"][] = "idnote";
$tdatanote[".advSearchFields"][] = "idetudiant";
$tdatanote[".advSearchFields"][] = "idmatiere";
$tdatanote[".advSearchFields"][] = "idcontrole";
$tdatanote[".advSearchFields"][] = "note";

$tdatanote[".tableType"] = "list";

$tdatanote[".printerPageOrientation"] = 0;
$tdatanote[".nPrinterPageScale"] = 100;

$tdatanote[".nPrinterSplitRecords"] = 40;

$tdatanote[".nPrinterPDFSplitRecords"] = 40;



$tdatanote[".geocodingEnabled"] = false;





$tdatanote[".listGridLayout"] = 3;

$tdatanote[".isDisplayLoading"] = true;

$tdatanote[".isResizeColumns"] = true;



// view page pdf
$tdatanote[".isViewPagePDF"] = true;
$tdatanote[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatanote[".isPrinterPagePDF"] = true;
$tdatanote[".nPrinterPagePDFScale"] = 100;


$tdatanote[".pageSize"] = 20;

$tdatanote[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanote[".strOrderBy"] = $tstrOrderBy;

$tdatanote[".orderindexes"] = array();

$tdatanote[".sqlHead"] = "SELECT idnote,  	idetudiant,  	idmatiere,  	idcontrole,  	note";
$tdatanote[".sqlFrom"] = "FROM note";
$tdatanote[".sqlWhereExpr"] = "";
$tdatanote[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanote[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanote[".arrGroupsPerPage"] = $arrGPP;

$tdatanote[".highlightSearchResults"] = true;

$tableKeysnote = array();
$tableKeysnote[] = "idnote";
$tdatanote[".Keys"] = $tableKeysnote;

$tdatanote[".listFields"] = array();
$tdatanote[".listFields"][] = "idnote";
$tdatanote[".listFields"][] = "idetudiant";
$tdatanote[".listFields"][] = "idmatiere";
$tdatanote[".listFields"][] = "idcontrole";
$tdatanote[".listFields"][] = "note";

$tdatanote[".hideMobileList"] = array();


$tdatanote[".viewFields"] = array();
$tdatanote[".viewFields"][] = "idnote";
$tdatanote[".viewFields"][] = "idetudiant";
$tdatanote[".viewFields"][] = "idmatiere";
$tdatanote[".viewFields"][] = "idcontrole";
$tdatanote[".viewFields"][] = "note";

$tdatanote[".addFields"] = array();

$tdatanote[".masterListFields"] = array();
$tdatanote[".masterListFields"][] = "idnote";
$tdatanote[".masterListFields"][] = "idetudiant";
$tdatanote[".masterListFields"][] = "idmatiere";
$tdatanote[".masterListFields"][] = "idcontrole";
$tdatanote[".masterListFields"][] = "note";

$tdatanote[".inlineAddFields"] = array();
$tdatanote[".inlineAddFields"][] = "idetudiant";
$tdatanote[".inlineAddFields"][] = "idmatiere";
$tdatanote[".inlineAddFields"][] = "idcontrole";
$tdatanote[".inlineAddFields"][] = "note";

$tdatanote[".editFields"] = array();

$tdatanote[".inlineEditFields"] = array();
$tdatanote[".inlineEditFields"][] = "idetudiant";
$tdatanote[".inlineEditFields"][] = "idmatiere";
$tdatanote[".inlineEditFields"][] = "idcontrole";
$tdatanote[".inlineEditFields"][] = "note";

$tdatanote[".exportFields"] = array();
$tdatanote[".exportFields"][] = "idnote";
$tdatanote[".exportFields"][] = "idetudiant";
$tdatanote[".exportFields"][] = "idmatiere";
$tdatanote[".exportFields"][] = "idcontrole";
$tdatanote[".exportFields"][] = "note";

$tdatanote[".importFields"] = array();
$tdatanote[".importFields"][] = "idnote";
$tdatanote[".importFields"][] = "idetudiant";
$tdatanote[".importFields"][] = "idmatiere";
$tdatanote[".importFields"][] = "idcontrole";
$tdatanote[".importFields"][] = "note";

$tdatanote[".printFields"] = array();
$tdatanote[".printFields"][] = "idnote";
$tdatanote[".printFields"][] = "idetudiant";
$tdatanote[".printFields"][] = "idmatiere";
$tdatanote[".printFields"][] = "idcontrole";
$tdatanote[".printFields"][] = "note";

//	idnote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idnote";
	$fdata["GoodName"] = "idnote";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note","idnote");
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




	$tdatanote["idnote"] = $fdata;
//	idetudiant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idetudiant";
	$fdata["GoodName"] = "idetudiant";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note","idetudiant");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["DisplayField"] = "noms";

	
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




	$tdatanote["idetudiant"] = $fdata;
//	idmatiere
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idmatiere";
	$fdata["GoodName"] = "idmatiere";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note","idmatiere");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["DisplayField"] = "nommatiere";

	
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




	$tdatanote["idmatiere"] = $fdata;
//	idcontrole
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idcontrole";
	$fdata["GoodName"] = "idcontrole";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note","idcontrole");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["DisplayField"] = "datecont";

	
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




	$tdatanote["idcontrole"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "note";
	$fdata["Label"] = GetFieldLabel("note","note");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
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




	$tdatanote["note"] = $fdata;


$tables_data["note"]=&$tdatanote;
$field_labels["note"] = &$fieldLabelsnote;
$fieldToolTips["note"] = &$fieldToolTipsnote;
$page_titles["note"] = &$pageTitlesnote;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["note"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["note"] = array();


	
				$strOriginalDetailsTable="controle";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="controle";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "controle";
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
					$masterTablesData["note"][0] = $masterParams;
				$masterTablesData["note"][0]["masterKeys"] = array();
	$masterTablesData["note"][0]["masterKeys"][]="idcontrole";
				$masterTablesData["note"][0]["detailKeys"] = array();
	$masterTablesData["note"][0]["detailKeys"][]="idcontrole";
		
	
				$strOriginalDetailsTable="etudiant";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="etudiant";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "etudiant";
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
					$masterTablesData["note"][1] = $masterParams;
				$masterTablesData["note"][1]["masterKeys"] = array();
	$masterTablesData["note"][1]["masterKeys"][]="idetudiant";
				$masterTablesData["note"][1]["detailKeys"] = array();
	$masterTablesData["note"][1]["detailKeys"][]="idetudiant";
		
	
				$strOriginalDetailsTable="matiere";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="matiere";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "matiere";
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
					$masterTablesData["note"][2] = $masterParams;
				$masterTablesData["note"][2]["masterKeys"] = array();
	$masterTablesData["note"][2]["masterKeys"][]="idmatriere";
				$masterTablesData["note"][2]["detailKeys"] = array();
	$masterTablesData["note"][2]["detailKeys"][]="idmatiere";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_note()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idnote,  	idetudiant,  	idmatiere,  	idcontrole,  	note";
$proto3["m_strFrom"] = "FROM note";
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
	"m_strName" => "idnote",
	"m_strTable" => "note",
	"m_srcTableName" => "note"
));

$proto9["m_sql"] = "idnote";
$proto9["m_srcTableName"] = "note";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "idetudiant",
	"m_strTable" => "note",
	"m_srcTableName" => "note"
));

$proto11["m_sql"] = "idetudiant";
$proto11["m_srcTableName"] = "note";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "idmatiere",
	"m_strTable" => "note",
	"m_srcTableName" => "note"
));

$proto13["m_sql"] = "idmatiere";
$proto13["m_srcTableName"] = "note";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "idcontrole",
	"m_strTable" => "note",
	"m_srcTableName" => "note"
));

$proto15["m_sql"] = "idcontrole";
$proto15["m_srcTableName"] = "note";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "note",
	"m_srcTableName" => "note"
));

$proto17["m_sql"] = "note";
$proto17["m_srcTableName"] = "note";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "note";
$proto20["m_srcTableName"] = "note";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "idnote";
$proto20["m_columns"][] = "idetudiant";
$proto20["m_columns"][] = "idmatiere";
$proto20["m_columns"][] = "idcontrole";
$proto20["m_columns"][] = "note";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "note";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "note";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="note";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_note = createSqlQuery_note();


	
		;

					

$tdatanote[".sqlquery"] = $queryData_note;

$tableEvents["note"] = new eventsBase;
$tdatanote[".hasEvents"] = false;

?>