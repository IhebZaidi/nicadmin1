<?php
$tdatatermes_deleted = array();
$tdatatermes_deleted[".searchableFields"] = array();
$tdatatermes_deleted[".ShortName"] = "termes_deleted";
$tdatatermes_deleted[".OwnerID"] = "id";
$tdatatermes_deleted[".OriginalTable"] = "termes_deleted";


$tdatatermes_deleted[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatermes_deleted[".originalPagesByType"] = $tdatatermes_deleted[".pagesByType"];
$tdatatermes_deleted[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatermes_deleted[".originalPages"] = $tdatatermes_deleted[".pages"];
$tdatatermes_deleted[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatermes_deleted[".originalDefaultPages"] = $tdatatermes_deleted[".defaultPages"];

//	field labels
$fieldLabelstermes_deleted = array();
$fieldToolTipstermes_deleted = array();
$pageTitlestermes_deleted = array();
$placeHolderstermes_deleted = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstermes_deleted["English"] = array();
	$fieldToolTipstermes_deleted["English"] = array();
	$placeHolderstermes_deleted["English"] = array();
	$pageTitlestermes_deleted["English"] = array();
	$fieldLabelstermes_deleted["English"]["id"] = "Id";
	$fieldToolTipstermes_deleted["English"]["id"] = "";
	$placeHolderstermes_deleted["English"]["id"] = "";
	$fieldLabelstermes_deleted["English"]["name"] = "Name";
	$fieldToolTipstermes_deleted["English"]["name"] = "";
	$placeHolderstermes_deleted["English"]["name"] = "";
	$fieldLabelstermes_deleted["English"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes_deleted["English"]["prohibited"] = "";
	$placeHolderstermes_deleted["English"]["prohibited"] = "";
	$fieldLabelstermes_deleted["English"]["reason"] = "Reason";
	$fieldToolTipstermes_deleted["English"]["reason"] = "";
	$placeHolderstermes_deleted["English"]["reason"] = "";
	$fieldLabelstermes_deleted["English"]["date_added"] = "Date Added";
	$fieldToolTipstermes_deleted["English"]["date_added"] = "";
	$placeHolderstermes_deleted["English"]["date_added"] = "";
	$fieldLabelstermes_deleted["English"]["date_deleted"] = "Date Deleted";
	$fieldToolTipstermes_deleted["English"]["date_deleted"] = "";
	$placeHolderstermes_deleted["English"]["date_deleted"] = "";
	if (count($fieldToolTipstermes_deleted["English"]))
		$tdatatermes_deleted[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelstermes_deleted["Arabic"] = array();
	$fieldToolTipstermes_deleted["Arabic"] = array();
	$placeHolderstermes_deleted["Arabic"] = array();
	$pageTitlestermes_deleted["Arabic"] = array();
	$fieldLabelstermes_deleted["Arabic"]["id"] = "Id";
	$fieldToolTipstermes_deleted["Arabic"]["id"] = "";
	$placeHolderstermes_deleted["Arabic"]["id"] = "";
	$fieldLabelstermes_deleted["Arabic"]["name"] = "Name";
	$fieldToolTipstermes_deleted["Arabic"]["name"] = "";
	$placeHolderstermes_deleted["Arabic"]["name"] = "";
	$fieldLabelstermes_deleted["Arabic"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes_deleted["Arabic"]["prohibited"] = "";
	$placeHolderstermes_deleted["Arabic"]["prohibited"] = "";
	$fieldLabelstermes_deleted["Arabic"]["reason"] = "Reason";
	$fieldToolTipstermes_deleted["Arabic"]["reason"] = "";
	$placeHolderstermes_deleted["Arabic"]["reason"] = "";
	$fieldLabelstermes_deleted["Arabic"]["date_added"] = "Date Added";
	$fieldToolTipstermes_deleted["Arabic"]["date_added"] = "";
	$placeHolderstermes_deleted["Arabic"]["date_added"] = "";
	$fieldLabelstermes_deleted["Arabic"]["date_deleted"] = "Date Deleted";
	$fieldToolTipstermes_deleted["Arabic"]["date_deleted"] = "";
	$placeHolderstermes_deleted["Arabic"]["date_deleted"] = "";
	if (count($fieldToolTipstermes_deleted["Arabic"]))
		$tdatatermes_deleted[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelstermes_deleted["French"] = array();
	$fieldToolTipstermes_deleted["French"] = array();
	$placeHolderstermes_deleted["French"] = array();
	$pageTitlestermes_deleted["French"] = array();
	$fieldLabelstermes_deleted["French"]["id"] = "Id";
	$fieldToolTipstermes_deleted["French"]["id"] = "";
	$placeHolderstermes_deleted["French"]["id"] = "";
	$fieldLabelstermes_deleted["French"]["name"] = "Name";
	$fieldToolTipstermes_deleted["French"]["name"] = "";
	$placeHolderstermes_deleted["French"]["name"] = "";
	$fieldLabelstermes_deleted["French"]["prohibited"] = "Prohibited";
	$fieldToolTipstermes_deleted["French"]["prohibited"] = "";
	$placeHolderstermes_deleted["French"]["prohibited"] = "";
	$fieldLabelstermes_deleted["French"]["reason"] = "Reason";
	$fieldToolTipstermes_deleted["French"]["reason"] = "";
	$placeHolderstermes_deleted["French"]["reason"] = "";
	$fieldLabelstermes_deleted["French"]["date_added"] = "Date Added";
	$fieldToolTipstermes_deleted["French"]["date_added"] = "";
	$placeHolderstermes_deleted["French"]["date_added"] = "";
	$fieldLabelstermes_deleted["French"]["date_deleted"] = "Date Deleted";
	$fieldToolTipstermes_deleted["French"]["date_deleted"] = "";
	$placeHolderstermes_deleted["French"]["date_deleted"] = "";
	if (count($fieldToolTipstermes_deleted["French"]))
		$tdatatermes_deleted[".isUseToolTips"] = true;
}


	$tdatatermes_deleted[".NCSearch"] = true;



$tdatatermes_deleted[".shortTableName"] = "termes_deleted";
$tdatatermes_deleted[".nSecOptions"] = 1;

$tdatatermes_deleted[".mainTableOwnerID"] = "id";
$tdatatermes_deleted[".entityType"] = 0;
$tdatatermes_deleted[".connId"] = "nicadmin_at_localhost";


$tdatatermes_deleted[".strOriginalTableName"] = "termes_deleted";

	



$tdatatermes_deleted[".showAddInPopup"] = false;

$tdatatermes_deleted[".showEditInPopup"] = false;

$tdatatermes_deleted[".showViewInPopup"] = false;

$tdatatermes_deleted[".listAjax"] = false;
//	temporary
//$tdatatermes_deleted[".listAjax"] = false;

	$tdatatermes_deleted[".audit"] = false;

	$tdatatermes_deleted[".locking"] = false;


$pages = $tdatatermes_deleted[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatermes_deleted[".edit"] = true;
	$tdatatermes_deleted[".afterEditAction"] = 1;
	$tdatatermes_deleted[".closePopupAfterEdit"] = 1;
	$tdatatermes_deleted[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatermes_deleted[".add"] = true;
$tdatatermes_deleted[".afterAddAction"] = 1;
$tdatatermes_deleted[".closePopupAfterAdd"] = 1;
$tdatatermes_deleted[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatermes_deleted[".list"] = true;
}



$tdatatermes_deleted[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatermes_deleted[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatermes_deleted[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatermes_deleted[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatermes_deleted[".printFriendly"] = true;
}



$tdatatermes_deleted[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatermes_deleted[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatermes_deleted[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatermes_deleted[".isUseAjaxSuggest"] = true;





$tdatatermes_deleted[".ajaxCodeSnippetAdded"] = false;

$tdatatermes_deleted[".buttonsAdded"] = false;

$tdatatermes_deleted[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatermes_deleted[".isUseTimeForSearch"] = false;


$tdatatermes_deleted[".badgeColor"] = "CFAE83";


$tdatatermes_deleted[".allSearchFields"] = array();
$tdatatermes_deleted[".filterFields"] = array();
$tdatatermes_deleted[".requiredSearchFields"] = array();

$tdatatermes_deleted[".googleLikeFields"] = array();
$tdatatermes_deleted[".googleLikeFields"][] = "id";
$tdatatermes_deleted[".googleLikeFields"][] = "name";
$tdatatermes_deleted[".googleLikeFields"][] = "prohibited";
$tdatatermes_deleted[".googleLikeFields"][] = "reason";
$tdatatermes_deleted[".googleLikeFields"][] = "date_added";
$tdatatermes_deleted[".googleLikeFields"][] = "date_deleted";



$tdatatermes_deleted[".tableType"] = "list";

$tdatatermes_deleted[".printerPageOrientation"] = 0;
$tdatatermes_deleted[".nPrinterPageScale"] = 100;

$tdatatermes_deleted[".nPrinterSplitRecords"] = 40;

$tdatatermes_deleted[".geocodingEnabled"] = false;










$tdatatermes_deleted[".pageSize"] = 20;

$tdatatermes_deleted[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatermes_deleted[".strOrderBy"] = $tstrOrderBy;

$tdatatermes_deleted[".orderindexes"] = array();


$tdatatermes_deleted[".sqlHead"] = "SELECT id,  	name,  	prohibited,  	reason,  	date_added,  	date_deleted";
$tdatatermes_deleted[".sqlFrom"] = "FROM termes_deleted";
$tdatatermes_deleted[".sqlWhereExpr"] = "";
$tdatatermes_deleted[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatermes_deleted[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatermes_deleted[".arrGroupsPerPage"] = $arrGPP;

$tdatatermes_deleted[".highlightSearchResults"] = true;

$tableKeystermes_deleted = array();
$tableKeystermes_deleted[] = "id";
$tdatatermes_deleted[".Keys"] = $tableKeystermes_deleted;


$tdatatermes_deleted[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","id");
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


	$tdatatermes_deleted["id"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","name");
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


	$tdatatermes_deleted["name"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "name";
//	prohibited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "prohibited";
	$fdata["GoodName"] = "prohibited";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","prohibited");
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


	$tdatatermes_deleted["prohibited"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "prohibited";
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","reason");
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


	$tdatatermes_deleted["reason"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "reason";
//	date_added
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_added";
	$fdata["GoodName"] = "date_added";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","date_added");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatermes_deleted["date_added"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "date_added";
//	date_deleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_deleted";
	$fdata["GoodName"] = "date_deleted";
	$fdata["ownerTable"] = "termes_deleted";
	$fdata["Label"] = GetFieldLabel("termes_deleted","date_deleted");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_deleted";

		$fdata["sourceSingle"] = "date_deleted";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_deleted";

	
	
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


	$tdatatermes_deleted["date_deleted"] = $fdata;
		$tdatatermes_deleted[".searchableFields"][] = "date_deleted";


$tables_data["termes_deleted"]=&$tdatatermes_deleted;
$field_labels["termes_deleted"] = &$fieldLabelstermes_deleted;
$fieldToolTips["termes_deleted"] = &$fieldToolTipstermes_deleted;
$placeHolders["termes_deleted"] = &$placeHolderstermes_deleted;
$page_titles["termes_deleted"] = &$pageTitlestermes_deleted;


changeTextControlsToDate( "termes_deleted" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["termes_deleted"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["termes_deleted"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_termes_deleted()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	prohibited,  	reason,  	date_added,  	date_deleted";
$proto0["m_strFrom"] = "FROM termes_deleted";
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
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "termes_deleted";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "termes_deleted";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "prohibited",
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto10["m_sql"] = "prohibited";
$proto10["m_srcTableName"] = "termes_deleted";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto12["m_sql"] = "reason";
$proto12["m_srcTableName"] = "termes_deleted";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "date_added",
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto14["m_sql"] = "date_added";
$proto14["m_srcTableName"] = "termes_deleted";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_deleted",
	"m_strTable" => "termes_deleted",
	"m_srcTableName" => "termes_deleted"
));

$proto16["m_sql"] = "date_deleted";
$proto16["m_srcTableName"] = "termes_deleted";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "termes_deleted";
$proto19["m_srcTableName"] = "termes_deleted";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "prohibited";
$proto19["m_columns"][] = "reason";
$proto19["m_columns"][] = "date_added";
$proto19["m_columns"][] = "date_deleted";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "termes_deleted";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "termes_deleted";
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
$proto0["m_srcTableName"]="termes_deleted";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_termes_deleted = createSqlQuery_termes_deleted();


	
		;

						

$tdatatermes_deleted[".sqlquery"] = $queryData_termes_deleted;



$tdatatermes_deleted[".hasEvents"] = false;

?>