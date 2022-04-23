<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagestionetudiant_users = array();
	$tdatagestionetudiant_users[".truncateText"] = true;
	$tdatagestionetudiant_users[".NumberOfChars"] = 80;
	$tdatagestionetudiant_users[".ShortName"] = "gestionetudiant_users";
	$tdatagestionetudiant_users[".OwnerID"] = "";
	$tdatagestionetudiant_users[".OriginalTable"] = "gestionetudiant_users";

//	field labels
$fieldLabelsgestionetudiant_users = array();
$fieldToolTipsgestionetudiant_users = array();
$pageTitlesgestionetudiant_users = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsgestionetudiant_users["French"] = array();
	$fieldToolTipsgestionetudiant_users["French"] = array();
	$pageTitlesgestionetudiant_users["French"] = array();
	$fieldLabelsgestionetudiant_users["French"]["ID"] = "ID";
	$fieldToolTipsgestionetudiant_users["French"]["ID"] = "";
	$fieldLabelsgestionetudiant_users["French"]["username"] = "Username";
	$fieldToolTipsgestionetudiant_users["French"]["username"] = "";
	$fieldLabelsgestionetudiant_users["French"]["password"] = "Password";
	$fieldToolTipsgestionetudiant_users["French"]["password"] = "";
	$fieldLabelsgestionetudiant_users["French"]["email"] = "Email";
	$fieldToolTipsgestionetudiant_users["French"]["email"] = "";
	$fieldLabelsgestionetudiant_users["French"]["fullname"] = "Fullname";
	$fieldToolTipsgestionetudiant_users["French"]["fullname"] = "";
	$fieldLabelsgestionetudiant_users["French"]["groupid"] = "Groupid";
	$fieldToolTipsgestionetudiant_users["French"]["groupid"] = "";
	$fieldLabelsgestionetudiant_users["French"]["active"] = "Active";
	$fieldToolTipsgestionetudiant_users["French"]["active"] = "";
	if (count($fieldToolTipsgestionetudiant_users["French"]))
		$tdatagestionetudiant_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgestionetudiant_users[""] = array();
	$fieldToolTipsgestionetudiant_users[""] = array();
	$pageTitlesgestionetudiant_users[""] = array();
	if (count($fieldToolTipsgestionetudiant_users[""]))
		$tdatagestionetudiant_users[".isUseToolTips"] = true;
}


	$tdatagestionetudiant_users[".NCSearch"] = true;



$tdatagestionetudiant_users[".shortTableName"] = "gestionetudiant_users";
$tdatagestionetudiant_users[".nSecOptions"] = 0;
$tdatagestionetudiant_users[".recsPerRowPrint"] = 1;
$tdatagestionetudiant_users[".mainTableOwnerID"] = "";
$tdatagestionetudiant_users[".moveNext"] = 1;
$tdatagestionetudiant_users[".entityType"] = 0;

$tdatagestionetudiant_users[".strOriginalTableName"] = "gestionetudiant_users";

	



$tdatagestionetudiant_users[".showAddInPopup"] = true;

$tdatagestionetudiant_users[".showEditInPopup"] = true;

$tdatagestionetudiant_users[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatagestionetudiant_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagestionetudiant_users[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatagestionetudiant_users[".fieldsForRegister"] = array();
$tdatagestionetudiant_users[".fieldsForRegister"][] = "username";
			$tdatagestionetudiant_users[".fieldsForRegister"][] = "password";
			$tdatagestionetudiant_users[".fieldsForRegister"][] = "email";
/*
$tdatagestionetudiant_users[".PasswordField"] = "password";
$tdatagestionetudiant_users[".UserNameField"] = "username";
*/
//End register settings

	$tdatagestionetudiant_users[".listAjax"] = true;

	$tdatagestionetudiant_users[".audit"] = false;

	$tdatagestionetudiant_users[".locking"] = false;



$tdatagestionetudiant_users[".list"] = true;

$tdatagestionetudiant_users[".inlineEdit"] = true;
$tdatagestionetudiant_users[".inlineAdd"] = true;
$tdatagestionetudiant_users[".view"] = true;



$tdatagestionetudiant_users[".printFriendly"] = true;

$tdatagestionetudiant_users[".delete"] = true;

$tdatagestionetudiant_users[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdatagestionetudiant_users[".searchSaving"] = false;
//

$tdatagestionetudiant_users[".showSearchPanel"] = true;
		$tdatagestionetudiant_users[".flexibleSearch"] = true;

$tdatagestionetudiant_users[".isUseAjaxSuggest"] = true;

$tdatagestionetudiant_users[".rowHighlite"] = true;



$tdatagestionetudiant_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagestionetudiant_users[".isUseTimeForSearch"] = false;





$tdatagestionetudiant_users[".allSearchFields"] = array();
$tdatagestionetudiant_users[".filterFields"] = array();
$tdatagestionetudiant_users[".requiredSearchFields"] = array();

$tdatagestionetudiant_users[".allSearchFields"][] = "ID";
	$tdatagestionetudiant_users[".allSearchFields"][] = "username";
	$tdatagestionetudiant_users[".allSearchFields"][] = "password";
	$tdatagestionetudiant_users[".allSearchFields"][] = "email";
	$tdatagestionetudiant_users[".allSearchFields"][] = "fullname";
	$tdatagestionetudiant_users[".allSearchFields"][] = "groupid";
	$tdatagestionetudiant_users[".allSearchFields"][] = "active";
	

$tdatagestionetudiant_users[".googleLikeFields"] = array();
$tdatagestionetudiant_users[".googleLikeFields"][] = "ID";
$tdatagestionetudiant_users[".googleLikeFields"][] = "username";
$tdatagestionetudiant_users[".googleLikeFields"][] = "password";
$tdatagestionetudiant_users[".googleLikeFields"][] = "email";
$tdatagestionetudiant_users[".googleLikeFields"][] = "fullname";
$tdatagestionetudiant_users[".googleLikeFields"][] = "groupid";
$tdatagestionetudiant_users[".googleLikeFields"][] = "active";


$tdatagestionetudiant_users[".advSearchFields"] = array();
$tdatagestionetudiant_users[".advSearchFields"][] = "ID";
$tdatagestionetudiant_users[".advSearchFields"][] = "username";
$tdatagestionetudiant_users[".advSearchFields"][] = "password";
$tdatagestionetudiant_users[".advSearchFields"][] = "email";
$tdatagestionetudiant_users[".advSearchFields"][] = "fullname";
$tdatagestionetudiant_users[".advSearchFields"][] = "groupid";
$tdatagestionetudiant_users[".advSearchFields"][] = "active";

$tdatagestionetudiant_users[".tableType"] = "list";

$tdatagestionetudiant_users[".printerPageOrientation"] = 0;
$tdatagestionetudiant_users[".nPrinterPageScale"] = 100;

$tdatagestionetudiant_users[".nPrinterSplitRecords"] = 40;

$tdatagestionetudiant_users[".nPrinterPDFSplitRecords"] = 40;



$tdatagestionetudiant_users[".geocodingEnabled"] = false;





$tdatagestionetudiant_users[".listGridLayout"] = 3;





// view page pdf
$tdatagestionetudiant_users[".isViewPagePDF"] = true;
$tdatagestionetudiant_users[".nViewPagePDFScale"] = 100;

// print page pdf


$tdatagestionetudiant_users[".pageSize"] = 20;

$tdatagestionetudiant_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagestionetudiant_users[".strOrderBy"] = $tstrOrderBy;

$tdatagestionetudiant_users[".orderindexes"] = array();

$tdatagestionetudiant_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatagestionetudiant_users[".sqlFrom"] = "FROM gestionetudiant_users";
$tdatagestionetudiant_users[".sqlWhereExpr"] = "";
$tdatagestionetudiant_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagestionetudiant_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagestionetudiant_users[".arrGroupsPerPage"] = $arrGPP;

$tdatagestionetudiant_users[".highlightSearchResults"] = true;

$tableKeysgestionetudiant_users = array();
$tableKeysgestionetudiant_users[] = "ID";
$tdatagestionetudiant_users[".Keys"] = $tableKeysgestionetudiant_users;

$tdatagestionetudiant_users[".listFields"] = array();
$tdatagestionetudiant_users[".listFields"][] = "ID";
$tdatagestionetudiant_users[".listFields"][] = "username";
$tdatagestionetudiant_users[".listFields"][] = "password";
$tdatagestionetudiant_users[".listFields"][] = "email";
$tdatagestionetudiant_users[".listFields"][] = "fullname";
$tdatagestionetudiant_users[".listFields"][] = "groupid";
$tdatagestionetudiant_users[".listFields"][] = "active";

$tdatagestionetudiant_users[".hideMobileList"] = array();


$tdatagestionetudiant_users[".viewFields"] = array();
$tdatagestionetudiant_users[".viewFields"][] = "ID";
$tdatagestionetudiant_users[".viewFields"][] = "username";
$tdatagestionetudiant_users[".viewFields"][] = "password";
$tdatagestionetudiant_users[".viewFields"][] = "email";
$tdatagestionetudiant_users[".viewFields"][] = "fullname";
$tdatagestionetudiant_users[".viewFields"][] = "groupid";
$tdatagestionetudiant_users[".viewFields"][] = "active";

$tdatagestionetudiant_users[".addFields"] = array();

$tdatagestionetudiant_users[".masterListFields"] = array();
$tdatagestionetudiant_users[".masterListFields"][] = "ID";
$tdatagestionetudiant_users[".masterListFields"][] = "username";
$tdatagestionetudiant_users[".masterListFields"][] = "password";
$tdatagestionetudiant_users[".masterListFields"][] = "email";
$tdatagestionetudiant_users[".masterListFields"][] = "fullname";
$tdatagestionetudiant_users[".masterListFields"][] = "groupid";
$tdatagestionetudiant_users[".masterListFields"][] = "active";

$tdatagestionetudiant_users[".inlineAddFields"] = array();
$tdatagestionetudiant_users[".inlineAddFields"][] = "username";
$tdatagestionetudiant_users[".inlineAddFields"][] = "password";
$tdatagestionetudiant_users[".inlineAddFields"][] = "email";
$tdatagestionetudiant_users[".inlineAddFields"][] = "fullname";
$tdatagestionetudiant_users[".inlineAddFields"][] = "groupid";
$tdatagestionetudiant_users[".inlineAddFields"][] = "active";

$tdatagestionetudiant_users[".editFields"] = array();

$tdatagestionetudiant_users[".inlineEditFields"] = array();
$tdatagestionetudiant_users[".inlineEditFields"][] = "username";
$tdatagestionetudiant_users[".inlineEditFields"][] = "password";
$tdatagestionetudiant_users[".inlineEditFields"][] = "email";
$tdatagestionetudiant_users[".inlineEditFields"][] = "fullname";
$tdatagestionetudiant_users[".inlineEditFields"][] = "groupid";
$tdatagestionetudiant_users[".inlineEditFields"][] = "active";

$tdatagestionetudiant_users[".exportFields"] = array();

$tdatagestionetudiant_users[".importFields"] = array();

$tdatagestionetudiant_users[".printFields"] = array();
$tdatagestionetudiant_users[".printFields"][] = "ID";
$tdatagestionetudiant_users[".printFields"][] = "username";
$tdatagestionetudiant_users[".printFields"][] = "password";
$tdatagestionetudiant_users[".printFields"][] = "email";
$tdatagestionetudiant_users[".printFields"][] = "fullname";
$tdatagestionetudiant_users[".printFields"][] = "groupid";
$tdatagestionetudiant_users[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatagestionetudiant_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagestionetudiant_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagestionetudiant_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagestionetudiant_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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




	$tdatagestionetudiant_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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




	$tdatagestionetudiant_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "gestionetudiant_users";
	$fdata["Label"] = GetFieldLabel("gestionetudiant_users","active");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagestionetudiant_users["active"] = $fdata;


$tables_data["gestionetudiant_users"]=&$tdatagestionetudiant_users;
$field_labels["gestionetudiant_users"] = &$fieldLabelsgestionetudiant_users;
$fieldToolTips["gestionetudiant_users"] = &$fieldToolTipsgestionetudiant_users;
$page_titles["gestionetudiant_users"] = &$pageTitlesgestionetudiant_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gestionetudiant_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["gestionetudiant_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gestionetudiant_users()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto3["m_strFrom"] = "FROM gestionetudiant_users";
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
	"m_strName" => "ID",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto9["m_sql"] = "ID";
$proto9["m_srcTableName"] = "gestionetudiant_users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto11["m_sql"] = "username";
$proto11["m_srcTableName"] = "gestionetudiant_users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto13["m_sql"] = "password";
$proto13["m_srcTableName"] = "gestionetudiant_users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto15["m_sql"] = "email";
$proto15["m_srcTableName"] = "gestionetudiant_users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto17["m_sql"] = "fullname";
$proto17["m_srcTableName"] = "gestionetudiant_users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto19["m_sql"] = "groupid";
$proto19["m_srcTableName"] = "gestionetudiant_users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "gestionetudiant_users",
	"m_srcTableName" => "gestionetudiant_users"
));

$proto21["m_sql"] = "active";
$proto21["m_srcTableName"] = "gestionetudiant_users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "gestionetudiant_users";
$proto24["m_srcTableName"] = "gestionetudiant_users";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "username";
$proto24["m_columns"][] = "password";
$proto24["m_columns"][] = "email";
$proto24["m_columns"][] = "fullname";
$proto24["m_columns"][] = "groupid";
$proto24["m_columns"][] = "active";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "gestionetudiant_users";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "gestionetudiant_users";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="gestionetudiant_users";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_gestionetudiant_users = createSqlQuery_gestionetudiant_users();


	
		;

							

$tdatagestionetudiant_users[".sqlquery"] = $queryData_gestionetudiant_users;

$tableEvents["gestionetudiant_users"] = new eventsBase;
$tdatagestionetudiant_users[".hasEvents"] = false;

?>