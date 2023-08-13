<?php
$tdatadomains = array();
$tdatadomains[".searchableFields"] = array();
$tdatadomains[".ShortName"] = "domains";
$tdatadomains[".OwnerID"] = "fsi";
$tdatadomains[".OriginalTable"] = "domains";


$tdatadomains[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadomains[".originalPagesByType"] = $tdatadomains[".pagesByType"];
$tdatadomains[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadomains[".originalPages"] = $tdatadomains[".pages"];
$tdatadomains[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadomains[".originalDefaultPages"] = $tdatadomains[".defaultPages"];

//	field labels
$fieldLabelsdomains = array();
$fieldToolTipsdomains = array();
$pageTitlesdomains = array();
$placeHoldersdomains = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdomains["French"] = array();
	$fieldToolTipsdomains["French"] = array();
	$placeHoldersdomains["French"] = array();
	$pageTitlesdomains["French"] = array();
	$fieldLabelsdomains["French"]["id"] = "Id";
	$fieldToolTipsdomains["French"]["id"] = "";
	$placeHoldersdomains["French"]["id"] = "";
	$fieldLabelsdomains["French"]["code"] = "Code";
	$fieldToolTipsdomains["French"]["code"] = "";
	$placeHoldersdomains["French"]["code"] = "";
	$fieldLabelsdomains["French"]["domain"] = "Domain";
	$fieldToolTipsdomains["French"]["domain"] = "";
	$placeHoldersdomains["French"]["domain"] = "";
	$fieldLabelsdomains["French"]["domainidn"] = "Domainidn";
	$fieldToolTipsdomains["French"]["domainidn"] = "";
	$placeHoldersdomains["French"]["domainidn"] = "";
	$fieldLabelsdomains["French"]["ext"] = "Ext";
	$fieldToolTipsdomains["French"]["ext"] = "";
	$placeHoldersdomains["French"]["ext"] = "";
	$fieldLabelsdomains["French"]["fsi"] = "Fsi";
	$fieldToolTipsdomains["French"]["fsi"] = "";
	$placeHoldersdomains["French"]["fsi"] = "";
	$fieldLabelsdomains["French"]["organisme"] = "Organisme";
	$fieldToolTipsdomains["French"]["organisme"] = "";
	$placeHoldersdomains["French"]["organisme"] = "";
	$fieldLabelsdomains["French"]["adresse"] = "Adresse";
	$fieldToolTipsdomains["French"]["adresse"] = "";
	$placeHoldersdomains["French"]["adresse"] = "";
	$fieldLabelsdomains["French"]["tel"] = "Tel";
	$fieldToolTipsdomains["French"]["tel"] = "";
	$placeHoldersdomains["French"]["tel"] = "";
	$fieldLabelsdomains["French"]["fax"] = "Fax";
	$fieldToolTipsdomains["French"]["fax"] = "";
	$placeHoldersdomains["French"]["fax"] = "";
	$fieldLabelsdomains["French"]["email"] = "Email";
	$fieldToolTipsdomains["French"]["email"] = "";
	$placeHoldersdomains["French"]["email"] = "";
	$fieldLabelsdomains["French"]["contact"] = "Contact";
	$fieldToolTipsdomains["French"]["contact"] = "";
	$placeHoldersdomains["French"]["contact"] = "";
	$fieldLabelsdomains["French"]["activite"] = "Activite";
	$fieldToolTipsdomains["French"]["activite"] = "";
	$placeHoldersdomains["French"]["activite"] = "";
	$fieldLabelsdomains["French"]["rubrique"] = "Rubrique";
	$fieldToolTipsdomains["French"]["rubrique"] = "";
	$placeHoldersdomains["French"]["rubrique"] = "";
	$fieldLabelsdomains["French"]["date_recept"] = "Date Recept";
	$fieldToolTipsdomains["French"]["date_recept"] = "";
	$placeHoldersdomains["French"]["date_recept"] = "";
	$fieldLabelsdomains["French"]["date_accept"] = "Date Accept";
	$fieldToolTipsdomains["French"]["date_accept"] = "";
	$placeHoldersdomains["French"]["date_accept"] = "";
	$fieldLabelsdomains["French"]["date_activ"] = "Date Activ";
	$fieldToolTipsdomains["French"]["date_activ"] = "";
	$placeHoldersdomains["French"]["date_activ"] = "";
	$fieldLabelsdomains["French"]["date_modif"] = "Date Modif";
	$fieldToolTipsdomains["French"]["date_modif"] = "";
	$placeHoldersdomains["French"]["date_modif"] = "";
	$fieldLabelsdomains["French"]["date_annul"] = "Date Annul";
	$fieldToolTipsdomains["French"]["date_annul"] = "";
	$placeHoldersdomains["French"]["date_annul"] = "";
	$fieldLabelsdomains["French"]["date_annul_due"] = "Date Annul Due";
	$fieldToolTipsdomains["French"]["date_annul_due"] = "";
	$placeHoldersdomains["French"]["date_annul_due"] = "";
	$fieldLabelsdomains["French"]["etat"] = "Etat";
	$fieldToolTipsdomains["French"]["etat"] = "";
	$placeHoldersdomains["French"]["etat"] = "";
	$fieldLabelsdomains["French"]["modif"] = "Modif";
	$fieldToolTipsdomains["French"]["modif"] = "";
	$placeHoldersdomains["French"]["modif"] = "";
	$fieldLabelsdomains["French"]["commentaire"] = "Commentaire";
	$fieldToolTipsdomains["French"]["commentaire"] = "";
	$placeHoldersdomains["French"]["commentaire"] = "";
	$fieldLabelsdomains["French"]["ns_modif"] = "Ns Modif";
	$fieldToolTipsdomains["French"]["ns_modif"] = "";
	$placeHoldersdomains["French"]["ns_modif"] = "";
	$fieldLabelsdomains["French"]["id_fsi_in"] = "Id Fsi In";
	$fieldToolTipsdomains["French"]["id_fsi_in"] = "";
	$placeHoldersdomains["French"]["id_fsi_in"] = "";
	$fieldLabelsdomains["French"]["domain_pw"] = "Domain Pw";
	$fieldToolTipsdomains["French"]["domain_pw"] = "";
	$placeHoldersdomains["French"]["domain_pw"] = "";
	$fieldLabelsdomains["French"]["date_blocked"] = "Date Blocked";
	$fieldToolTipsdomains["French"]["date_blocked"] = "";
	$placeHoldersdomains["French"]["date_blocked"] = "";
	$fieldLabelsdomains["French"]["date_blocked_max"] = "Date Blocked Max";
	$fieldToolTipsdomains["French"]["date_blocked_max"] = "";
	$placeHoldersdomains["French"]["date_blocked_max"] = "";
	$fieldLabelsdomains["French"]["blocked_by"] = "Blocked By";
	$fieldToolTipsdomains["French"]["blocked_by"] = "";
	$placeHoldersdomains["French"]["blocked_by"] = "";
	$fieldLabelsdomains["French"]["date_unblocked"] = "Date Unblocked";
	$fieldToolTipsdomains["French"]["date_unblocked"] = "";
	$placeHoldersdomains["French"]["date_unblocked"] = "";
	$fieldLabelsdomains["French"]["date_transfer_req"] = "Date Transfer Req";
	$fieldToolTipsdomains["French"]["date_transfer_req"] = "";
	$placeHoldersdomains["French"]["date_transfer_req"] = "";
	$fieldLabelsdomains["French"]["date_transfer_due"] = "Date Transfer Due";
	$fieldToolTipsdomains["French"]["date_transfer_due"] = "";
	$placeHoldersdomains["French"]["date_transfer_due"] = "";
	$fieldLabelsdomains["French"]["date_transfer_canceled"] = "Date Transfer Canceled";
	$fieldToolTipsdomains["French"]["date_transfer_canceled"] = "";
	$placeHoldersdomains["French"]["date_transfer_canceled"] = "";
	$fieldLabelsdomains["French"]["date_transfer_accepted"] = "Date Transfer Accepted";
	$fieldToolTipsdomains["French"]["date_transfer_accepted"] = "";
	$placeHoldersdomains["French"]["date_transfer_accepted"] = "";
	$fieldLabelsdomains["French"]["date_transfer_rejected"] = "Date Transfer Rejected";
	$fieldToolTipsdomains["French"]["date_transfer_rejected"] = "";
	$placeHoldersdomains["French"]["date_transfer_rejected"] = "";
	$fieldLabelsdomains["French"]["date_annul_req"] = "Date Annul Req";
	$fieldToolTipsdomains["French"]["date_annul_req"] = "";
	$placeHoldersdomains["French"]["date_annul_req"] = "";
	$fieldLabelsdomains["French"]["last_status"] = "Last Status";
	$fieldToolTipsdomains["French"]["last_status"] = "";
	$placeHoldersdomains["French"]["last_status"] = "";
	$fieldLabelsdomains["French"]["updated_by"] = "Updated By";
	$fieldToolTipsdomains["French"]["updated_by"] = "";
	$placeHoldersdomains["French"]["updated_by"] = "";
	$fieldLabelsdomains["French"]["private"] = "Private";
	$fieldToolTipsdomains["French"]["private"] = "";
	$placeHoldersdomains["French"]["private"] = "";
	$fieldLabelsdomains["French"]["mgmt"] = "Mgmt";
	$fieldToolTipsdomains["French"]["mgmt"] = "";
	$placeHoldersdomains["French"]["mgmt"] = "";
	$fieldLabelsdomains["French"]["forward"] = "Forward";
	$fieldToolTipsdomains["French"]["forward"] = "";
	$placeHoldersdomains["French"]["forward"] = "";
	$fieldLabelsdomains["French"]["dnssec"] = "Dnssec";
	$fieldToolTipsdomains["French"]["dnssec"] = "";
	$placeHoldersdomains["French"]["dnssec"] = "";
	$fieldLabelsdomains["French"]["stat"] = "Stat";
	$fieldToolTipsdomains["French"]["stat"] = "";
	$placeHoldersdomains["French"]["stat"] = "";
	$fieldLabelsdomains["French"]["in"] = "In";
	$fieldToolTipsdomains["French"]["in"] = "";
	$placeHoldersdomains["French"]["in"] = "";
	$fieldLabelsdomains["French"]["change_prop"] = "Change Prop";
	$fieldToolTipsdomains["French"]["change_prop"] = "";
	$placeHoldersdomains["French"]["change_prop"] = "";
	$fieldLabelsdomains["French"]["reg_annul_reason"] = "Reg Annul Reason";
	$fieldToolTipsdomains["French"]["reg_annul_reason"] = "";
	$placeHoldersdomains["French"]["reg_annul_reason"] = "";
	$fieldLabelsdomains["French"]["reg_comment"] = "Reg Comment";
	$fieldToolTipsdomains["French"]["reg_comment"] = "";
	$placeHoldersdomains["French"]["reg_comment"] = "";
	$fieldLabelsdomains["French"]["reg_transfer_prohibited"] = "Reg Transfer Prohibited";
	$fieldToolTipsdomains["French"]["reg_transfer_prohibited"] = "";
	$placeHoldersdomains["French"]["reg_transfer_prohibited"] = "";
	$fieldLabelsdomains["French"]["reg_restore_prohibited"] = "Reg Restore Prohibited";
	$fieldToolTipsdomains["French"]["reg_restore_prohibited"] = "";
	$placeHoldersdomains["French"]["reg_restore_prohibited"] = "";
	if (count($fieldToolTipsdomains["French"]))
		$tdatadomains[".isUseToolTips"] = true;
}


	$tdatadomains[".NCSearch"] = true;



$tdatadomains[".shortTableName"] = "domains";
$tdatadomains[".nSecOptions"] = 1;

$tdatadomains[".mainTableOwnerID"] = "fsi";
$tdatadomains[".entityType"] = 0;
$tdatadomains[".connId"] = "nicadmin_at_localhost";


$tdatadomains[".strOriginalTableName"] = "domains";

	



$tdatadomains[".showAddInPopup"] = false;

$tdatadomains[".showEditInPopup"] = false;

$tdatadomains[".showViewInPopup"] = false;

$tdatadomains[".listAjax"] = false;
//	temporary
//$tdatadomains[".listAjax"] = false;

	$tdatadomains[".audit"] = false;

	$tdatadomains[".locking"] = false;


$pages = $tdatadomains[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadomains[".edit"] = true;
	$tdatadomains[".afterEditAction"] = 1;
	$tdatadomains[".closePopupAfterEdit"] = 1;
	$tdatadomains[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadomains[".add"] = true;
$tdatadomains[".afterAddAction"] = 1;
$tdatadomains[".closePopupAfterAdd"] = 1;
$tdatadomains[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadomains[".list"] = true;
}



$tdatadomains[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadomains[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadomains[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadomains[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadomains[".printFriendly"] = true;
}



$tdatadomains[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadomains[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadomains[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadomains[".isUseAjaxSuggest"] = true;





$tdatadomains[".ajaxCodeSnippetAdded"] = false;

$tdatadomains[".buttonsAdded"] = false;

$tdatadomains[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadomains[".isUseTimeForSearch"] = false;


$tdatadomains[".badgeColor"] = "8fbc8b";


$tdatadomains[".allSearchFields"] = array();
$tdatadomains[".filterFields"] = array();
$tdatadomains[".requiredSearchFields"] = array();

$tdatadomains[".googleLikeFields"] = array();
$tdatadomains[".googleLikeFields"][] = "id";
$tdatadomains[".googleLikeFields"][] = "code";
$tdatadomains[".googleLikeFields"][] = "domain";
$tdatadomains[".googleLikeFields"][] = "domainidn";
$tdatadomains[".googleLikeFields"][] = "ext";
$tdatadomains[".googleLikeFields"][] = "fsi";
$tdatadomains[".googleLikeFields"][] = "organisme";
$tdatadomains[".googleLikeFields"][] = "adresse";
$tdatadomains[".googleLikeFields"][] = "tel";
$tdatadomains[".googleLikeFields"][] = "fax";
$tdatadomains[".googleLikeFields"][] = "email";
$tdatadomains[".googleLikeFields"][] = "contact";
$tdatadomains[".googleLikeFields"][] = "activite";
$tdatadomains[".googleLikeFields"][] = "rubrique";
$tdatadomains[".googleLikeFields"][] = "date_recept";
$tdatadomains[".googleLikeFields"][] = "date_accept";
$tdatadomains[".googleLikeFields"][] = "date_activ";
$tdatadomains[".googleLikeFields"][] = "date_modif";
$tdatadomains[".googleLikeFields"][] = "date_annul";
$tdatadomains[".googleLikeFields"][] = "date_annul_due";
$tdatadomains[".googleLikeFields"][] = "etat";
$tdatadomains[".googleLikeFields"][] = "modif";
$tdatadomains[".googleLikeFields"][] = "commentaire";
$tdatadomains[".googleLikeFields"][] = "ns_modif";
$tdatadomains[".googleLikeFields"][] = "id_fsi_in";
$tdatadomains[".googleLikeFields"][] = "domain_pw";
$tdatadomains[".googleLikeFields"][] = "date_blocked";
$tdatadomains[".googleLikeFields"][] = "date_blocked_max";
$tdatadomains[".googleLikeFields"][] = "blocked_by";
$tdatadomains[".googleLikeFields"][] = "date_unblocked";
$tdatadomains[".googleLikeFields"][] = "date_transfer_req";
$tdatadomains[".googleLikeFields"][] = "date_transfer_due";
$tdatadomains[".googleLikeFields"][] = "date_transfer_canceled";
$tdatadomains[".googleLikeFields"][] = "date_transfer_accepted";
$tdatadomains[".googleLikeFields"][] = "date_transfer_rejected";
$tdatadomains[".googleLikeFields"][] = "date_annul_req";
$tdatadomains[".googleLikeFields"][] = "last_status";
$tdatadomains[".googleLikeFields"][] = "updated_by";
$tdatadomains[".googleLikeFields"][] = "private";
$tdatadomains[".googleLikeFields"][] = "mgmt";
$tdatadomains[".googleLikeFields"][] = "forward";
$tdatadomains[".googleLikeFields"][] = "dnssec";
$tdatadomains[".googleLikeFields"][] = "stat";
$tdatadomains[".googleLikeFields"][] = "in";
$tdatadomains[".googleLikeFields"][] = "change_prop";
$tdatadomains[".googleLikeFields"][] = "reg_annul_reason";
$tdatadomains[".googleLikeFields"][] = "reg_comment";
$tdatadomains[".googleLikeFields"][] = "reg_transfer_prohibited";
$tdatadomains[".googleLikeFields"][] = "reg_restore_prohibited";



$tdatadomains[".tableType"] = "list";

$tdatadomains[".printerPageOrientation"] = 0;
$tdatadomains[".nPrinterPageScale"] = 100;

$tdatadomains[".nPrinterSplitRecords"] = 40;

$tdatadomains[".geocodingEnabled"] = false;










$tdatadomains[".pageSize"] = 20;

$tdatadomains[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadomains[".strOrderBy"] = $tstrOrderBy;

$tdatadomains[".orderindexes"] = array();


$tdatadomains[".sqlHead"] = "SELECT id,  	code,  	`domain`,  	domainidn,  	ext,  	fsi,  	organisme,  	adresse,  	tel,  	fax,  	email,  	contact,  	activite,  	rubrique,  	date_recept,  	date_accept,  	date_activ,  	date_modif,  	date_annul,  	date_annul_due,  	etat,  	modif,  	commentaire,  	ns_modif,  	id_fsi_in,  	domain_pw,  	date_blocked,  	date_blocked_max,  	blocked_by,  	date_unblocked,  	date_transfer_req,  	date_transfer_due,  	date_transfer_canceled,  	date_transfer_accepted,  	date_transfer_rejected,  	date_annul_req,  	last_status,  	updated_by,  	`private`,  	mgmt,  	forward,  	dnssec,  	stat,  	`in`,  	change_prop,  	reg_annul_reason,  	reg_comment,  	reg_transfer_prohibited,  	reg_restore_prohibited";
$tdatadomains[".sqlFrom"] = "FROM domains";
$tdatadomains[".sqlWhereExpr"] = "";
$tdatadomains[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadomains[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadomains[".arrGroupsPerPage"] = $arrGPP;

$tdatadomains[".highlightSearchResults"] = true;

$tableKeysdomains = array();
$tableKeysdomains[] = "id";
$tdatadomains[".Keys"] = $tableKeysdomains;


$tdatadomains[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","id");
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


	$tdatadomains["id"] = $fdata;
		$tdatadomains[".searchableFields"][] = "id";
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","code");
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


	$tdatadomains["code"] = $fdata;
		$tdatadomains[".searchableFields"][] = "code";
//	domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "domain";
	$fdata["GoodName"] = "domain";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","domain");
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
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=63";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=63";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=63";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatadomains["domain"] = $fdata;
		$tdatadomains[".searchableFields"][] = "domain";
//	domainidn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domainidn";
	$fdata["GoodName"] = "domainidn";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","domainidn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domainidn";

		$fdata["sourceSingle"] = "domainidn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domainidn";

	
	
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
			$edata["EditParams"].= " maxlength=90";

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


	$tdatadomains["domainidn"] = $fdata;
		$tdatadomains[".searchableFields"][] = "domainidn";
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","ext");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "extensions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "nom";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadomains["ext"] = $fdata;
		$tdatadomains[".searchableFields"][] = "ext";
//	fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fsi";
	$fdata["GoodName"] = "fsi";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","fsi");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fsi";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_fsi";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadomains["fsi"] = $fdata;
		$tdatadomains[".searchableFields"][] = "fsi";
//	organisme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "organisme";
	$fdata["GoodName"] = "organisme";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","organisme");
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


	$tdatadomains["organisme"] = $fdata;
		$tdatadomains[".searchableFields"][] = "organisme";
//	adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "adresse";
	$fdata["GoodName"] = "adresse";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","adresse");
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


	$tdatadomains["adresse"] = $fdata;
		$tdatadomains[".searchableFields"][] = "adresse";
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","tel");
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


	$tdatadomains["tel"] = $fdata;
		$tdatadomains[".searchableFields"][] = "tel";
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","fax");
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


	$tdatadomains["fax"] = $fdata;
		$tdatadomains[".searchableFields"][] = "fax";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","email");
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


	$tdatadomains["email"] = $fdata;
		$tdatadomains[".searchableFields"][] = "email";
//	contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contact";
	$fdata["GoodName"] = "contact";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","contact");
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


	$tdatadomains["contact"] = $fdata;
		$tdatadomains[".searchableFields"][] = "contact";
//	activite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "activite";
	$fdata["GoodName"] = "activite";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","activite");
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


	$tdatadomains["activite"] = $fdata;
		$tdatadomains[".searchableFields"][] = "activite";
//	rubrique
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "rubrique";
	$fdata["GoodName"] = "rubrique";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","rubrique");
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


	$tdatadomains["rubrique"] = $fdata;
		$tdatadomains[".searchableFields"][] = "rubrique";
//	date_recept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "date_recept";
	$fdata["GoodName"] = "date_recept";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_recept");
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


	$tdatadomains["date_recept"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_recept";
//	date_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "date_accept";
	$fdata["GoodName"] = "date_accept";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_accept");
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


	$tdatadomains["date_accept"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_accept";
//	date_activ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "date_activ";
	$fdata["GoodName"] = "date_activ";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_activ");
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


	$tdatadomains["date_activ"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_activ";
//	date_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "date_modif";
	$fdata["GoodName"] = "date_modif";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_modif");
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


	$tdatadomains["date_modif"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_modif";
//	date_annul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "date_annul";
	$fdata["GoodName"] = "date_annul";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_annul");
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


	$tdatadomains["date_annul"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_annul";
//	date_annul_due
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "date_annul_due";
	$fdata["GoodName"] = "date_annul_due";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_annul_due");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_annul_due";

		$fdata["sourceSingle"] = "date_annul_due";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_annul_due";

	
	
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


	$tdatadomains["date_annul_due"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_annul_due";
//	etat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "etat";
	$fdata["GoodName"] = "etat";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","etat");
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


	$tdatadomains["etat"] = $fdata;
		$tdatadomains[".searchableFields"][] = "etat";
//	modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "modif";
	$fdata["GoodName"] = "modif";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","modif");
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


	$tdatadomains["modif"] = $fdata;
		$tdatadomains[".searchableFields"][] = "modif";
//	commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "commentaire";
	$fdata["GoodName"] = "commentaire";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","commentaire");
	$fdata["FieldType"] = 201;


	
	
			

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


	$tdatadomains["commentaire"] = $fdata;
		$tdatadomains[".searchableFields"][] = "commentaire";
//	ns_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ns_modif";
	$fdata["GoodName"] = "ns_modif";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","ns_modif");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ns_modif";

		$fdata["sourceSingle"] = "ns_modif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ns_modif";

	
	
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


	$tdatadomains["ns_modif"] = $fdata;
		$tdatadomains[".searchableFields"][] = "ns_modif";
//	id_fsi_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "id_fsi_in";
	$fdata["GoodName"] = "id_fsi_in";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","id_fsi_in");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fsi_in";

		$fdata["sourceSingle"] = "id_fsi_in";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fsi_in";

	
	
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


	$tdatadomains["id_fsi_in"] = $fdata;
		$tdatadomains[".searchableFields"][] = "id_fsi_in";
//	domain_pw
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "domain_pw";
	$fdata["GoodName"] = "domain_pw";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","domain_pw");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domain_pw";

		$fdata["sourceSingle"] = "domain_pw";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domain_pw";

	
	
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


	$tdatadomains["domain_pw"] = $fdata;
		$tdatadomains[".searchableFields"][] = "domain_pw";
//	date_blocked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "date_blocked";
	$fdata["GoodName"] = "date_blocked";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_blocked");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_blocked";

		$fdata["sourceSingle"] = "date_blocked";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_blocked";

	
	
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


	$tdatadomains["date_blocked"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_blocked";
//	date_blocked_max
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "date_blocked_max";
	$fdata["GoodName"] = "date_blocked_max";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_blocked_max");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_blocked_max";

		$fdata["sourceSingle"] = "date_blocked_max";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_blocked_max";

	
	
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


	$tdatadomains["date_blocked_max"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_blocked_max";
//	blocked_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "blocked_by";
	$fdata["GoodName"] = "blocked_by";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","blocked_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "blocked_by";

		$fdata["sourceSingle"] = "blocked_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "blocked_by";

	
	
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


	$tdatadomains["blocked_by"] = $fdata;
		$tdatadomains[".searchableFields"][] = "blocked_by";
//	date_unblocked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "date_unblocked";
	$fdata["GoodName"] = "date_unblocked";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_unblocked");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_unblocked";

		$fdata["sourceSingle"] = "date_unblocked";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_unblocked";

	
	
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


	$tdatadomains["date_unblocked"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_unblocked";
//	date_transfer_req
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "date_transfer_req";
	$fdata["GoodName"] = "date_transfer_req";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_transfer_req");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_transfer_req";

		$fdata["sourceSingle"] = "date_transfer_req";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_transfer_req";

	
	
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


	$tdatadomains["date_transfer_req"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_transfer_req";
//	date_transfer_due
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "date_transfer_due";
	$fdata["GoodName"] = "date_transfer_due";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_transfer_due");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_transfer_due";

		$fdata["sourceSingle"] = "date_transfer_due";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_transfer_due";

	
	
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


	$tdatadomains["date_transfer_due"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_transfer_due";
//	date_transfer_canceled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "date_transfer_canceled";
	$fdata["GoodName"] = "date_transfer_canceled";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_transfer_canceled");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_transfer_canceled";

		$fdata["sourceSingle"] = "date_transfer_canceled";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_transfer_canceled";

	
	
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


	$tdatadomains["date_transfer_canceled"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_transfer_canceled";
//	date_transfer_accepted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "date_transfer_accepted";
	$fdata["GoodName"] = "date_transfer_accepted";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_transfer_accepted");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_transfer_accepted";

		$fdata["sourceSingle"] = "date_transfer_accepted";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_transfer_accepted";

	
	
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


	$tdatadomains["date_transfer_accepted"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_transfer_accepted";
//	date_transfer_rejected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "date_transfer_rejected";
	$fdata["GoodName"] = "date_transfer_rejected";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_transfer_rejected");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_transfer_rejected";

		$fdata["sourceSingle"] = "date_transfer_rejected";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_transfer_rejected";

	
	
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


	$tdatadomains["date_transfer_rejected"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_transfer_rejected";
//	date_annul_req
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "date_annul_req";
	$fdata["GoodName"] = "date_annul_req";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","date_annul_req");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_annul_req";

		$fdata["sourceSingle"] = "date_annul_req";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_annul_req";

	
	
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


	$tdatadomains["date_annul_req"] = $fdata;
		$tdatadomains[".searchableFields"][] = "date_annul_req";
//	last_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "last_status";
	$fdata["GoodName"] = "last_status";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","last_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_status";

		$fdata["sourceSingle"] = "last_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_status";

	
	
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


	$tdatadomains["last_status"] = $fdata;
		$tdatadomains[".searchableFields"][] = "last_status";
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","updated_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "updated_by";

		$fdata["sourceSingle"] = "updated_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by";

	
	
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


	$tdatadomains["updated_by"] = $fdata;
		$tdatadomains[".searchableFields"][] = "updated_by";
//	private
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "private";
	$fdata["GoodName"] = "private";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","private");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "private";

		$fdata["sourceSingle"] = "private";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`private`";

	
	
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


	$tdatadomains["private"] = $fdata;
		$tdatadomains[".searchableFields"][] = "private";
//	mgmt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "mgmt";
	$fdata["GoodName"] = "mgmt";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","mgmt");
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


	$tdatadomains["mgmt"] = $fdata;
		$tdatadomains[".searchableFields"][] = "mgmt";
//	forward
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "forward";
	$fdata["GoodName"] = "forward";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","forward");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "forward";

		$fdata["sourceSingle"] = "forward";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "forward";

	
	
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


	$tdatadomains["forward"] = $fdata;
		$tdatadomains[".searchableFields"][] = "forward";
//	dnssec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "dnssec";
	$fdata["GoodName"] = "dnssec";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","dnssec");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "dnssec";

		$fdata["sourceSingle"] = "dnssec";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dnssec";

	
	
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
	$edata["LookupValues"][] = "";
	$edata["LookupValues"][] = "waiting";
	$edata["LookupValues"][] = "signed";

	
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


	$tdatadomains["dnssec"] = $fdata;
		$tdatadomains[".searchableFields"][] = "dnssec";
//	stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "stat";
	$fdata["GoodName"] = "stat";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","stat");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "stat";

		$fdata["sourceSingle"] = "stat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stat";

	
	
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


	$tdatadomains["stat"] = $fdata;
		$tdatadomains[".searchableFields"][] = "stat";
//	in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "in";
	$fdata["GoodName"] = "in";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","in");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "in";

		$fdata["sourceSingle"] = "in";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`in`";

	
	
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


	$tdatadomains["in"] = $fdata;
		$tdatadomains[".searchableFields"][] = "in";
//	change_prop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "change_prop";
	$fdata["GoodName"] = "change_prop";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","change_prop");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "change_prop";

		$fdata["sourceSingle"] = "change_prop";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "change_prop";

	
	
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


	$tdatadomains["change_prop"] = $fdata;
		$tdatadomains[".searchableFields"][] = "change_prop";
//	reg_annul_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "reg_annul_reason";
	$fdata["GoodName"] = "reg_annul_reason";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","reg_annul_reason");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reg_annul_reason";

		$fdata["sourceSingle"] = "reg_annul_reason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_annul_reason";

	
	
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


	$tdatadomains["reg_annul_reason"] = $fdata;
		$tdatadomains[".searchableFields"][] = "reg_annul_reason";
//	reg_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "reg_comment";
	$fdata["GoodName"] = "reg_comment";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","reg_comment");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reg_comment";

		$fdata["sourceSingle"] = "reg_comment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_comment";

	
	
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


	$tdatadomains["reg_comment"] = $fdata;
		$tdatadomains[".searchableFields"][] = "reg_comment";
//	reg_transfer_prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "reg_transfer_prohibited";
	$fdata["GoodName"] = "reg_transfer_prohibited";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","reg_transfer_prohibited");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "reg_transfer_prohibited";

		$fdata["sourceSingle"] = "reg_transfer_prohibited";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_transfer_prohibited";

	
	
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
	$edata["LookupValues"][] = "1";

	
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


	$tdatadomains["reg_transfer_prohibited"] = $fdata;
		$tdatadomains[".searchableFields"][] = "reg_transfer_prohibited";
//	reg_restore_prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "reg_restore_prohibited";
	$fdata["GoodName"] = "reg_restore_prohibited";
	$fdata["ownerTable"] = "domains";
	$fdata["Label"] = GetFieldLabel("domains","reg_restore_prohibited");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "reg_restore_prohibited";

		$fdata["sourceSingle"] = "reg_restore_prohibited";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_restore_prohibited";

	
	
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
	$edata["LookupValues"][] = "1";

	
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


	$tdatadomains["reg_restore_prohibited"] = $fdata;
		$tdatadomains[".searchableFields"][] = "reg_restore_prohibited";


$tables_data["domains"]=&$tdatadomains;
$field_labels["domains"] = &$fieldLabelsdomains;
$fieldToolTips["domains"] = &$fieldToolTipsdomains;
$placeHolders["domains"] = &$placeHoldersdomains;
$page_titles["domains"] = &$pageTitlesdomains;


changeTextControlsToDate( "domains" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["domains"] = array();
//	nameservers
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="nameservers";
		$detailsParam["dOriginalTable"] = "nameservers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "nameservers";
	$detailsParam["dCaptionTable"] = GetTableCaption("nameservers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["domains"][$dIndex] = $detailsParam;

	
		$detailsTablesData["domains"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["domains"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["domains"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["domains"][$dIndex]["detailKeys"][]="domain_id";
//	domain_contacts
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="domain_contacts";
		$detailsParam["dOriginalTable"] = "domain_contacts";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "domain_contacts";
	$detailsParam["dCaptionTable"] = GetTableCaption("domain_contacts");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["domains"][$dIndex] = $detailsParam;

	
		$detailsTablesData["domains"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["domains"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["domains"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["domains"][$dIndex]["detailKeys"][]="id_domain";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["domains"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_domains()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	code,  	`domain`,  	domainidn,  	ext,  	fsi,  	organisme,  	adresse,  	tel,  	fax,  	email,  	contact,  	activite,  	rubrique,  	date_recept,  	date_accept,  	date_activ,  	date_modif,  	date_annul,  	date_annul_due,  	etat,  	modif,  	commentaire,  	ns_modif,  	id_fsi_in,  	domain_pw,  	date_blocked,  	date_blocked_max,  	blocked_by,  	date_unblocked,  	date_transfer_req,  	date_transfer_due,  	date_transfer_canceled,  	date_transfer_accepted,  	date_transfer_rejected,  	date_annul_req,  	last_status,  	updated_by,  	`private`,  	mgmt,  	forward,  	dnssec,  	stat,  	`in`,  	change_prop,  	reg_annul_reason,  	reg_comment,  	reg_transfer_prohibited,  	reg_restore_prohibited";
$proto0["m_strFrom"] = "FROM domains";
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
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "domains";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto8["m_sql"] = "code";
$proto8["m_srcTableName"] = "domains";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "domain",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto10["m_sql"] = "`domain`";
$proto10["m_srcTableName"] = "domains";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domainidn",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto12["m_sql"] = "domainidn";
$proto12["m_srcTableName"] = "domains";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto14["m_sql"] = "ext";
$proto14["m_srcTableName"] = "domains";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fsi",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto16["m_sql"] = "fsi";
$proto16["m_srcTableName"] = "domains";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "organisme",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto18["m_sql"] = "organisme";
$proto18["m_srcTableName"] = "domains";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto20["m_sql"] = "adresse";
$proto20["m_srcTableName"] = "domains";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto22["m_sql"] = "tel";
$proto22["m_srcTableName"] = "domains";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto24["m_sql"] = "fax";
$proto24["m_srcTableName"] = "domains";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto26["m_sql"] = "email";
$proto26["m_srcTableName"] = "domains";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "contact",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto28["m_sql"] = "contact";
$proto28["m_srcTableName"] = "domains";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "activite",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto30["m_sql"] = "activite";
$proto30["m_srcTableName"] = "domains";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "rubrique",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto32["m_sql"] = "rubrique";
$proto32["m_srcTableName"] = "domains";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "date_recept",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto34["m_sql"] = "date_recept";
$proto34["m_srcTableName"] = "domains";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "date_accept",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto36["m_sql"] = "date_accept";
$proto36["m_srcTableName"] = "domains";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "date_activ",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto38["m_sql"] = "date_activ";
$proto38["m_srcTableName"] = "domains";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modif",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto40["m_sql"] = "date_modif";
$proto40["m_srcTableName"] = "domains";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "date_annul",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto42["m_sql"] = "date_annul";
$proto42["m_srcTableName"] = "domains";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "date_annul_due",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto44["m_sql"] = "date_annul_due";
$proto44["m_srcTableName"] = "domains";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "etat",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto46["m_sql"] = "etat";
$proto46["m_srcTableName"] = "domains";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "modif",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto48["m_sql"] = "modif";
$proto48["m_srcTableName"] = "domains";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaire",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto50["m_sql"] = "commentaire";
$proto50["m_srcTableName"] = "domains";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ns_modif",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto52["m_sql"] = "ns_modif";
$proto52["m_srcTableName"] = "domains";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fsi_in",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto54["m_sql"] = "id_fsi_in";
$proto54["m_srcTableName"] = "domains";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "domain_pw",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto56["m_sql"] = "domain_pw";
$proto56["m_srcTableName"] = "domains";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "date_blocked",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto58["m_sql"] = "date_blocked";
$proto58["m_srcTableName"] = "domains";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "date_blocked_max",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto60["m_sql"] = "date_blocked_max";
$proto60["m_srcTableName"] = "domains";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "blocked_by",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto62["m_sql"] = "blocked_by";
$proto62["m_srcTableName"] = "domains";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "date_unblocked",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto64["m_sql"] = "date_unblocked";
$proto64["m_srcTableName"] = "domains";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "date_transfer_req",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto66["m_sql"] = "date_transfer_req";
$proto66["m_srcTableName"] = "domains";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "date_transfer_due",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto68["m_sql"] = "date_transfer_due";
$proto68["m_srcTableName"] = "domains";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "date_transfer_canceled",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto70["m_sql"] = "date_transfer_canceled";
$proto70["m_srcTableName"] = "domains";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "date_transfer_accepted",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto72["m_sql"] = "date_transfer_accepted";
$proto72["m_srcTableName"] = "domains";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "date_transfer_rejected",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto74["m_sql"] = "date_transfer_rejected";
$proto74["m_srcTableName"] = "domains";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "date_annul_req",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto76["m_sql"] = "date_annul_req";
$proto76["m_srcTableName"] = "domains";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "last_status",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto78["m_sql"] = "last_status";
$proto78["m_srcTableName"] = "domains";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto80["m_sql"] = "updated_by";
$proto80["m_srcTableName"] = "domains";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "private",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto82["m_sql"] = "`private`";
$proto82["m_srcTableName"] = "domains";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "mgmt",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto84["m_sql"] = "mgmt";
$proto84["m_srcTableName"] = "domains";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "forward",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto86["m_sql"] = "forward";
$proto86["m_srcTableName"] = "domains";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "dnssec",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto88["m_sql"] = "dnssec";
$proto88["m_srcTableName"] = "domains";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "stat",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto90["m_sql"] = "stat";
$proto90["m_srcTableName"] = "domains";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "in",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto92["m_sql"] = "`in`";
$proto92["m_srcTableName"] = "domains";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "change_prop",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto94["m_sql"] = "change_prop";
$proto94["m_srcTableName"] = "domains";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_annul_reason",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto96["m_sql"] = "reg_annul_reason";
$proto96["m_srcTableName"] = "domains";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_comment",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto98["m_sql"] = "reg_comment";
$proto98["m_srcTableName"] = "domains";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_transfer_prohibited",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto100["m_sql"] = "reg_transfer_prohibited";
$proto100["m_srcTableName"] = "domains";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_restore_prohibited",
	"m_strTable" => "domains",
	"m_srcTableName" => "domains"
));

$proto102["m_sql"] = "reg_restore_prohibited";
$proto102["m_srcTableName"] = "domains";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "domains";
$proto105["m_srcTableName"] = "domains";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "id";
$proto105["m_columns"][] = "code";
$proto105["m_columns"][] = "domain";
$proto105["m_columns"][] = "domainidn";
$proto105["m_columns"][] = "ext";
$proto105["m_columns"][] = "fsi";
$proto105["m_columns"][] = "organisme";
$proto105["m_columns"][] = "adresse";
$proto105["m_columns"][] = "tel";
$proto105["m_columns"][] = "fax";
$proto105["m_columns"][] = "email";
$proto105["m_columns"][] = "contact";
$proto105["m_columns"][] = "activite";
$proto105["m_columns"][] = "rubrique";
$proto105["m_columns"][] = "date_recept";
$proto105["m_columns"][] = "date_accept";
$proto105["m_columns"][] = "date_activ";
$proto105["m_columns"][] = "date_modif";
$proto105["m_columns"][] = "date_annul";
$proto105["m_columns"][] = "date_annul_due";
$proto105["m_columns"][] = "etat";
$proto105["m_columns"][] = "modif";
$proto105["m_columns"][] = "commentaire";
$proto105["m_columns"][] = "ns_modif";
$proto105["m_columns"][] = "id_fsi_in";
$proto105["m_columns"][] = "domain_pw";
$proto105["m_columns"][] = "date_blocked";
$proto105["m_columns"][] = "date_blocked_max";
$proto105["m_columns"][] = "blocked_by";
$proto105["m_columns"][] = "date_unblocked";
$proto105["m_columns"][] = "date_transfer_req";
$proto105["m_columns"][] = "date_transfer_due";
$proto105["m_columns"][] = "date_transfer_canceled";
$proto105["m_columns"][] = "date_transfer_accepted";
$proto105["m_columns"][] = "date_transfer_rejected";
$proto105["m_columns"][] = "date_annul_req";
$proto105["m_columns"][] = "last_status";
$proto105["m_columns"][] = "updated_by";
$proto105["m_columns"][] = "private";
$proto105["m_columns"][] = "mgmt";
$proto105["m_columns"][] = "forward";
$proto105["m_columns"][] = "dnssec";
$proto105["m_columns"][] = "stat";
$proto105["m_columns"][] = "in";
$proto105["m_columns"][] = "change_prop";
$proto105["m_columns"][] = "reg_annul_reason";
$proto105["m_columns"][] = "reg_comment";
$proto105["m_columns"][] = "reg_transfer_prohibited";
$proto105["m_columns"][] = "reg_restore_prohibited";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "domains";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "domains";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="domains";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_domains = createSqlQuery_domains();


	
		;

																																																	

$tdatadomains[".sqlquery"] = $queryData_domains;



include_once(getabspath("include/domains_events.php"));
$tdatadomains[".hasEvents"] = true;

?>