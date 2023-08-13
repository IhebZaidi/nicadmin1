<?php
$tdatatermes = array();
$tdatatermes[".searchableFields"] = array();
$tdatatermes[".ShortName"] = "termes";
$tdatatermes[".OwnerID"] = "id";
$tdatatermes[".OriginalTable"] = "termes";


$tdatatermes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatermes[".originalPagesByType"] = $tdatatermes[".pagesByType"];
$tdatatermes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatermes[".originalPages"] = $tdatatermes[".pages"];
$tdatatermes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatermes[".originalDefaultPages"] = $tdatatermes[".defaultPages"];

//	field labels
$fieldLabelstermes = array();
$fieldToolTipstermes = array();
$pageTitlestermes = array();
$placeHolderstermes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstermes["English"] = array();
	$fieldToolTipstermes["English"] = array();
	$placeHolderstermes["English"] = array();
	$pageTitlestermes["English"] = array();
	$fieldLabelstermes["English"]["id"] = "Id";
	$fieldToolTipstermes["English"]["id"] = "";
	$placeHolderstermes["English"]["id"] = "";
	$fieldLabelstermes["English"]["name"] = "Name";
	$fieldToolTipstermes["English"]["name"] = "";
	$placeHolderstermes["English"]["name"] = "";
	$fieldLabelstermes["English"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes["English"]["prohibited"] = "";
	$placeHolderstermes["English"]["prohibited"] = "";
	$fieldLabelstermes["English"]["reason"] = "Reason";
	$fieldToolTipstermes["English"]["reason"] = "";
	$placeHolderstermes["English"]["reason"] = "";
	$fieldLabelstermes["English"]["date_added"] = "Date Added";
	$fieldToolTipstermes["English"]["date_added"] = "";
	$placeHolderstermes["English"]["date_added"] = "";
	$fieldLabelstermes["English"]["type"] = "Type";
	$fieldToolTipstermes["English"]["type"] = "";
	$placeHolderstermes["English"]["type"] = "";
	if (count($fieldToolTipstermes["English"]))
		$tdatatermes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelstermes["Arabic"] = array();
	$fieldToolTipstermes["Arabic"] = array();
	$placeHolderstermes["Arabic"] = array();
	$pageTitlestermes["Arabic"] = array();
	$fieldLabelstermes["Arabic"]["id"] = "Id";
	$fieldToolTipstermes["Arabic"]["id"] = "";
	$placeHolderstermes["Arabic"]["id"] = "";
	$fieldLabelstermes["Arabic"]["name"] = "Name";
	$fieldToolTipstermes["Arabic"]["name"] = "";
	$placeHolderstermes["Arabic"]["name"] = "";
	$fieldLabelstermes["Arabic"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes["Arabic"]["prohibited"] = "";
	$placeHolderstermes["Arabic"]["prohibited"] = "";
	$fieldLabelstermes["Arabic"]["reason"] = "Reason";
	$fieldToolTipstermes["Arabic"]["reason"] = "";
	$placeHolderstermes["Arabic"]["reason"] = "";
	$fieldLabelstermes["Arabic"]["date_added"] = "Date Added";
	$fieldToolTipstermes["Arabic"]["date_added"] = "";
	$placeHolderstermes["Arabic"]["date_added"] = "";
	$fieldLabelstermes["Arabic"]["type"] = "Type";
	$fieldToolTipstermes["Arabic"]["type"] = "";
	$placeHolderstermes["Arabic"]["type"] = "";
	if (count($fieldToolTipstermes["Arabic"]))
		$tdatatermes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelstermes["French"] = array();
	$fieldToolTipstermes["French"] = array();
	$placeHolderstermes["French"] = array();
	$pageTitlestermes["French"] = array();
	$fieldLabelstermes["French"]["id"] = "Id";
	$fieldToolTipstermes["French"]["id"] = "";
	$placeHolderstermes["French"]["id"] = "";
	$fieldLabelstermes["French"]["name"] = "Name";
	$fieldToolTipstermes["French"]["name"] = "";
	$placeHolderstermes["French"]["name"] = "";
	$fieldLabelstermes["French"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes["French"]["prohibited"] = "";
	$placeHolderstermes["French"]["prohibited"] = "";
	$fieldLabelstermes["French"]["reason"] = "Reason";
	$fieldToolTipstermes["French"]["reason"] = "";
	$placeHolderstermes["French"]["reason"] = "";
	$fieldLabelstermes["French"]["date_added"] = "Date Added";
	$fieldToolTipstermes["French"]["date_added"] = "";
	$placeHolderstermes["French"]["date_added"] = "";
	$fieldLabelstermes["French"]["type"] = "Type";
	$fieldToolTipstermes["French"]["type"] = "";
	$placeHolderstermes["French"]["type"] = "";
	if (count($fieldToolTipstermes["French"]))
		$tdatatermes[".isUseToolTips"] = true;
}


	$tdatatermes[".NCSearch"] = true;



$tdatatermes[".shortTableName"] = "termes";
$tdatatermes[".nSecOptions"] = 1;

$tdatatermes[".mainTableOwnerID"] = "id";
$tdatatermes[".entityType"] = 0;
$tdatatermes[".connId"] = "nicadmin_at_localhost";


$tdatatermes[".strOriginalTableName"] = "termes";

	



$tdatatermes[".showAddInPopup"] = false;

$tdatatermes[".showEditInPopup"] = false;

$tdatatermes[".showViewInPopup"] = false;

$tdatatermes[".listAjax"] = false;
//	temporary
//$tdatatermes[".listAjax"] = false;

	$tdatatermes[".audit"] = false;

	$tdatatermes[".locking"] = false;


$pages = $tdatatermes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatermes[".edit"] = true;
	$tdatatermes[".afterEditAction"] = 1;
	$tdatatermes[".closePopupAfterEdit"] = 1;
	$tdatatermes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatermes[".add"] = true;
$tdatatermes[".afterAddAction"] = 1;
$tdatatermes[".closePopupAfterAdd"] = 1;
$tdatatermes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatermes[".list"] = true;
}



$tdatatermes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatermes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatermes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatermes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatermes[".printFriendly"] = true;
}



$tdatatermes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatermes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatermes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatermes[".isUseAjaxSuggest"] = true;





$tdatatermes[".ajaxCodeSnippetAdded"] = false;

$tdatatermes[".buttonsAdded"] = false;

$tdatatermes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatermes[".isUseTimeForSearch"] = false;


$tdatatermes[".badgeColor"] = "5F9EA0";


$tdatatermes[".allSearchFields"] = array();
$tdatatermes[".filterFields"] = array();
$tdatatermes[".requiredSearchFields"] = array();

$tdatatermes[".googleLikeFields"] = array();
$tdatatermes[".googleLikeFields"][] = "id";
$tdatatermes[".googleLikeFields"][] = "name";
$tdatatermes[".googleLikeFields"][] = "prohibited";
$tdatatermes[".googleLikeFields"][] = "reason";
$tdatatermes[".googleLikeFields"][] = "date_added";
$tdatatermes[".googleLikeFields"][] = "type";



$tdatatermes[".tableType"] = "list";

$tdatatermes[".printerPageOrientation"] = 0;
$tdatatermes[".nPrinterPageScale"] = 100;

$tdatatermes[".nPrinterSplitRecords"] = 40;

$tdatatermes[".geocodingEnabled"] = false;










$tdatatermes[".pageSize"] = 20;

$tdatatermes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatermes[".strOrderBy"] = $tstrOrderBy;

$tdatatermes[".orderindexes"] = array();


$tdatatermes[".sqlHead"] = "SELECT id,  	name,  	prohibited,  	reason,  	date_added,  	`type`";
$tdatatermes[".sqlFrom"] = "FROM termes";
$tdatatermes[".sqlWhereExpr"] = "";
$tdatatermes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatermes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatermes[".arrGroupsPerPage"] = $arrGPP;

$tdatatermes[".highlightSearchResults"] = true;

$tableKeystermes = array();
$tableKeystermes[] = "id";
$tdatatermes[".Keys"] = $tableKeystermes;


$tdatatermes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","id");
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


	$tdatatermes["id"] = $fdata;
		$tdatatermes[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=63";

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


	$tdatatermes["name"] = $fdata;
		$tdatatermes[".searchableFields"][] = "name";
//	prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "prohibited";
	$fdata["GoodName"] = "prohibited";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","prohibited");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "prohibited";

		$fdata["sourceSingle"] = "prohibited";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prohibited";

	
	
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


	$tdatatermes["prohibited"] = $fdata;
		$tdatatermes[".searchableFields"][] = "prohibited";
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","reason");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "reason";

		$fdata["sourceSingle"] = "reason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reason";

	
	
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


	$tdatatermes["reason"] = $fdata;
		$tdatatermes[".searchableFields"][] = "reason";
//	date_added
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_added";
	$fdata["GoodName"] = "date_added";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","date_added");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_added";

		$fdata["sourceSingle"] = "date_added";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_added";

	
	
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


	$tdatatermes["date_added"] = $fdata;
		$tdatatermes[".searchableFields"][] = "date_added";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "termes";
	$fdata["Label"] = GetFieldLabel("termes","type");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type";

		$fdata["sourceSingle"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
	$edata["LookupValues"][] = "reserved";
	$edata["LookupValues"][] = "restricted";

	
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


	$tdatatermes["type"] = $fdata;
		$tdatatermes[".searchableFields"][] = "type";


$tables_data["termes"]=&$tdatatermes;
$field_labels["termes"] = &$fieldLabelstermes;
$fieldToolTips["termes"] = &$fieldToolTipstermes;
$placeHolders["termes"] = &$placeHolderstermes;
$page_titles["termes"] = &$pageTitlestermes;


changeTextControlsToDate( "termes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["termes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["termes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_termes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	prohibited,  	reason,  	date_added,  	`type`";
$proto0["m_strFrom"] = "FROM termes";
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
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "termes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "termes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "prohibited",
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto10["m_sql"] = "prohibited";
$proto10["m_srcTableName"] = "termes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto12["m_sql"] = "reason";
$proto12["m_srcTableName"] = "termes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_added",
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto14["m_sql"] = "date_added";
$proto14["m_srcTableName"] = "termes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "termes",
	"m_srcTableName" => "termes"
));

$proto16["m_sql"] = "`type`";
$proto16["m_srcTableName"] = "termes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "termes";
$proto19["m_srcTableName"] = "termes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "prohibited";
$proto19["m_columns"][] = "reason";
$proto19["m_columns"][] = "date_added";
$proto19["m_columns"][] = "type";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "termes";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "termes";
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
$proto0["m_srcTableName"]="termes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_termes = createSqlQuery_termes();


	
		;

						

$tdatatermes[".sqlquery"] = $queryData_termes;



$tdatatermes[".hasEvents"] = false;

?>