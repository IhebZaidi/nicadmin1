<?php
$tdatafsi = array();
$tdatafsi[".searchableFields"] = array();
$tdatafsi[".ShortName"] = "fsi";
$tdatafsi[".OwnerID"] = "id_fsi";
$tdatafsi[".OriginalTable"] = "fsi";


$tdatafsi[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafsi[".originalPagesByType"] = $tdatafsi[".pagesByType"];
$tdatafsi[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafsi[".originalPages"] = $tdatafsi[".pages"];
$tdatafsi[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafsi[".originalDefaultPages"] = $tdatafsi[".defaultPages"];

//	field labels
$fieldLabelsfsi = array();
$fieldToolTipsfsi = array();
$pageTitlesfsi = array();
$placeHoldersfsi = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfsi["French"] = array();
	$fieldToolTipsfsi["French"] = array();
	$placeHoldersfsi["French"] = array();
	$pageTitlesfsi["French"] = array();
	$fieldLabelsfsi["French"]["id_fsi"] = "Id Fsi";
	$fieldToolTipsfsi["French"]["id_fsi"] = "";
	$placeHoldersfsi["French"]["id_fsi"] = "";
	$fieldLabelsfsi["French"]["nom"] = "Nom";
	$fieldToolTipsfsi["French"]["nom"] = "";
	$placeHoldersfsi["French"]["nom"] = "";
	$fieldLabelsfsi["French"]["adresse"] = "Adresse";
	$fieldToolTipsfsi["French"]["adresse"] = "";
	$placeHoldersfsi["French"]["adresse"] = "";
	$fieldLabelsfsi["French"]["tel"] = "Tel";
	$fieldToolTipsfsi["French"]["tel"] = "";
	$placeHoldersfsi["French"]["tel"] = "";
	$fieldLabelsfsi["French"]["fax"] = "Fax";
	$fieldToolTipsfsi["French"]["fax"] = "";
	$placeHoldersfsi["French"]["fax"] = "";
	$fieldLabelsfsi["French"]["email"] = "Email";
	$fieldToolTipsfsi["French"]["email"] = "";
	$placeHoldersfsi["French"]["email"] = "";
	$fieldLabelsfsi["French"]["prim_email"] = "Prim Email";
	$fieldToolTipsfsi["French"]["prim_email"] = "";
	$placeHoldersfsi["French"]["prim_email"] = "";
	$fieldLabelsfsi["French"]["sec_email"] = "Sec Email";
	$fieldToolTipsfsi["French"]["sec_email"] = "";
	$placeHoldersfsi["French"]["sec_email"] = "";
	$fieldLabelsfsi["French"]["allowed_IPs"] = "Allowed IPs";
	$fieldToolTipsfsi["French"]["allowed_IPs"] = "";
	$placeHoldersfsi["French"]["allowed_IPs"] = "";
	$fieldLabelsfsi["French"]["url"] = "Url";
	$fieldToolTipsfsi["French"]["url"] = "";
	$placeHoldersfsi["French"]["url"] = "";
	$fieldLabelsfsi["French"]["login"] = "Login";
	$fieldToolTipsfsi["French"]["login"] = "";
	$placeHoldersfsi["French"]["login"] = "";
	$fieldLabelsfsi["French"]["password"] = "Password";
	$fieldToolTipsfsi["French"]["password"] = "";
	$placeHoldersfsi["French"]["password"] = "";
	$fieldLabelsfsi["French"]["API_password"] = "API Password";
	$fieldToolTipsfsi["French"]["API_password"] = "";
	$placeHoldersfsi["French"]["API_password"] = "";
	$fieldLabelsfsi["French"]["password_reset_token"] = "Password Reset Token";
	$fieldToolTipsfsi["French"]["password_reset_token"] = "";
	$placeHoldersfsi["French"]["password_reset_token"] = "";
	$fieldLabelsfsi["French"]["password_reset_token_expire"] = "Password Reset Token Expire";
	$fieldToolTipsfsi["French"]["password_reset_token_expire"] = "";
	$placeHoldersfsi["French"]["password_reset_token_expire"] = "";
	$fieldLabelsfsi["French"]["secret_pass"] = "Secret Pass";
	$fieldToolTipsfsi["French"]["secret_pass"] = "";
	$placeHoldersfsi["French"]["secret_pass"] = "";
	$fieldLabelsfsi["French"]["commentaires"] = "Commentaires";
	$fieldToolTipsfsi["French"]["commentaires"] = "";
	$placeHoldersfsi["French"]["commentaires"] = "";
	$fieldLabelsfsi["French"]["date_modif"] = "Date Modif";
	$fieldToolTipsfsi["French"]["date_modif"] = "";
	$placeHoldersfsi["French"]["date_modif"] = "";
	$fieldLabelsfsi["French"]["nomnoc"] = "Nomnoc";
	$fieldToolTipsfsi["French"]["nomnoc"] = "";
	$placeHoldersfsi["French"]["nomnoc"] = "";
	$fieldLabelsfsi["French"]["admin"] = "Admin";
	$fieldToolTipsfsi["French"]["admin"] = "";
	$placeHoldersfsi["French"]["admin"] = "";
	$fieldLabelsfsi["French"]["etat"] = "Etat";
	$fieldToolTipsfsi["French"]["etat"] = "";
	$placeHoldersfsi["French"]["etat"] = "";
	$fieldLabelsfsi["French"]["prefix"] = "Prefix";
	$fieldToolTipsfsi["French"]["prefix"] = "";
	$placeHoldersfsi["French"]["prefix"] = "";
	$fieldLabelsfsi["French"]["langue"] = "Langue";
	$fieldToolTipsfsi["French"]["langue"] = "";
	$placeHoldersfsi["French"]["langue"] = "";
	$fieldLabelsfsi["French"]["accountBalance"] = "Account Balance";
	$fieldToolTipsfsi["French"]["accountBalance"] = "";
	$placeHoldersfsi["French"]["accountBalance"] = "";
	$fieldLabelsfsi["French"]["creditLimit"] = "Credit Limit";
	$fieldToolTipsfsi["French"]["creditLimit"] = "";
	$placeHoldersfsi["French"]["creditLimit"] = "";
	$fieldLabelsfsi["French"]["creditThreshold"] = "Credit Threshold";
	$fieldToolTipsfsi["French"]["creditThreshold"] = "";
	$placeHoldersfsi["French"]["creditThreshold"] = "";
	$fieldLabelsfsi["French"]["thresholdType"] = "Threshold Type";
	$fieldToolTipsfsi["French"]["thresholdType"] = "";
	$placeHoldersfsi["French"]["thresholdType"] = "";
	$fieldLabelsfsi["French"]["mgmt"] = "Mgmt";
	$fieldToolTipsfsi["French"]["mgmt"] = "";
	$placeHoldersfsi["French"]["mgmt"] = "";
	$fieldLabelsfsi["French"]["reg_commentaire"] = "Reg Commentaire";
	$fieldToolTipsfsi["French"]["reg_commentaire"] = "";
	$placeHoldersfsi["French"]["reg_commentaire"] = "";
	$pageTitlesfsi["French"]["view"] = "Profile";
	$pageTitlesfsi["French"]["edit"] = "Edit Profile";
	$pageTitlesfsi["French"]["search"] = "Profile, Advanced search";
	$pageTitlesfsi["French"]["import"] = "Profile, Import";
	$pageTitlesfsi["French"]["masterlist"] = "Profile";
	$pageTitlesfsi["French"]["masterprint"] = "Profile";
	$pageTitlesfsi["French"]["print"] = "Profile";
	if (count($fieldToolTipsfsi["French"]))
		$tdatafsi[".isUseToolTips"] = true;
}


	$tdatafsi[".NCSearch"] = true;



$tdatafsi[".shortTableName"] = "fsi";
$tdatafsi[".nSecOptions"] = 1;

$tdatafsi[".mainTableOwnerID"] = "id_fsi";
$tdatafsi[".entityType"] = 0;
$tdatafsi[".connId"] = "nicadmin_at_localhost";


$tdatafsi[".strOriginalTableName"] = "fsi";

	



$tdatafsi[".showAddInPopup"] = false;

$tdatafsi[".showEditInPopup"] = false;

$tdatafsi[".showViewInPopup"] = false;

$tdatafsi[".listAjax"] = false;
//	temporary
//$tdatafsi[".listAjax"] = false;

	$tdatafsi[".audit"] = false;

	$tdatafsi[".locking"] = false;


$pages = $tdatafsi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafsi[".edit"] = true;
	$tdatafsi[".afterEditAction"] = 1;
	$tdatafsi[".closePopupAfterEdit"] = 1;
	$tdatafsi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafsi[".add"] = true;
$tdatafsi[".afterAddAction"] = 1;
$tdatafsi[".closePopupAfterAdd"] = 1;
$tdatafsi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafsi[".list"] = true;
}



$tdatafsi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafsi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafsi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafsi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafsi[".printFriendly"] = true;
}



$tdatafsi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafsi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafsi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafsi[".isUseAjaxSuggest"] = true;





$tdatafsi[".ajaxCodeSnippetAdded"] = false;

$tdatafsi[".buttonsAdded"] = false;

$tdatafsi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafsi[".isUseTimeForSearch"] = false;


$tdatafsi[".badgeColor"] = "d2691e";


$tdatafsi[".allSearchFields"] = array();
$tdatafsi[".filterFields"] = array();
$tdatafsi[".requiredSearchFields"] = array();

$tdatafsi[".googleLikeFields"] = array();
$tdatafsi[".googleLikeFields"][] = "id_fsi";
$tdatafsi[".googleLikeFields"][] = "nom";
$tdatafsi[".googleLikeFields"][] = "adresse";
$tdatafsi[".googleLikeFields"][] = "tel";
$tdatafsi[".googleLikeFields"][] = "fax";
$tdatafsi[".googleLikeFields"][] = "email";
$tdatafsi[".googleLikeFields"][] = "prim_email";
$tdatafsi[".googleLikeFields"][] = "sec_email";
$tdatafsi[".googleLikeFields"][] = "allowed_IPs";
$tdatafsi[".googleLikeFields"][] = "url";
$tdatafsi[".googleLikeFields"][] = "login";
$tdatafsi[".googleLikeFields"][] = "password";
$tdatafsi[".googleLikeFields"][] = "API_password";
$tdatafsi[".googleLikeFields"][] = "password_reset_token";
$tdatafsi[".googleLikeFields"][] = "password_reset_token_expire";
$tdatafsi[".googleLikeFields"][] = "secret_pass";
$tdatafsi[".googleLikeFields"][] = "commentaires";
$tdatafsi[".googleLikeFields"][] = "date_modif";
$tdatafsi[".googleLikeFields"][] = "nomnoc";
$tdatafsi[".googleLikeFields"][] = "admin";
$tdatafsi[".googleLikeFields"][] = "etat";
$tdatafsi[".googleLikeFields"][] = "prefix";
$tdatafsi[".googleLikeFields"][] = "langue";
$tdatafsi[".googleLikeFields"][] = "accountBalance";
$tdatafsi[".googleLikeFields"][] = "creditLimit";
$tdatafsi[".googleLikeFields"][] = "creditThreshold";
$tdatafsi[".googleLikeFields"][] = "thresholdType";
$tdatafsi[".googleLikeFields"][] = "mgmt";
$tdatafsi[".googleLikeFields"][] = "reg_commentaire";



$tdatafsi[".tableType"] = "list";

$tdatafsi[".printerPageOrientation"] = 0;
$tdatafsi[".nPrinterPageScale"] = 100;

$tdatafsi[".nPrinterSplitRecords"] = 40;

$tdatafsi[".geocodingEnabled"] = false;










$tdatafsi[".pageSize"] = 20;

$tdatafsi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafsi[".strOrderBy"] = $tstrOrderBy;

$tdatafsi[".orderindexes"] = array();


$tdatafsi[".sqlHead"] = "SELECT id_fsi,  	nom,  	adresse,  	tel,  	fax,  	email,  	prim_email,  	sec_email,  	allowed_IPs,  	url,  	login,  	password,  	API_password,  	password_reset_token,  	password_reset_token_expire,  	secret_pass,  	commentaires,  	date_modif,  	nomnoc,  	`admin`,  	etat,  	`prefix`,  	langue,  	accountBalance,  	creditLimit,  	creditThreshold,  	thresholdType,  	mgmt,  	reg_commentaire";
$tdatafsi[".sqlFrom"] = "FROM fsi";
$tdatafsi[".sqlWhereExpr"] = "";
$tdatafsi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafsi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafsi[".arrGroupsPerPage"] = $arrGPP;

$tdatafsi[".highlightSearchResults"] = true;

$tableKeysfsi = array();
$tableKeysfsi[] = "id_fsi";
$tdatafsi[".Keys"] = $tableKeysfsi;


$tdatafsi[".hideMobileList"] = array();




//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","id_fsi");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_fsi";

		$fdata["sourceSingle"] = "id_fsi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fsi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["id_fsi"] = $fdata;
		$tdatafsi[".searchableFields"][] = "id_fsi";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

		$fdata["sourceSingle"] = "nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["nom"] = $fdata;
		$tdatafsi[".searchableFields"][] = "nom";
//	adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "adresse";
	$fdata["GoodName"] = "adresse";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","adresse");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "adresse";

		$fdata["sourceSingle"] = "adresse";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adresse";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["adresse"] = $fdata;
		$tdatafsi[".searchableFields"][] = "adresse";
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","tel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tel";

		$fdata["sourceSingle"] = "tel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["tel"] = $fdata;
		$tdatafsi[".searchableFields"][] = "tel";
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","fax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fax";

		$fdata["sourceSingle"] = "fax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["fax"] = $fdata;
		$tdatafsi[".searchableFields"][] = "fax";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["email"] = $fdata;
		$tdatafsi[".searchableFields"][] = "email";
//	prim_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "prim_email";
	$fdata["GoodName"] = "prim_email";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","prim_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prim_email";

		$fdata["sourceSingle"] = "prim_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prim_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["prim_email"] = $fdata;
		$tdatafsi[".searchableFields"][] = "prim_email";
//	sec_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sec_email";
	$fdata["GoodName"] = "sec_email";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","sec_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sec_email";

		$fdata["sourceSingle"] = "sec_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sec_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["sec_email"] = $fdata;
		$tdatafsi[".searchableFields"][] = "sec_email";
//	allowed_IPs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "allowed_IPs";
	$fdata["GoodName"] = "allowed_IPs";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","allowed_IPs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "allowed_IPs";

		$fdata["sourceSingle"] = "allowed_IPs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "allowed_IPs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["allowed_IPs"] = $fdata;
		$tdatafsi[".searchableFields"][] = "allowed_IPs";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "url";

		$fdata["sourceSingle"] = "url";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["url"] = $fdata;
		$tdatafsi[".searchableFields"][] = "url";
//	login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "login";
	$fdata["GoodName"] = "login";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","login");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "login";

		$fdata["sourceSingle"] = "login";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "login";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["login"] = $fdata;
		$tdatafsi[".searchableFields"][] = "login";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["password"] = $fdata;
		$tdatafsi[".searchableFields"][] = "password";
//	API_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "API_password";
	$fdata["GoodName"] = "API_password";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","API_password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "API_password";

		$fdata["sourceSingle"] = "API_password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "API_password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["API_password"] = $fdata;
		$tdatafsi[".searchableFields"][] = "API_password";
//	password_reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "password_reset_token";
	$fdata["GoodName"] = "password_reset_token";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","password_reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password_reset_token";

		$fdata["sourceSingle"] = "password_reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password_reset_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["password_reset_token"] = $fdata;
		$tdatafsi[".searchableFields"][] = "password_reset_token";
//	password_reset_token_expire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "password_reset_token_expire";
	$fdata["GoodName"] = "password_reset_token_expire";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","password_reset_token_expire");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "password_reset_token_expire";

		$fdata["sourceSingle"] = "password_reset_token_expire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password_reset_token_expire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["password_reset_token_expire"] = $fdata;
		$tdatafsi[".searchableFields"][] = "password_reset_token_expire";
//	secret_pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "secret_pass";
	$fdata["GoodName"] = "secret_pass";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","secret_pass");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "secret_pass";

		$fdata["sourceSingle"] = "secret_pass";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "secret_pass";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["secret_pass"] = $fdata;
		$tdatafsi[".searchableFields"][] = "secret_pass";
//	commentaires
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "commentaires";
	$fdata["GoodName"] = "commentaires";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","commentaires");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "commentaires";

		$fdata["sourceSingle"] = "commentaires";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commentaires";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["commentaires"] = $fdata;
		$tdatafsi[".searchableFields"][] = "commentaires";
//	date_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "date_modif";
	$fdata["GoodName"] = "date_modif";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","date_modif");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_modif";

		$fdata["sourceSingle"] = "date_modif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_modif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["date_modif"] = $fdata;
		$tdatafsi[".searchableFields"][] = "date_modif";
//	nomnoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "nomnoc";
	$fdata["GoodName"] = "nomnoc";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","nomnoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomnoc";

		$fdata["sourceSingle"] = "nomnoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomnoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["nomnoc"] = $fdata;
		$tdatafsi[".searchableFields"][] = "nomnoc";
//	admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "admin";
	$fdata["GoodName"] = "admin";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","admin");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "admin";

		$fdata["sourceSingle"] = "admin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`admin`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["admin"] = $fdata;
		$tdatafsi[".searchableFields"][] = "admin";
//	etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "etat";
	$fdata["GoodName"] = "etat";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","etat");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "etat";

		$fdata["sourceSingle"] = "etat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "etat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["etat"] = $fdata;
		$tdatafsi[".searchableFields"][] = "etat";
//	prefix
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "prefix";
	$fdata["GoodName"] = "prefix";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","prefix");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prefix";

		$fdata["sourceSingle"] = "prefix";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`prefix`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["prefix"] = $fdata;
		$tdatafsi[".searchableFields"][] = "prefix";
//	langue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "langue";
	$fdata["GoodName"] = "langue";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","langue");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "langue";

		$fdata["sourceSingle"] = "langue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "langue";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "en-US";
	$edata["LookupValues"][] = "fr-FR";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["langue"] = $fdata;
		$tdatafsi[".searchableFields"][] = "langue";
//	accountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "accountBalance";
	$fdata["GoodName"] = "accountBalance";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","accountBalance");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "accountBalance";

		$fdata["sourceSingle"] = "accountBalance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accountBalance";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["accountBalance"] = $fdata;
		$tdatafsi[".searchableFields"][] = "accountBalance";
//	creditLimit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "creditLimit";
	$fdata["GoodName"] = "creditLimit";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","creditLimit");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "creditLimit";

		$fdata["sourceSingle"] = "creditLimit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creditLimit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["creditLimit"] = $fdata;
		$tdatafsi[".searchableFields"][] = "creditLimit";
//	creditThreshold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "creditThreshold";
	$fdata["GoodName"] = "creditThreshold";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","creditThreshold");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "creditThreshold";

		$fdata["sourceSingle"] = "creditThreshold";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creditThreshold";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["creditThreshold"] = $fdata;
		$tdatafsi[".searchableFields"][] = "creditThreshold";
//	thresholdType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "thresholdType";
	$fdata["GoodName"] = "thresholdType";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","thresholdType");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "thresholdType";

		$fdata["sourceSingle"] = "thresholdType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "thresholdType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "fixed";
	$edata["LookupValues"][] = "percent";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["thresholdType"] = $fdata;
		$tdatafsi[".searchableFields"][] = "thresholdType";
//	mgmt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "mgmt";
	$fdata["GoodName"] = "mgmt";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","mgmt");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mgmt";

		$fdata["sourceSingle"] = "mgmt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mgmt";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["mgmt"] = $fdata;
		$tdatafsi[".searchableFields"][] = "mgmt";
//	reg_commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "reg_commentaire";
	$fdata["GoodName"] = "reg_commentaire";
	$fdata["ownerTable"] = "fsi";
	$fdata["Label"] = GetFieldLabel("fsi","reg_commentaire");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reg_commentaire";

		$fdata["sourceSingle"] = "reg_commentaire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_commentaire";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatafsi["reg_commentaire"] = $fdata;
		$tdatafsi[".searchableFields"][] = "reg_commentaire";


$tables_data["fsi"]=&$tdatafsi;
$field_labels["fsi"] = &$fieldLabelsfsi;
$fieldToolTips["fsi"] = &$fieldToolTipsfsi;
$placeHolders["fsi"] = &$placeHoldersfsi;
$page_titles["fsi"] = &$pageTitlesfsi;


changeTextControlsToDate( "fsi" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fsi"] = array();
//	fsi_ns
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="fsi_ns";
		$detailsParam["dOriginalTable"] = "fsi_ns";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "fsi_ns";
	$detailsParam["dCaptionTable"] = GetTableCaption("fsi_ns");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["fsi"][$dIndex] = $detailsParam;

	
		$detailsTablesData["fsi"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["fsi"][$dIndex]["masterKeys"][]="id_fsi";

				$detailsTablesData["fsi"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["fsi"][$dIndex]["detailKeys"][]="id_fsi";
//	fsi_extensions
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="fsi_extensions";
		$detailsParam["dOriginalTable"] = "fsi_extensions";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "fsi_extensions";
	$detailsParam["dCaptionTable"] = GetTableCaption("fsi_extensions");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["fsi"][$dIndex] = $detailsParam;

	
		$detailsTablesData["fsi"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["fsi"][$dIndex]["masterKeys"][]="id_fsi";

				$detailsTablesData["fsi"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["fsi"][$dIndex]["detailKeys"][]="id_fsi";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fsi"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fsi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_fsi,  	nom,  	adresse,  	tel,  	fax,  	email,  	prim_email,  	sec_email,  	allowed_IPs,  	url,  	login,  	password,  	API_password,  	password_reset_token,  	password_reset_token_expire,  	secret_pass,  	commentaires,  	date_modif,  	nomnoc,  	`admin`,  	etat,  	`prefix`,  	langue,  	accountBalance,  	creditLimit,  	creditThreshold,  	thresholdType,  	mgmt,  	reg_commentaire";
$proto0["m_strFrom"] = "FROM fsi";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "id_fsi",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto6["m_sql"] = "id_fsi";
$proto6["m_srcTableName"] = "fsi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto8["m_sql"] = "nom";
$proto8["m_srcTableName"] = "fsi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto10["m_sql"] = "adresse";
$proto10["m_srcTableName"] = "fsi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto12["m_sql"] = "tel";
$proto12["m_srcTableName"] = "fsi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto14["m_sql"] = "fax";
$proto14["m_srcTableName"] = "fsi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "fsi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "prim_email",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto18["m_sql"] = "prim_email";
$proto18["m_srcTableName"] = "fsi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sec_email",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto20["m_sql"] = "sec_email";
$proto20["m_srcTableName"] = "fsi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "allowed_IPs",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto22["m_sql"] = "allowed_IPs";
$proto22["m_srcTableName"] = "fsi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto24["m_sql"] = "url";
$proto24["m_srcTableName"] = "fsi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "login",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto26["m_sql"] = "login";
$proto26["m_srcTableName"] = "fsi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto28["m_sql"] = "password";
$proto28["m_srcTableName"] = "fsi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "API_password",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto30["m_sql"] = "API_password";
$proto30["m_srcTableName"] = "fsi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "password_reset_token",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto32["m_sql"] = "password_reset_token";
$proto32["m_srcTableName"] = "fsi";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "password_reset_token_expire",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto34["m_sql"] = "password_reset_token_expire";
$proto34["m_srcTableName"] = "fsi";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "secret_pass",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto36["m_sql"] = "secret_pass";
$proto36["m_srcTableName"] = "fsi";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaires",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto38["m_sql"] = "commentaires";
$proto38["m_srcTableName"] = "fsi";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modif",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto40["m_sql"] = "date_modif";
$proto40["m_srcTableName"] = "fsi";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "nomnoc",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto42["m_sql"] = "nomnoc";
$proto42["m_srcTableName"] = "fsi";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "admin",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto44["m_sql"] = "`admin`";
$proto44["m_srcTableName"] = "fsi";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "etat",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto46["m_sql"] = "etat";
$proto46["m_srcTableName"] = "fsi";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "prefix",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto48["m_sql"] = "`prefix`";
$proto48["m_srcTableName"] = "fsi";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "langue",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto50["m_sql"] = "langue";
$proto50["m_srcTableName"] = "fsi";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "accountBalance",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto52["m_sql"] = "accountBalance";
$proto52["m_srcTableName"] = "fsi";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "creditLimit",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto54["m_sql"] = "creditLimit";
$proto54["m_srcTableName"] = "fsi";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "creditThreshold",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto56["m_sql"] = "creditThreshold";
$proto56["m_srcTableName"] = "fsi";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "thresholdType",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto58["m_sql"] = "thresholdType";
$proto58["m_srcTableName"] = "fsi";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "mgmt",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto60["m_sql"] = "mgmt";
$proto60["m_srcTableName"] = "fsi";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_commentaire",
	"m_strTable" => "fsi",
	"m_srcTableName" => "fsi"
));

$proto62["m_sql"] = "reg_commentaire";
$proto62["m_srcTableName"] = "fsi";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "fsi";
$proto65["m_srcTableName"] = "fsi";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_fsi";
$proto65["m_columns"][] = "nom";
$proto65["m_columns"][] = "adresse";
$proto65["m_columns"][] = "tel";
$proto65["m_columns"][] = "fax";
$proto65["m_columns"][] = "email";
$proto65["m_columns"][] = "prim_email";
$proto65["m_columns"][] = "sec_email";
$proto65["m_columns"][] = "allowed_IPs";
$proto65["m_columns"][] = "url";
$proto65["m_columns"][] = "login";
$proto65["m_columns"][] = "password";
$proto65["m_columns"][] = "API_password";
$proto65["m_columns"][] = "password_reset_token";
$proto65["m_columns"][] = "password_reset_token_expire";
$proto65["m_columns"][] = "secret_pass";
$proto65["m_columns"][] = "commentaires";
$proto65["m_columns"][] = "date_modif";
$proto65["m_columns"][] = "nomnoc";
$proto65["m_columns"][] = "admin";
$proto65["m_columns"][] = "etat";
$proto65["m_columns"][] = "prefix";
$proto65["m_columns"][] = "langue";
$proto65["m_columns"][] = "accountBalance";
$proto65["m_columns"][] = "creditLimit";
$proto65["m_columns"][] = "creditThreshold";
$proto65["m_columns"][] = "thresholdType";
$proto65["m_columns"][] = "mgmt";
$proto65["m_columns"][] = "reg_commentaire";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "fsi";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "fsi";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fsi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fsi = createSqlQuery_fsi();


	
		;

																													

$tdatafsi[".sqlquery"] = $queryData_fsi;



$tdatafsi[".hasEvents"] = false;

?>