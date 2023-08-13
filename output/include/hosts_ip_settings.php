<?php
$tdatahosts_ip = array();
$tdatahosts_ip[".searchableFields"] = array();
$tdatahosts_ip[".ShortName"] = "hosts_ip";
$tdatahosts_ip[".OwnerID"] = "id";
$tdatahosts_ip[".OriginalTable"] = "hosts_ip";


$tdatahosts_ip[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahosts_ip[".originalPagesByType"] = $tdatahosts_ip[".pagesByType"];
$tdatahosts_ip[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahosts_ip[".originalPages"] = $tdatahosts_ip[".pages"];
$tdatahosts_ip[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahosts_ip[".originalDefaultPages"] = $tdatahosts_ip[".defaultPages"];

//	field labels
$fieldLabelshosts_ip = array();
$fieldToolTipshosts_ip = array();
$pageTitleshosts_ip = array();
$placeHoldershosts_ip = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshosts_ip["English"] = array();
	$fieldToolTipshosts_ip["English"] = array();
	$placeHoldershosts_ip["English"] = array();
	$pageTitleshosts_ip["English"] = array();
	$fieldLabelshosts_ip["English"]["id"] = "Id";
	$fieldToolTipshosts_ip["English"]["id"] = "";
	$placeHoldershosts_ip["English"]["id"] = "";
	$fieldLabelshosts_ip["English"]["address"] = "Address";
	$fieldToolTipshosts_ip["English"]["address"] = "";
	$placeHoldershosts_ip["English"]["address"] = "";
	$fieldLabelshosts_ip["English"]["host_id"] = "Host Id";
	$fieldToolTipshosts_ip["English"]["host_id"] = "";
	$placeHoldershosts_ip["English"]["host_id"] = "";
	$fieldLabelshosts_ip["English"]["ip"] = "Ip";
	$fieldToolTipshosts_ip["English"]["ip"] = "";
	$placeHoldershosts_ip["English"]["ip"] = "";
	if (count($fieldToolTipshosts_ip["English"]))
		$tdatahosts_ip[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelshosts_ip["Arabic"] = array();
	$fieldToolTipshosts_ip["Arabic"] = array();
	$placeHoldershosts_ip["Arabic"] = array();
	$pageTitleshosts_ip["Arabic"] = array();
	$fieldLabelshosts_ip["Arabic"]["id"] = "Id";
	$fieldToolTipshosts_ip["Arabic"]["id"] = "";
	$placeHoldershosts_ip["Arabic"]["id"] = "";
	$fieldLabelshosts_ip["Arabic"]["address"] = "Address";
	$fieldToolTipshosts_ip["Arabic"]["address"] = "";
	$placeHoldershosts_ip["Arabic"]["address"] = "";
	$fieldLabelshosts_ip["Arabic"]["host_id"] = "Host Id";
	$fieldToolTipshosts_ip["Arabic"]["host_id"] = "";
	$placeHoldershosts_ip["Arabic"]["host_id"] = "";
	$fieldLabelshosts_ip["Arabic"]["ip"] = "Ip";
	$fieldToolTipshosts_ip["Arabic"]["ip"] = "";
	$placeHoldershosts_ip["Arabic"]["ip"] = "";
	if (count($fieldToolTipshosts_ip["Arabic"]))
		$tdatahosts_ip[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelshosts_ip["French"] = array();
	$fieldToolTipshosts_ip["French"] = array();
	$placeHoldershosts_ip["French"] = array();
	$pageTitleshosts_ip["French"] = array();
	$fieldLabelshosts_ip["French"]["id"] = "Id";
	$fieldToolTipshosts_ip["French"]["id"] = "";
	$placeHoldershosts_ip["French"]["id"] = "";
	$fieldLabelshosts_ip["French"]["address"] = "Address";
	$fieldToolTipshosts_ip["French"]["address"] = "";
	$placeHoldershosts_ip["French"]["address"] = "";
	$fieldLabelshosts_ip["French"]["host_id"] = "Host Id";
	$fieldToolTipshosts_ip["French"]["host_id"] = "";
	$placeHoldershosts_ip["French"]["host_id"] = "";
	$fieldLabelshosts_ip["French"]["ip"] = "Ip";
	$fieldToolTipshosts_ip["French"]["ip"] = "";
	$placeHoldershosts_ip["French"]["ip"] = "";
	if (count($fieldToolTipshosts_ip["French"]))
		$tdatahosts_ip[".isUseToolTips"] = true;
}


	$tdatahosts_ip[".NCSearch"] = true;



$tdatahosts_ip[".shortTableName"] = "hosts_ip";
$tdatahosts_ip[".nSecOptions"] = 1;

$tdatahosts_ip[".mainTableOwnerID"] = "id";
$tdatahosts_ip[".entityType"] = 0;
$tdatahosts_ip[".connId"] = "nicadmin_at_localhost";


$tdatahosts_ip[".strOriginalTableName"] = "hosts_ip";

	



$tdatahosts_ip[".showAddInPopup"] = false;

$tdatahosts_ip[".showEditInPopup"] = false;

$tdatahosts_ip[".showViewInPopup"] = false;

$tdatahosts_ip[".listAjax"] = false;
//	temporary
//$tdatahosts_ip[".listAjax"] = false;

	$tdatahosts_ip[".audit"] = false;

	$tdatahosts_ip[".locking"] = false;


$pages = $tdatahosts_ip[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahosts_ip[".edit"] = true;
	$tdatahosts_ip[".afterEditAction"] = 1;
	$tdatahosts_ip[".closePopupAfterEdit"] = 1;
	$tdatahosts_ip[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahosts_ip[".add"] = true;
$tdatahosts_ip[".afterAddAction"] = 1;
$tdatahosts_ip[".closePopupAfterAdd"] = 1;
$tdatahosts_ip[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahosts_ip[".list"] = true;
}



$tdatahosts_ip[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahosts_ip[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahosts_ip[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahosts_ip[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahosts_ip[".printFriendly"] = true;
}



$tdatahosts_ip[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahosts_ip[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahosts_ip[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahosts_ip[".isUseAjaxSuggest"] = true;





$tdatahosts_ip[".ajaxCodeSnippetAdded"] = false;

$tdatahosts_ip[".buttonsAdded"] = false;

$tdatahosts_ip[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahosts_ip[".isUseTimeForSearch"] = false;


$tdatahosts_ip[".badgeColor"] = "7b68ee";


$tdatahosts_ip[".allSearchFields"] = array();
$tdatahosts_ip[".filterFields"] = array();
$tdatahosts_ip[".requiredSearchFields"] = array();

$tdatahosts_ip[".googleLikeFields"] = array();
$tdatahosts_ip[".googleLikeFields"][] = "id";
$tdatahosts_ip[".googleLikeFields"][] = "address";
$tdatahosts_ip[".googleLikeFields"][] = "host_id";
$tdatahosts_ip[".googleLikeFields"][] = "ip";



$tdatahosts_ip[".tableType"] = "list";

$tdatahosts_ip[".printerPageOrientation"] = 0;
$tdatahosts_ip[".nPrinterPageScale"] = 100;

$tdatahosts_ip[".nPrinterSplitRecords"] = 40;

$tdatahosts_ip[".geocodingEnabled"] = false;










$tdatahosts_ip[".pageSize"] = 20;

$tdatahosts_ip[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahosts_ip[".strOrderBy"] = $tstrOrderBy;

$tdatahosts_ip[".orderindexes"] = array();


$tdatahosts_ip[".sqlHead"] = "SELECT id,  	address,  	host_id,  	ip";
$tdatahosts_ip[".sqlFrom"] = "FROM hosts_ip";
$tdatahosts_ip[".sqlWhereExpr"] = "";
$tdatahosts_ip[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahosts_ip[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahosts_ip[".arrGroupsPerPage"] = $arrGPP;

$tdatahosts_ip[".highlightSearchResults"] = true;

$tableKeyshosts_ip = array();
$tableKeyshosts_ip[] = "id";
$tdatahosts_ip[".Keys"] = $tableKeyshosts_ip;


$tdatahosts_ip[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "hosts_ip";
	$fdata["Label"] = GetFieldLabel("hosts_ip","id");
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


	$tdatahosts_ip["id"] = $fdata;
		$tdatahosts_ip[".searchableFields"][] = "id";
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "hosts_ip";
	$fdata["Label"] = GetFieldLabel("hosts_ip","address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address";

		$fdata["sourceSingle"] = "address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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


	$tdatahosts_ip["address"] = $fdata;
		$tdatahosts_ip[".searchableFields"][] = "address";
//	host_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "host_id";
	$fdata["GoodName"] = "host_id";
	$fdata["ownerTable"] = "hosts_ip";
	$fdata["Label"] = GetFieldLabel("hosts_ip","host_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "host_id";

		$fdata["sourceSingle"] = "host_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "host_id";

	
	
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


	$tdatahosts_ip["host_id"] = $fdata;
		$tdatahosts_ip[".searchableFields"][] = "host_id";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "hosts_ip";
	$fdata["Label"] = GetFieldLabel("hosts_ip","ip");
	$fdata["FieldType"] = 129;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "6";

	
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


	$tdatahosts_ip["ip"] = $fdata;
		$tdatahosts_ip[".searchableFields"][] = "ip";


$tables_data["hosts_ip"]=&$tdatahosts_ip;
$field_labels["hosts_ip"] = &$fieldLabelshosts_ip;
$fieldToolTips["hosts_ip"] = &$fieldToolTipshosts_ip;
$placeHolders["hosts_ip"] = &$placeHoldershosts_ip;
$page_titles["hosts_ip"] = &$pageTitleshosts_ip;


changeTextControlsToDate( "hosts_ip" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hosts_ip"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hosts_ip"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hosts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hosts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hosts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hosts_ip"][0] = $masterParams;
				$masterTablesData["hosts_ip"][0]["masterKeys"] = array();
	$masterTablesData["hosts_ip"][0]["masterKeys"][]="host_id";
				$masterTablesData["hosts_ip"][0]["detailKeys"] = array();
	$masterTablesData["hosts_ip"][0]["detailKeys"][]="host_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hosts_ip()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	address,  	host_id,  	ip";
$proto0["m_strFrom"] = "FROM hosts_ip";
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
	"m_strTable" => "hosts_ip",
	"m_srcTableName" => "hosts_ip"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "hosts_ip";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "hosts_ip",
	"m_srcTableName" => "hosts_ip"
));

$proto8["m_sql"] = "address";
$proto8["m_srcTableName"] = "hosts_ip";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "host_id",
	"m_strTable" => "hosts_ip",
	"m_srcTableName" => "hosts_ip"
));

$proto10["m_sql"] = "host_id";
$proto10["m_srcTableName"] = "hosts_ip";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "hosts_ip",
	"m_srcTableName" => "hosts_ip"
));

$proto12["m_sql"] = "ip";
$proto12["m_srcTableName"] = "hosts_ip";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "hosts_ip";
$proto15["m_srcTableName"] = "hosts_ip";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "address";
$proto15["m_columns"][] = "host_id";
$proto15["m_columns"][] = "ip";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "hosts_ip";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "hosts_ip";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hosts_ip";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hosts_ip = createSqlQuery_hosts_ip();


	
		;

				

$tdatahosts_ip[".sqlquery"] = $queryData_hosts_ip;



$tdatahosts_ip[".hasEvents"] = false;

?>