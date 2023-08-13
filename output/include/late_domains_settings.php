<?php
$tdatalate_domains = array();
$tdatalate_domains[".searchableFields"] = array();
$tdatalate_domains[".ShortName"] = "late_domains";
$tdatalate_domains[".OwnerID"] = "fsi";
$tdatalate_domains[".OriginalTable"] = "late_domains";


$tdatalate_domains[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalate_domains[".originalPagesByType"] = $tdatalate_domains[".pagesByType"];
$tdatalate_domains[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalate_domains[".originalPages"] = $tdatalate_domains[".pages"];
$tdatalate_domains[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalate_domains[".originalDefaultPages"] = $tdatalate_domains[".defaultPages"];

//	field labels
$fieldLabelslate_domains = array();
$fieldToolTipslate_domains = array();
$pageTitleslate_domains = array();
$placeHolderslate_domains = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslate_domains["English"] = array();
	$fieldToolTipslate_domains["English"] = array();
	$placeHolderslate_domains["English"] = array();
	$pageTitleslate_domains["English"] = array();
	$fieldLabelslate_domains["English"]["id"] = "Id";
	$fieldToolTipslate_domains["English"]["id"] = "";
	$placeHolderslate_domains["English"]["id"] = "";
	$fieldLabelslate_domains["English"]["code"] = "Code";
	$fieldToolTipslate_domains["English"]["code"] = "";
	$placeHolderslate_domains["English"]["code"] = "";
	$fieldLabelslate_domains["English"]["domain"] = "Domain";
	$fieldToolTipslate_domains["English"]["domain"] = "";
	$placeHolderslate_domains["English"]["domain"] = "";
	$fieldLabelslate_domains["English"]["ext"] = "Ext";
	$fieldToolTipslate_domains["English"]["ext"] = "";
	$placeHolderslate_domains["English"]["ext"] = "";
	$fieldLabelslate_domains["English"]["fsi"] = "Fsi";
	$fieldToolTipslate_domains["English"]["fsi"] = "";
	$placeHolderslate_domains["English"]["fsi"] = "";
	$fieldLabelslate_domains["English"]["organisme"] = "Organisme";
	$fieldToolTipslate_domains["English"]["organisme"] = "";
	$placeHolderslate_domains["English"]["organisme"] = "";
	$fieldLabelslate_domains["English"]["adresse"] = "Adresse";
	$fieldToolTipslate_domains["English"]["adresse"] = "";
	$placeHolderslate_domains["English"]["adresse"] = "";
	$fieldLabelslate_domains["English"]["tel"] = "Tel";
	$fieldToolTipslate_domains["English"]["tel"] = "";
	$placeHolderslate_domains["English"]["tel"] = "";
	$fieldLabelslate_domains["English"]["fax"] = "Fax";
	$fieldToolTipslate_domains["English"]["fax"] = "";
	$placeHolderslate_domains["English"]["fax"] = "";
	$fieldLabelslate_domains["English"]["email"] = "Email";
	$fieldToolTipslate_domains["English"]["email"] = "";
	$placeHolderslate_domains["English"]["email"] = "";
	$fieldLabelslate_domains["English"]["contact"] = "Contact";
	$fieldToolTipslate_domains["English"]["contact"] = "";
	$placeHolderslate_domains["English"]["contact"] = "";
	$fieldLabelslate_domains["English"]["activite"] = "Activite";
	$fieldToolTipslate_domains["English"]["activite"] = "";
	$placeHolderslate_domains["English"]["activite"] = "";
	$fieldLabelslate_domains["English"]["rubrique"] = "Rubrique";
	$fieldToolTipslate_domains["English"]["rubrique"] = "";
	$placeHolderslate_domains["English"]["rubrique"] = "";
	$fieldLabelslate_domains["English"]["date_recept"] = "Date Recept";
	$fieldToolTipslate_domains["English"]["date_recept"] = "";
	$placeHolderslate_domains["English"]["date_recept"] = "";
	$fieldLabelslate_domains["English"]["date_accept"] = "Date Accept";
	$fieldToolTipslate_domains["English"]["date_accept"] = "";
	$placeHolderslate_domains["English"]["date_accept"] = "";
	$fieldLabelslate_domains["English"]["date_activ"] = "Date Activ";
	$fieldToolTipslate_domains["English"]["date_activ"] = "";
	$placeHolderslate_domains["English"]["date_activ"] = "";
	$fieldLabelslate_domains["English"]["date_modif"] = "Date Modif";
	$fieldToolTipslate_domains["English"]["date_modif"] = "";
	$placeHolderslate_domains["English"]["date_modif"] = "";
	$fieldLabelslate_domains["English"]["date_annul"] = "Date Annul";
	$fieldToolTipslate_domains["English"]["date_annul"] = "";
	$placeHolderslate_domains["English"]["date_annul"] = "";
	$fieldLabelslate_domains["English"]["etat"] = "Etat";
	$fieldToolTipslate_domains["English"]["etat"] = "";
	$placeHolderslate_domains["English"]["etat"] = "";
	$fieldLabelslate_domains["English"]["modif"] = "Modif";
	$fieldToolTipslate_domains["English"]["modif"] = "";
	$placeHolderslate_domains["English"]["modif"] = "";
	$fieldLabelslate_domains["English"]["commentaire"] = "Commentaire";
	$fieldToolTipslate_domains["English"]["commentaire"] = "";
	$placeHolderslate_domains["English"]["commentaire"] = "";
	if (count($fieldToolTipslate_domains["English"]))
		$tdatalate_domains[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelslate_domains["Arabic"] = array();
	$fieldToolTipslate_domains["Arabic"] = array();
	$placeHolderslate_domains["Arabic"] = array();
	$pageTitleslate_domains["Arabic"] = array();
	$fieldLabelslate_domains["Arabic"]["id"] = "Id";
	$fieldToolTipslate_domains["Arabic"]["id"] = "";
	$placeHolderslate_domains["Arabic"]["id"] = "";
	$fieldLabelslate_domains["Arabic"]["code"] = "Code";
	$fieldToolTipslate_domains["Arabic"]["code"] = "";
	$placeHolderslate_domains["Arabic"]["code"] = "";
	$fieldLabelslate_domains["Arabic"]["domain"] = "Domain";
	$fieldToolTipslate_domains["Arabic"]["domain"] = "";
	$placeHolderslate_domains["Arabic"]["domain"] = "";
	$fieldLabelslate_domains["Arabic"]["ext"] = "Ext";
	$fieldToolTipslate_domains["Arabic"]["ext"] = "";
	$placeHolderslate_domains["Arabic"]["ext"] = "";
	$fieldLabelslate_domains["Arabic"]["fsi"] = "Fsi";
	$fieldToolTipslate_domains["Arabic"]["fsi"] = "";
	$placeHolderslate_domains["Arabic"]["fsi"] = "";
	$fieldLabelslate_domains["Arabic"]["organisme"] = "Organisme";
	$fieldToolTipslate_domains["Arabic"]["organisme"] = "";
	$placeHolderslate_domains["Arabic"]["organisme"] = "";
	$fieldLabelslate_domains["Arabic"]["adresse"] = "Adresse";
	$fieldToolTipslate_domains["Arabic"]["adresse"] = "";
	$placeHolderslate_domains["Arabic"]["adresse"] = "";
	$fieldLabelslate_domains["Arabic"]["tel"] = "Tel";
	$fieldToolTipslate_domains["Arabic"]["tel"] = "";
	$placeHolderslate_domains["Arabic"]["tel"] = "";
	$fieldLabelslate_domains["Arabic"]["fax"] = "Fax";
	$fieldToolTipslate_domains["Arabic"]["fax"] = "";
	$placeHolderslate_domains["Arabic"]["fax"] = "";
	$fieldLabelslate_domains["Arabic"]["email"] = "Email";
	$fieldToolTipslate_domains["Arabic"]["email"] = "";
	$placeHolderslate_domains["Arabic"]["email"] = "";
	$fieldLabelslate_domains["Arabic"]["contact"] = "Contact";
	$fieldToolTipslate_domains["Arabic"]["contact"] = "";
	$placeHolderslate_domains["Arabic"]["contact"] = "";
	$fieldLabelslate_domains["Arabic"]["activite"] = "Activite";
	$fieldToolTipslate_domains["Arabic"]["activite"] = "";
	$placeHolderslate_domains["Arabic"]["activite"] = "";
	$fieldLabelslate_domains["Arabic"]["rubrique"] = "Rubrique";
	$fieldToolTipslate_domains["Arabic"]["rubrique"] = "";
	$placeHolderslate_domains["Arabic"]["rubrique"] = "";
	$fieldLabelslate_domains["Arabic"]["date_recept"] = "Date Recept";
	$fieldToolTipslate_domains["Arabic"]["date_recept"] = "";
	$placeHolderslate_domains["Arabic"]["date_recept"] = "";
	$fieldLabelslate_domains["Arabic"]["date_accept"] = "Date Accept";
	$fieldToolTipslate_domains["Arabic"]["date_accept"] = "";
	$placeHolderslate_domains["Arabic"]["date_accept"] = "";
	$fieldLabelslate_domains["Arabic"]["date_activ"] = "Date Activ";
	$fieldToolTipslate_domains["Arabic"]["date_activ"] = "";
	$placeHolderslate_domains["Arabic"]["date_activ"] = "";
	$fieldLabelslate_domains["Arabic"]["date_modif"] = "Date Modif";
	$fieldToolTipslate_domains["Arabic"]["date_modif"] = "";
	$placeHolderslate_domains["Arabic"]["date_modif"] = "";
	$fieldLabelslate_domains["Arabic"]["date_annul"] = "Date Annul";
	$fieldToolTipslate_domains["Arabic"]["date_annul"] = "";
	$placeHolderslate_domains["Arabic"]["date_annul"] = "";
	$fieldLabelslate_domains["Arabic"]["etat"] = "Etat";
	$fieldToolTipslate_domains["Arabic"]["etat"] = "";
	$placeHolderslate_domains["Arabic"]["etat"] = "";
	$fieldLabelslate_domains["Arabic"]["modif"] = "Modif";
	$fieldToolTipslate_domains["Arabic"]["modif"] = "";
	$placeHolderslate_domains["Arabic"]["modif"] = "";
	$fieldLabelslate_domains["Arabic"]["commentaire"] = "Commentaire";
	$fieldToolTipslate_domains["Arabic"]["commentaire"] = "";
	$placeHolderslate_domains["Arabic"]["commentaire"] = "";
	if (count($fieldToolTipslate_domains["Arabic"]))
		$tdatalate_domains[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelslate_domains["French"] = array();
	$fieldToolTipslate_domains["French"] = array();
	$placeHolderslate_domains["French"] = array();
	$pageTitleslate_domains["French"] = array();
	$fieldLabelslate_domains["French"]["id"] = "Id";
	$fieldToolTipslate_domains["French"]["id"] = "";
	$placeHolderslate_domains["French"]["id"] = "";
	$fieldLabelslate_domains["French"]["code"] = "Code";
	$fieldToolTipslate_domains["French"]["code"] = "";
	$placeHolderslate_domains["French"]["code"] = "";
	$fieldLabelslate_domains["French"]["domain"] = "Domain";
	$fieldToolTipslate_domains["French"]["domain"] = "";
	$placeHolderslate_domains["French"]["domain"] = "";
	$fieldLabelslate_domains["French"]["ext"] = "Ext";
	$fieldToolTipslate_domains["French"]["ext"] = "";
	$placeHolderslate_domains["French"]["ext"] = "";
	$fieldLabelslate_domains["French"]["fsi"] = "Fsi";
	$fieldToolTipslate_domains["French"]["fsi"] = "";
	$placeHolderslate_domains["French"]["fsi"] = "";
	$fieldLabelslate_domains["French"]["organisme"] = "Organisme";
	$fieldToolTipslate_domains["French"]["organisme"] = "";
	$placeHolderslate_domains["French"]["organisme"] = "";
	$fieldLabelslate_domains["French"]["adresse"] = "Adresse";
	$fieldToolTipslate_domains["French"]["adresse"] = "";
	$placeHolderslate_domains["French"]["adresse"] = "";
	$fieldLabelslate_domains["French"]["tel"] = "Tel";
	$fieldToolTipslate_domains["French"]["tel"] = "";
	$placeHolderslate_domains["French"]["tel"] = "";
	$fieldLabelslate_domains["French"]["fax"] = "Fax";
	$fieldToolTipslate_domains["French"]["fax"] = "";
	$placeHolderslate_domains["French"]["fax"] = "";
	$fieldLabelslate_domains["French"]["email"] = "Email";
	$fieldToolTipslate_domains["French"]["email"] = "";
	$placeHolderslate_domains["French"]["email"] = "";
	$fieldLabelslate_domains["French"]["contact"] = "Contact";
	$fieldToolTipslate_domains["French"]["contact"] = "";
	$placeHolderslate_domains["French"]["contact"] = "";
	$fieldLabelslate_domains["French"]["activite"] = "Activite";
	$fieldToolTipslate_domains["French"]["activite"] = "";
	$placeHolderslate_domains["French"]["activite"] = "";
	$fieldLabelslate_domains["French"]["rubrique"] = "Rubrique";
	$fieldToolTipslate_domains["French"]["rubrique"] = "";
	$placeHolderslate_domains["French"]["rubrique"] = "";
	$fieldLabelslate_domains["French"]["date_recept"] = "Date Recept";
	$fieldToolTipslate_domains["French"]["date_recept"] = "";
	$placeHolderslate_domains["French"]["date_recept"] = "";
	$fieldLabelslate_domains["French"]["date_accept"] = "Date Accept";
	$fieldToolTipslate_domains["French"]["date_accept"] = "";
	$placeHolderslate_domains["French"]["date_accept"] = "";
	$fieldLabelslate_domains["French"]["date_activ"] = "Date Activ";
	$fieldToolTipslate_domains["French"]["date_activ"] = "";
	$placeHolderslate_domains["French"]["date_activ"] = "";
	$fieldLabelslate_domains["French"]["date_modif"] = "Date Modif";
	$fieldToolTipslate_domains["French"]["date_modif"] = "";
	$placeHolderslate_domains["French"]["date_modif"] = "";
	$fieldLabelslate_domains["French"]["date_annul"] = "Date Annul";
	$fieldToolTipslate_domains["French"]["date_annul"] = "";
	$placeHolderslate_domains["French"]["date_annul"] = "";
	$fieldLabelslate_domains["French"]["etat"] = "Etat";
	$fieldToolTipslate_domains["French"]["etat"] = "";
	$placeHolderslate_domains["French"]["etat"] = "";
	$fieldLabelslate_domains["French"]["modif"] = "Modif";
	$fieldToolTipslate_domains["French"]["modif"] = "";
	$placeHolderslate_domains["French"]["modif"] = "";
	$fieldLabelslate_domains["French"]["commentaire"] = "Commentaire";
	$fieldToolTipslate_domains["French"]["commentaire"] = "";
	$placeHolderslate_domains["French"]["commentaire"] = "";
	if (count($fieldToolTipslate_domains["French"]))
		$tdatalate_domains[".isUseToolTips"] = true;
}


	$tdatalate_domains[".NCSearch"] = true;



$tdatalate_domains[".shortTableName"] = "late_domains";
$tdatalate_domains[".nSecOptions"] = 1;

$tdatalate_domains[".mainTableOwnerID"] = "fsi";
$tdatalate_domains[".entityType"] = 0;
$tdatalate_domains[".connId"] = "nicadmin_at_localhost";


$tdatalate_domains[".strOriginalTableName"] = "late_domains";

	



$tdatalate_domains[".showAddInPopup"] = false;

$tdatalate_domains[".showEditInPopup"] = false;

$tdatalate_domains[".showViewInPopup"] = false;

$tdatalate_domains[".listAjax"] = false;
//	temporary
//$tdatalate_domains[".listAjax"] = false;

	$tdatalate_domains[".audit"] = false;

	$tdatalate_domains[".locking"] = false;


$pages = $tdatalate_domains[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalate_domains[".edit"] = true;
	$tdatalate_domains[".afterEditAction"] = 1;
	$tdatalate_domains[".closePopupAfterEdit"] = 1;
	$tdatalate_domains[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalate_domains[".add"] = true;
$tdatalate_domains[".afterAddAction"] = 1;
$tdatalate_domains[".closePopupAfterAdd"] = 1;
$tdatalate_domains[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalate_domains[".list"] = true;
}



$tdatalate_domains[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalate_domains[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalate_domains[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalate_domains[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalate_domains[".printFriendly"] = true;
}



$tdatalate_domains[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalate_domains[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalate_domains[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalate_domains[".isUseAjaxSuggest"] = true;





$tdatalate_domains[".ajaxCodeSnippetAdded"] = false;

$tdatalate_domains[".buttonsAdded"] = false;

$tdatalate_domains[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalate_domains[".isUseTimeForSearch"] = false;


$tdatalate_domains[".badgeColor"] = "cd5c5c";


$tdatalate_domains[".allSearchFields"] = array();
$tdatalate_domains[".filterFields"] = array();
$tdatalate_domains[".requiredSearchFields"] = array();

$tdatalate_domains[".googleLikeFields"] = array();
$tdatalate_domains[".googleLikeFields"][] = "id";
$tdatalate_domains[".googleLikeFields"][] = "code";
$tdatalate_domains[".googleLikeFields"][] = "domain";
$tdatalate_domains[".googleLikeFields"][] = "ext";
$tdatalate_domains[".googleLikeFields"][] = "fsi";
$tdatalate_domains[".googleLikeFields"][] = "organisme";
$tdatalate_domains[".googleLikeFields"][] = "adresse";
$tdatalate_domains[".googleLikeFields"][] = "tel";
$tdatalate_domains[".googleLikeFields"][] = "fax";
$tdatalate_domains[".googleLikeFields"][] = "email";
$tdatalate_domains[".googleLikeFields"][] = "contact";
$tdatalate_domains[".googleLikeFields"][] = "activite";
$tdatalate_domains[".googleLikeFields"][] = "rubrique";
$tdatalate_domains[".googleLikeFields"][] = "date_recept";
$tdatalate_domains[".googleLikeFields"][] = "date_accept";
$tdatalate_domains[".googleLikeFields"][] = "date_activ";
$tdatalate_domains[".googleLikeFields"][] = "date_modif";
$tdatalate_domains[".googleLikeFields"][] = "date_annul";
$tdatalate_domains[".googleLikeFields"][] = "etat";
$tdatalate_domains[".googleLikeFields"][] = "modif";
$tdatalate_domains[".googleLikeFields"][] = "commentaire";



$tdatalate_domains[".tableType"] = "list";

$tdatalate_domains[".printerPageOrientation"] = 0;
$tdatalate_domains[".nPrinterPageScale"] = 100;

$tdatalate_domains[".nPrinterSplitRecords"] = 40;

$tdatalate_domains[".geocodingEnabled"] = false;










$tdatalate_domains[".pageSize"] = 20;

$tdatalate_domains[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalate_domains[".strOrderBy"] = $tstrOrderBy;

$tdatalate_domains[".orderindexes"] = array();


$tdatalate_domains[".sqlHead"] = "SELECT id,  	code,  	`domain`,  	ext,  	fsi,  	organisme,  	adresse,  	tel,  	fax,  	email,  	contact,  	activite,  	rubrique,  	date_recept,  	date_accept,  	date_activ,  	date_modif,  	date_annul,  	etat,  	modif,  	commentaire";
$tdatalate_domains[".sqlFrom"] = "FROM late_domains";
$tdatalate_domains[".sqlWhereExpr"] = "";
$tdatalate_domains[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalate_domains[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalate_domains[".arrGroupsPerPage"] = $arrGPP;

$tdatalate_domains[".highlightSearchResults"] = true;

$tableKeyslate_domains = array();
$tableKeyslate_domains[] = "id";
$tdatalate_domains[".Keys"] = $tableKeyslate_domains;


$tdatalate_domains[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatalate_domains["id"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "code";

		$fdata["sourceSingle"] = "code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatalate_domains["code"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "code";
//	domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domain";
	$fdata["GoodName"] = "domain";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","domain");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domain";

		$fdata["sourceSingle"] = "domain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`domain`";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatalate_domains["domain"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "domain";
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","ext");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ext";

		$fdata["sourceSingle"] = "ext";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext";

	
	
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


	$tdatalate_domains["ext"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "ext";
//	fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fsi";
	$fdata["GoodName"] = "fsi";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","fsi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fsi";

		$fdata["sourceSingle"] = "fsi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fsi";

	
	
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


	$tdatalate_domains["fsi"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "fsi";
//	organisme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "organisme";
	$fdata["GoodName"] = "organisme";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","organisme");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "organisme";

		$fdata["sourceSingle"] = "organisme";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organisme";

	
	
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


	$tdatalate_domains["organisme"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "organisme";
//	adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "adresse";
	$fdata["GoodName"] = "adresse";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","adresse");
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


	$tdatalate_domains["adresse"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "adresse";
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","tel");
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


	$tdatalate_domains["tel"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "tel";
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","fax");
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


	$tdatalate_domains["fax"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "fax";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","email");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalate_domains["email"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "email";
//	contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contact";
	$fdata["GoodName"] = "contact";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","contact");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact";

		$fdata["sourceSingle"] = "contact";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact";

	
	
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


	$tdatalate_domains["contact"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "contact";
//	activite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "activite";
	$fdata["GoodName"] = "activite";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","activite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "activite";

		$fdata["sourceSingle"] = "activite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activite";

	
	
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


	$tdatalate_domains["activite"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "activite";
//	rubrique
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rubrique";
	$fdata["GoodName"] = "rubrique";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","rubrique");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rubrique";

		$fdata["sourceSingle"] = "rubrique";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rubrique";

	
	
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


	$tdatalate_domains["rubrique"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "rubrique";
//	date_recept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "date_recept";
	$fdata["GoodName"] = "date_recept";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","date_recept");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_recept";

		$fdata["sourceSingle"] = "date_recept";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_recept";

	
	
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


	$tdatalate_domains["date_recept"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "date_recept";
//	date_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "date_accept";
	$fdata["GoodName"] = "date_accept";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","date_accept");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_accept";

		$fdata["sourceSingle"] = "date_accept";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_accept";

	
	
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


	$tdatalate_domains["date_accept"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "date_accept";
//	date_activ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "date_activ";
	$fdata["GoodName"] = "date_activ";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","date_activ");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_activ";

		$fdata["sourceSingle"] = "date_activ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_activ";

	
	
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


	$tdatalate_domains["date_activ"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "date_activ";
//	date_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "date_modif";
	$fdata["GoodName"] = "date_modif";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","date_modif");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdatalate_domains["date_modif"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "date_modif";
//	date_annul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "date_annul";
	$fdata["GoodName"] = "date_annul";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","date_annul");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_annul";

		$fdata["sourceSingle"] = "date_annul";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_annul";

	
	
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


	$tdatalate_domains["date_annul"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "date_annul";
//	etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "etat";
	$fdata["GoodName"] = "etat";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","etat");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatalate_domains["etat"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "etat";
//	modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "modif";
	$fdata["GoodName"] = "modif";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","modif");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "modif";

		$fdata["sourceSingle"] = "modif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modif";

	
	
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


	$tdatalate_domains["modif"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "modif";
//	commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "commentaire";
	$fdata["GoodName"] = "commentaire";
	$fdata["ownerTable"] = "late_domains";
	$fdata["Label"] = GetFieldLabel("late_domains","commentaire");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "commentaire";

		$fdata["sourceSingle"] = "commentaire";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commentaire";

	
	
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


	$tdatalate_domains["commentaire"] = $fdata;
		$tdatalate_domains[".searchableFields"][] = "commentaire";


$tables_data["late_domains"]=&$tdatalate_domains;
$field_labels["late_domains"] = &$fieldLabelslate_domains;
$fieldToolTips["late_domains"] = &$fieldToolTipslate_domains;
$placeHolders["late_domains"] = &$placeHolderslate_domains;
$page_titles["late_domains"] = &$pageTitleslate_domains;


changeTextControlsToDate( "late_domains" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["late_domains"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["late_domains"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["late_domains"][0] = $masterParams;
				$masterTablesData["late_domains"][0]["masterKeys"] = array();
	$masterTablesData["late_domains"][0]["masterKeys"][]="id";
				$masterTablesData["late_domains"][0]["detailKeys"] = array();
	$masterTablesData["late_domains"][0]["detailKeys"][]="contact";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="extensions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="extensions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "extensions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["late_domains"][1] = $masterParams;
				$masterTablesData["late_domains"][1]["masterKeys"] = array();
	$masterTablesData["late_domains"][1]["masterKeys"][]="id";
				$masterTablesData["late_domains"][1]["detailKeys"] = array();
	$masterTablesData["late_domains"][1]["detailKeys"][]="ext";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_late_domains()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	`domain`,  	ext,  	fsi,  	organisme,  	adresse,  	tel,  	fax,  	email,  	contact,  	activite,  	rubrique,  	date_recept,  	date_accept,  	date_activ,  	date_modif,  	date_annul,  	etat,  	modif,  	commentaire";
$proto0["m_strFrom"] = "FROM late_domains";
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
	"m_strName" => "id",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "late_domains";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "late_domains";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domain",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto10["m_sql"] = "`domain`";
$proto10["m_srcTableName"] = "late_domains";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto12["m_sql"] = "ext";
$proto12["m_srcTableName"] = "late_domains";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fsi",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto14["m_sql"] = "fsi";
$proto14["m_srcTableName"] = "late_domains";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "organisme",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto16["m_sql"] = "organisme";
$proto16["m_srcTableName"] = "late_domains";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto18["m_sql"] = "adresse";
$proto18["m_srcTableName"] = "late_domains";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto20["m_sql"] = "tel";
$proto20["m_srcTableName"] = "late_domains";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto22["m_sql"] = "fax";
$proto22["m_srcTableName"] = "late_domains";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto24["m_sql"] = "email";
$proto24["m_srcTableName"] = "late_domains";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contact",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto26["m_sql"] = "contact";
$proto26["m_srcTableName"] = "late_domains";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "activite",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto28["m_sql"] = "activite";
$proto28["m_srcTableName"] = "late_domains";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "rubrique",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto30["m_sql"] = "rubrique";
$proto30["m_srcTableName"] = "late_domains";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "date_recept",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto32["m_sql"] = "date_recept";
$proto32["m_srcTableName"] = "late_domains";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "date_accept",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto34["m_sql"] = "date_accept";
$proto34["m_srcTableName"] = "late_domains";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "date_activ",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto36["m_sql"] = "date_activ";
$proto36["m_srcTableName"] = "late_domains";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modif",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto38["m_sql"] = "date_modif";
$proto38["m_srcTableName"] = "late_domains";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "date_annul",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto40["m_sql"] = "date_annul";
$proto40["m_srcTableName"] = "late_domains";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "etat",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto42["m_sql"] = "etat";
$proto42["m_srcTableName"] = "late_domains";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "modif",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto44["m_sql"] = "modif";
$proto44["m_srcTableName"] = "late_domains";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaire",
	"m_strTable" => "late_domains",
	"m_srcTableName" => "late_domains"
));

$proto46["m_sql"] = "commentaire";
$proto46["m_srcTableName"] = "late_domains";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "late_domains";
$proto49["m_srcTableName"] = "late_domains";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "code";
$proto49["m_columns"][] = "domain";
$proto49["m_columns"][] = "ext";
$proto49["m_columns"][] = "fsi";
$proto49["m_columns"][] = "organisme";
$proto49["m_columns"][] = "adresse";
$proto49["m_columns"][] = "tel";
$proto49["m_columns"][] = "fax";
$proto49["m_columns"][] = "email";
$proto49["m_columns"][] = "contact";
$proto49["m_columns"][] = "activite";
$proto49["m_columns"][] = "rubrique";
$proto49["m_columns"][] = "date_recept";
$proto49["m_columns"][] = "date_accept";
$proto49["m_columns"][] = "date_activ";
$proto49["m_columns"][] = "date_modif";
$proto49["m_columns"][] = "date_annul";
$proto49["m_columns"][] = "etat";
$proto49["m_columns"][] = "modif";
$proto49["m_columns"][] = "commentaire";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "late_domains";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "late_domains";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="late_domains";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_late_domains = createSqlQuery_late_domains();


	
		;

																					

$tdatalate_domains[".sqlquery"] = $queryData_late_domains;



$tdatalate_domains[".hasEvents"] = false;

?>