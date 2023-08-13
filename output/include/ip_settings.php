<?php
$tdataip = array();
$tdataip[".searchableFields"] = array();
$tdataip[".ShortName"] = "ip";
$tdataip[".OwnerID"] = "id_ip";
$tdataip[".OriginalTable"] = "ip";


$tdataip[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataip[".originalPagesByType"] = $tdataip[".pagesByType"];
$tdataip[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataip[".originalPages"] = $tdataip[".pages"];
$tdataip[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataip[".originalDefaultPages"] = $tdataip[".defaultPages"];

//	field labels
$fieldLabelsip = array();
$fieldToolTipsip = array();
$pageTitlesip = array();
$placeHoldersip = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsip["English"] = array();
	$fieldToolTipsip["English"] = array();
	$placeHoldersip["English"] = array();
	$pageTitlesip["English"] = array();
	$fieldLabelsip["English"]["id_ip"] = "Id Ip";
	$fieldToolTipsip["English"]["id_ip"] = "";
	$placeHoldersip["English"]["id_ip"] = "";
	$fieldLabelsip["English"]["id_domain"] = "Id Domain";
	$fieldToolTipsip["English"]["id_domain"] = "";
	$placeHoldersip["English"]["id_domain"] = "";
	$fieldLabelsip["English"]["ip"] = "Ip";
	$fieldToolTipsip["English"]["ip"] = "";
	$placeHoldersip["English"]["ip"] = "";
	$fieldLabelsip["English"]["date_reception"] = "Date Reception";
	$fieldToolTipsip["English"]["date_reception"] = "";
	$placeHoldersip["English"]["date_reception"] = "";
	$fieldLabelsip["English"]["date_modification"] = "Date Modification";
	$fieldToolTipsip["English"]["date_modification"] = "";
	$placeHoldersip["English"]["date_modification"] = "";
	$fieldLabelsip["English"]["commentaire"] = "Commentaire";
	$fieldToolTipsip["English"]["commentaire"] = "";
	$placeHoldersip["English"]["commentaire"] = "";
	if (count($fieldToolTipsip["English"]))
		$tdataip[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsip["Arabic"] = array();
	$fieldToolTipsip["Arabic"] = array();
	$placeHoldersip["Arabic"] = array();
	$pageTitlesip["Arabic"] = array();
	$fieldLabelsip["Arabic"]["id_ip"] = "Id Ip";
	$fieldToolTipsip["Arabic"]["id_ip"] = "";
	$placeHoldersip["Arabic"]["id_ip"] = "";
	$fieldLabelsip["Arabic"]["id_domain"] = "Id Domain";
	$fieldToolTipsip["Arabic"]["id_domain"] = "";
	$placeHoldersip["Arabic"]["id_domain"] = "";
	$fieldLabelsip["Arabic"]["ip"] = "Ip";
	$fieldToolTipsip["Arabic"]["ip"] = "";
	$placeHoldersip["Arabic"]["ip"] = "";
	$fieldLabelsip["Arabic"]["date_reception"] = "Date Reception";
	$fieldToolTipsip["Arabic"]["date_reception"] = "";
	$placeHoldersip["Arabic"]["date_reception"] = "";
	$fieldLabelsip["Arabic"]["date_modification"] = "Date Modification";
	$fieldToolTipsip["Arabic"]["date_modification"] = "";
	$placeHoldersip["Arabic"]["date_modification"] = "";
	$fieldLabelsip["Arabic"]["commentaire"] = "Commentaire";
	$fieldToolTipsip["Arabic"]["commentaire"] = "";
	$placeHoldersip["Arabic"]["commentaire"] = "";
	if (count($fieldToolTipsip["Arabic"]))
		$tdataip[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsip["French"] = array();
	$fieldToolTipsip["French"] = array();
	$placeHoldersip["French"] = array();
	$pageTitlesip["French"] = array();
	$fieldLabelsip["French"]["id_ip"] = "Id Ip";
	$fieldToolTipsip["French"]["id_ip"] = "";
	$placeHoldersip["French"]["id_ip"] = "";
	$fieldLabelsip["French"]["id_domain"] = "Id Domain";
	$fieldToolTipsip["French"]["id_domain"] = "";
	$placeHoldersip["French"]["id_domain"] = "";
	$fieldLabelsip["French"]["ip"] = "Ip";
	$fieldToolTipsip["French"]["ip"] = "";
	$placeHoldersip["French"]["ip"] = "";
	$fieldLabelsip["French"]["date_reception"] = "Date Reception";
	$fieldToolTipsip["French"]["date_reception"] = "";
	$placeHoldersip["French"]["date_reception"] = "";
	$fieldLabelsip["French"]["date_modification"] = "Date Modification";
	$fieldToolTipsip["French"]["date_modification"] = "";
	$placeHoldersip["French"]["date_modification"] = "";
	$fieldLabelsip["French"]["commentaire"] = "Commentaire";
	$fieldToolTipsip["French"]["commentaire"] = "";
	$placeHoldersip["French"]["commentaire"] = "";
	if (count($fieldToolTipsip["French"]))
		$tdataip[".isUseToolTips"] = true;
}


	$tdataip[".NCSearch"] = true;



$tdataip[".shortTableName"] = "ip";
$tdataip[".nSecOptions"] = 1;

$tdataip[".mainTableOwnerID"] = "id_ip";
$tdataip[".entityType"] = 0;
$tdataip[".connId"] = "nicadmin_at_localhost";


$tdataip[".strOriginalTableName"] = "ip";

	



$tdataip[".showAddInPopup"] = false;

$tdataip[".showEditInPopup"] = false;

$tdataip[".showViewInPopup"] = false;

$tdataip[".listAjax"] = false;
//	temporary
//$tdataip[".listAjax"] = false;

	$tdataip[".audit"] = false;

	$tdataip[".locking"] = false;


$pages = $tdataip[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataip[".edit"] = true;
	$tdataip[".afterEditAction"] = 1;
	$tdataip[".closePopupAfterEdit"] = 1;
	$tdataip[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataip[".add"] = true;
$tdataip[".afterAddAction"] = 1;
$tdataip[".closePopupAfterAdd"] = 1;
$tdataip[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataip[".list"] = true;
}



$tdataip[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataip[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataip[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataip[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataip[".printFriendly"] = true;
}



$tdataip[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataip[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataip[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataip[".isUseAjaxSuggest"] = true;





$tdataip[".ajaxCodeSnippetAdded"] = false;

$tdataip[".buttonsAdded"] = false;

$tdataip[".addPageEvents"] = false;

// use timepicker for search panel
$tdataip[".isUseTimeForSearch"] = false;


$tdataip[".badgeColor"] = "4682B4";


$tdataip[".allSearchFields"] = array();
$tdataip[".filterFields"] = array();
$tdataip[".requiredSearchFields"] = array();

$tdataip[".googleLikeFields"] = array();
$tdataip[".googleLikeFields"][] = "id_ip";
$tdataip[".googleLikeFields"][] = "id_domain";
$tdataip[".googleLikeFields"][] = "ip";
$tdataip[".googleLikeFields"][] = "date_reception";
$tdataip[".googleLikeFields"][] = "date_modification";
$tdataip[".googleLikeFields"][] = "commentaire";



$tdataip[".tableType"] = "list";

$tdataip[".printerPageOrientation"] = 0;
$tdataip[".nPrinterPageScale"] = 100;

$tdataip[".nPrinterSplitRecords"] = 40;

$tdataip[".geocodingEnabled"] = false;










$tdataip[".pageSize"] = 20;

$tdataip[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataip[".strOrderBy"] = $tstrOrderBy;

$tdataip[".orderindexes"] = array();


$tdataip[".sqlHead"] = "SELECT id_ip,  	id_domain,  	ip,  	date_reception,  	date_modification,  	commentaire";
$tdataip[".sqlFrom"] = "FROM ip";
$tdataip[".sqlWhereExpr"] = "";
$tdataip[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataip[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataip[".arrGroupsPerPage"] = $arrGPP;

$tdataip[".highlightSearchResults"] = true;

$tableKeysip = array();
$tableKeysip[] = "id_ip";
$tdataip[".Keys"] = $tableKeysip;


$tdataip[".hideMobileList"] = array();




//	id_ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ip";
	$fdata["GoodName"] = "id_ip";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","id_ip");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_ip";

		$fdata["sourceSingle"] = "id_ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ip";

	
	
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


	$tdataip["id_ip"] = $fdata;
		$tdataip[".searchableFields"][] = "id_ip";
//	id_domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_domain";
	$fdata["GoodName"] = "id_domain";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","id_domain");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_domain";

		$fdata["sourceSingle"] = "id_domain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_domain";

	
	
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


	$tdataip["id_domain"] = $fdata;
		$tdataip[".searchableFields"][] = "id_domain";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataip["ip"] = $fdata;
		$tdataip[".searchableFields"][] = "ip";
//	date_reception
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_reception";
	$fdata["GoodName"] = "date_reception";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","date_reception");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_reception";

		$fdata["sourceSingle"] = "date_reception";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_reception";

	
	
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


	$tdataip["date_reception"] = $fdata;
		$tdataip[".searchableFields"][] = "date_reception";
//	date_modification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_modification";
	$fdata["GoodName"] = "date_modification";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","date_modification");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_modification";

		$fdata["sourceSingle"] = "date_modification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_modification";

	
	
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


	$tdataip["date_modification"] = $fdata;
		$tdataip[".searchableFields"][] = "date_modification";
//	commentaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "commentaire";
	$fdata["GoodName"] = "commentaire";
	$fdata["ownerTable"] = "ip";
	$fdata["Label"] = GetFieldLabel("ip","commentaire");
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


	$tdataip["commentaire"] = $fdata;
		$tdataip[".searchableFields"][] = "commentaire";


$tables_data["ip"]=&$tdataip;
$field_labels["ip"] = &$fieldLabelsip;
$fieldToolTips["ip"] = &$fieldToolTipsip;
$placeHolders["ip"] = &$placeHoldersip;
$page_titles["ip"] = &$pageTitlesip;


changeTextControlsToDate( "ip" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ip"] = array();
//	hosts_ip
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hosts_ip";
		$detailsParam["dOriginalTable"] = "hosts_ip";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hosts_ip";
	$detailsParam["dCaptionTable"] = GetTableCaption("hosts_ip");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["ip"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ip"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ip"][$dIndex]["masterKeys"][]="ip";

				$detailsTablesData["ip"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ip"][$dIndex]["detailKeys"][]="ip";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ip"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ip()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ip,  	id_domain,  	ip,  	date_reception,  	date_modification,  	commentaire";
$proto0["m_strFrom"] = "FROM ip";
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
	"m_strName" => "id_ip",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto6["m_sql"] = "id_ip";
$proto6["m_srcTableName"] = "ip";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_domain",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto8["m_sql"] = "id_domain";
$proto8["m_srcTableName"] = "ip";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "ip";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "date_reception",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto12["m_sql"] = "date_reception";
$proto12["m_srcTableName"] = "ip";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modification",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto14["m_sql"] = "date_modification";
$proto14["m_srcTableName"] = "ip";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaire",
	"m_strTable" => "ip",
	"m_srcTableName" => "ip"
));

$proto16["m_sql"] = "commentaire";
$proto16["m_srcTableName"] = "ip";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ip";
$proto19["m_srcTableName"] = "ip";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_ip";
$proto19["m_columns"][] = "id_domain";
$proto19["m_columns"][] = "ip";
$proto19["m_columns"][] = "date_reception";
$proto19["m_columns"][] = "date_modification";
$proto19["m_columns"][] = "commentaire";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ip";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ip";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ip";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ip = createSqlQuery_ip();


	
		;

						

$tdataip[".sqlquery"] = $queryData_ip;



$tdataip[".hasEvents"] = false;

?>