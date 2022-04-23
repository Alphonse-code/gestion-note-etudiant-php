<?php
require_once(getabspath("classes/cipherer.php"));




$tdataetudiant = array();
	$tdataetudiant[".truncateText"] = true;
	$tdataetudiant[".NumberOfChars"] = 80;
	$tdataetudiant[".ShortName"] = "etudiant";
	$tdataetudiant[".OwnerID"] = "";
	$tdataetudiant[".OriginalTable"] = "etudiant";

//	field labels
$fieldLabelsetudiant = array();
$fieldToolTipsetudiant = array();
$pageTitlesetudiant = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsetudiant["French"] = array();
	$fieldToolTipsetudiant["French"] = array();
	$pageTitlesetudiant["French"] = array();
	$fieldLabelsetudiant["French"]["idetudiant"] = "Idetudiant";
	$fieldToolTipsetudiant["French"]["idetudiant"] = "";
	$fieldLabelsetudiant["French"]["matricule"] = "Matricule";
	$fieldToolTipsetudiant["French"]["matricule"] = "";
	$fieldLabelsetudiant["French"]["noms"] = "Noms";
	$fieldToolTipsetudiant["French"]["noms"] = "";
	$fieldLabelsetudiant["French"]["cycle"] = "Cycle";
	$fieldToolTipsetudiant["French"]["cycle"] = "";
	$fieldLabelsetudiant["French"]["niveau"] = "Niveau";
	$fieldToolTipsetudiant["French"]["niveau"] = "";
	$fieldLabelsetudiant["French"]["datenais"] = "Datenais";
	$fieldToolTipsetudiant["French"]["datenais"] = "";
	if (count($fieldToolTipsetudiant["French"]))
		$tdataetudiant[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsetudiant[""] = array();
	$fieldToolTipsetudiant[""] = array();
	$pageTitlesetudiant[""] = array();
	if (count($fieldToolTipsetudiant[""]))
		$tdataetudiant[".isUseToolTips"] = true;
}


	$tdataetudiant[".NCSearch"] = true;



$tdataetudiant[".shortTableName"] = "etudiant";
$tdataetudiant[".nSecOptions"] = 0;
$tdataetudiant[".recsPerRowPrint"] = 1;
$tdataetudiant[".mainTableOwnerID"] = "";
$tdataetudiant[".moveNext"] = 1;
$tdataetudiant[".entityType"] = 0;

$tdataetudiant[".strOriginalTableName"] = "etudiant";

	



$tdataetudiant[".showAddInPopup"] = true;

$tdataetudiant[".showEditInPopup"] = true;

$tdataetudiant[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "register_bootstrap";
			;
$popupPagesLayoutNames["edit"] = "register_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdataetudiant[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataetudiant[".fieldsForRegister"] = array();
	
	$tdataetudiant[".listAjax"] = true;

	$tdataetudiant[".audit"] = false;

	$tdataetudiant[".locking"] = false;



$tdataetudiant[".list"] = true;

$tdataetudiant[".inlineEdit"] = true;
$tdataetudiant[".inlineAdd"] = true;
$tdataetudiant[".view"] = true;




$tdataetudiant[".delete"] = true;

$tdataetudiant[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataetudiant[".searchSaving"] = false;
//

$tdataetudiant[".showSearchPanel"] = true;
		$tdataetudiant[".flexibleSearch"] = true;

$tdataetudiant[".isUseAjaxSuggest"] = true;

$tdataetudiant[".rowHighlite"] = true;



$tdataetudiant[".addPageEvents"] = false;

// use timepicker for search panel
$tdataetudiant[".isUseTimeForSearch"] = false;



$tdataetudiant[".badgeColor"] = "B22222";


$tdataetudiant[".allSearchFields"] = array();
$tdataetudiant[".filterFields"] = array();
$tdataetudiant[".requiredSearchFields"] = array();

$tdataetudiant[".allSearchFields"][] = "idetudiant";
	$tdataetudiant[".allSearchFields"][] = "matricule";
	$tdataetudiant[".allSearchFields"][] = "noms";
	$tdataetudiant[".allSearchFields"][] = "cycle";
	$tdataetudiant[".allSearchFields"][] = "niveau";
	$tdataetudiant[".allSearchFields"][] = "datenais";
	

$tdataetudiant[".googleLikeFields"] = array();
$tdataetudiant[".googleLikeFields"][] = "idetudiant";
$tdataetudiant[".googleLikeFields"][] = "matricule";
$tdataetudiant[".googleLikeFields"][] = "noms";
$tdataetudiant[".googleLikeFields"][] = "cycle";
$tdataetudiant[".googleLikeFields"][] = "niveau";
$tdataetudiant[".googleLikeFields"][] = "datenais";


$tdataetudiant[".advSearchFields"] = array();
$tdataetudiant[".advSearchFields"][] = "idetudiant";
$tdataetudiant[".advSearchFields"][] = "matricule";
$tdataetudiant[".advSearchFields"][] = "noms";
$tdataetudiant[".advSearchFields"][] = "cycle";
$tdataetudiant[".advSearchFields"][] = "niveau";
$tdataetudiant[".advSearchFields"][] = "datenais";

$tdataetudiant[".tableType"] = "list";

$tdataetudiant[".printerPageOrientation"] = 0;
$tdataetudiant[".nPrinterPageScale"] = 100;

$tdataetudiant[".nPrinterSplitRecords"] = 40;

$tdataetudiant[".nPrinterPDFSplitRecords"] = 40;



$tdataetudiant[".geocodingEnabled"] = false;





$tdataetudiant[".listGridLayout"] = 3;

$tdataetudiant[".isDisplayLoading"] = true;

$tdataetudiant[".isResizeColumns"] = true;



// view page pdf
$tdataetudiant[".isViewPagePDF"] = true;
$tdataetudiant[".nViewPagePDFScale"] = 100;

// print page pdf


$tdataetudiant[".pageSize"] = 20;

$tdataetudiant[".warnLeavingPages"] = true;

$tdataetudiant[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataetudiant[".strOrderBy"] = $tstrOrderBy;

$tdataetudiant[".orderindexes"] = array();

$tdataetudiant[".sqlHead"] = "SELECT idetudiant,  	matricule,  	noms,  	`cycle`,  	niveau,  	datenais";
$tdataetudiant[".sqlFrom"] = "FROM etudiant";
$tdataetudiant[".sqlWhereExpr"] = "";
$tdataetudiant[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataetudiant[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataetudiant[".arrGroupsPerPage"] = $arrGPP;

$tdataetudiant[".highlightSearchResults"] = true;

$tableKeysetudiant = array();
$tableKeysetudiant[] = "idetudiant";
$tdataetudiant[".Keys"] = $tableKeysetudiant;

$tdataetudiant[".listFields"] = array();
$tdataetudiant[".listFields"][] = "idetudiant";
$tdataetudiant[".listFields"][] = "matricule";
$tdataetudiant[".listFields"][] = "noms";
$tdataetudiant[".listFields"][] = "cycle";
$tdataetudiant[".listFields"][] = "niveau";
$tdataetudiant[".listFields"][] = "datenais";

$tdataetudiant[".hideMobileList"] = array();


$tdataetudiant[".viewFields"] = array();
$tdataetudiant[".viewFields"][] = "idetudiant";
$tdataetudiant[".viewFields"][] = "matricule";
$tdataetudiant[".viewFields"][] = "noms";
$tdataetudiant[".viewFields"][] = "cycle";
$tdataetudiant[".viewFields"][] = "niveau";
$tdataetudiant[".viewFields"][] = "datenais";

$tdataetudiant[".addFields"] = array();

$tdataetudiant[".masterListFields"] = array();
$tdataetudiant[".masterListFields"][] = "idetudiant";
$tdataetudiant[".masterListFields"][] = "matricule";
$tdataetudiant[".masterListFields"][] = "noms";
$tdataetudiant[".masterListFields"][] = "cycle";
$tdataetudiant[".masterListFields"][] = "niveau";
$tdataetudiant[".masterListFields"][] = "datenais";

$tdataetudiant[".inlineAddFields"] = array();
$tdataetudiant[".inlineAddFields"][] = "matricule";
$tdataetudiant[".inlineAddFields"][] = "noms";
$tdataetudiant[".inlineAddFields"][] = "cycle";
$tdataetudiant[".inlineAddFields"][] = "niveau";
$tdataetudiant[".inlineAddFields"][] = "datenais";

$tdataetudiant[".editFields"] = array();

$tdataetudiant[".inlineEditFields"] = array();
$tdataetudiant[".inlineEditFields"][] = "matricule";
$tdataetudiant[".inlineEditFields"][] = "noms";
$tdataetudiant[".inlineEditFields"][] = "cycle";
$tdataetudiant[".inlineEditFields"][] = "niveau";
$tdataetudiant[".inlineEditFields"][] = "datenais";

$tdataetudiant[".exportFields"] = array();

$tdataetudiant[".importFields"] = array();

$tdataetudiant[".printFields"] = array();

//	idetudiant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idetudiant";
	$fdata["GoodName"] = "idetudiant";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","idetudiant");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataetudiant["idetudiant"] = $fdata;
//	matricule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "matricule";
	$fdata["GoodName"] = "matricule";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","matricule");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "matricule";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricule";

	
	
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




	$tdataetudiant["matricule"] = $fdata;
//	noms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "noms";
	$fdata["GoodName"] = "noms";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","noms");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "noms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noms";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdataetudiant["noms"] = $fdata;
//	cycle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cycle";
	$fdata["GoodName"] = "cycle";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","cycle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "cycle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cycle`";

	
	
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
	$edata["LookupTable"] = "cycle";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idcycle";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nomcycle";

	
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




	$tdataetudiant["cycle"] = $fdata;
//	niveau
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "niveau";
	$fdata["GoodName"] = "niveau";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","niveau");
	$fdata["FieldType"] = 3;

	
	
	
			
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "niveau";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idniveau";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "niveau";

	
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




	$tdataetudiant["niveau"] = $fdata;
//	datenais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "datenais";
	$fdata["GoodName"] = "datenais";
	$fdata["ownerTable"] = "etudiant";
	$fdata["Label"] = GetFieldLabel("etudiant","datenais");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "datenais";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datenais";

	
	
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




	$tdataetudiant["datenais"] = $fdata;


$tables_data["etudiant"]=&$tdataetudiant;
$field_labels["etudiant"] = &$fieldLabelsetudiant;
$fieldToolTips["etudiant"] = &$fieldToolTipsetudiant;
$page_titles["etudiant"] = &$pageTitlesetudiant;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["etudiant"] = array();
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
		
	$detailsTablesData["etudiant"][$dIndex] = $detailsParam;

	
		$detailsTablesData["etudiant"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["etudiant"][$dIndex]["masterKeys"][]="idetudiant";

				$detailsTablesData["etudiant"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["etudiant"][$dIndex]["detailKeys"][]="idetudiant";
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
		
	$detailsTablesData["etudiant"][$dIndex] = $detailsParam;

	
		$detailsTablesData["etudiant"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["etudiant"][$dIndex]["masterKeys"][]="idetudiant";

				$detailsTablesData["etudiant"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["etudiant"][$dIndex]["detailKeys"][]="idetudiant";

// tables which are master tables for current table (detail)
$masterTablesData["etudiant"] = array();


	
				$strOriginalDetailsTable="cycle";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cycle";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cycle";
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
					$masterTablesData["etudiant"][0] = $masterParams;
				$masterTablesData["etudiant"][0]["masterKeys"] = array();
	$masterTablesData["etudiant"][0]["masterKeys"][]="idcycle";
				$masterTablesData["etudiant"][0]["detailKeys"] = array();
	$masterTablesData["etudiant"][0]["detailKeys"][]="cycle";
		
	
				$strOriginalDetailsTable="niveau";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="niveau";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "niveau";
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
					$masterTablesData["etudiant"][1] = $masterParams;
				$masterTablesData["etudiant"][1]["masterKeys"] = array();
	$masterTablesData["etudiant"][1]["masterKeys"][]="idniveau";
				$masterTablesData["etudiant"][1]["detailKeys"] = array();
	$masterTablesData["etudiant"][1]["detailKeys"][]="niveau";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_etudiant()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "idetudiant,  	matricule,  	noms,  	`cycle`,  	niveau,  	datenais";
$proto3["m_strFrom"] = "FROM etudiant";
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
	"m_strName" => "idetudiant",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto9["m_sql"] = "idetudiant";
$proto9["m_srcTableName"] = "etudiant";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "matricule",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto11["m_sql"] = "matricule";
$proto11["m_srcTableName"] = "etudiant";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "noms",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto13["m_sql"] = "noms";
$proto13["m_srcTableName"] = "etudiant";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cycle",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto15["m_sql"] = "`cycle`";
$proto15["m_srcTableName"] = "etudiant";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "niveau",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto17["m_sql"] = "niveau";
$proto17["m_srcTableName"] = "etudiant";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "datenais",
	"m_strTable" => "etudiant",
	"m_srcTableName" => "etudiant"
));

$proto19["m_sql"] = "datenais";
$proto19["m_srcTableName"] = "etudiant";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "etudiant";
$proto22["m_srcTableName"] = "etudiant";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "idetudiant";
$proto22["m_columns"][] = "matricule";
$proto22["m_columns"][] = "noms";
$proto22["m_columns"][] = "cycle";
$proto22["m_columns"][] = "niveau";
$proto22["m_columns"][] = "datenais";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "etudiant";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "etudiant";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="etudiant";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_etudiant = createSqlQuery_etudiant();


	
		;

						

$tdataetudiant[".sqlquery"] = $queryData_etudiant;

$tableEvents["etudiant"] = new eventsBase;
$tdataetudiant[".hasEvents"] = false;

?>