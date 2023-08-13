<?php
$tdatahosts = array();
$tdatahosts[".searchableFields"] = array();
$tdatahosts[".ShortName"] = "hosts";
$tdatahosts[".OwnerID"] = "host_id";
$tdatahosts[".OriginalTable"] = "hosts";


$tdatahosts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahosts[".originalPagesByType"] = $tdatahosts[".pagesByType"];
$tdatahosts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahosts[".originalPages"] = $tdatahosts[".pages"];
$tdatahosts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatahosts[".originalDefaultPages"] = $tdatahosts[".defaultPages"];

//	field labels
$fieldLabelshosts = array();
$fieldToolTipshosts = array();
$pageTitleshosts = array();
$placeHoldershosts = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelshosts["French"] = array();
	$fieldToolTipshosts["French"] = array();
	$placeHoldershosts["French"] = array();
	$pageTitleshosts["French"] = array();
	$fieldLabelshosts["French"]["host_id"] = "Host Id";
	$fieldToolTipshosts["French"]["host_id"] = "";
	$placeHoldershosts["French"]["host_id"] = "";
	$fieldLabelshosts["French"]["hostname"] = "Hostname";
	$fieldToolTipshosts["French"]["hostname"] = "";
	$placeHoldershosts["French"]["hostname"] = "";
	$fieldLabelshosts["French"]["comments"] = "Comments";
	$fieldToolTipshosts["French"]["comments"] = "";
	$placeHoldershosts["French"]["comments"] = "";
	$fieldLabelshosts["French"]["created"] = "Created";
	$fieldToolTipshosts["French"]["created"] = "";
	$placeHoldershosts["French"]["created"] = "";
	if (count($fieldToolTipshosts["French"]))
		$tdatahosts[".isUseToolTips"] = true;
}


	$tdatahosts[".NCSearch"] = true;



$tdatahosts[".shortTableName"] = "hosts";
$tdatahosts[".nSecOptions"] = 0;

$tdatahosts[".mainTableOwnerID"] = "host_id";
$tdatahosts[".entityType"] = 0;
$tdatahosts[".connId"] = "nicadmin_at_localhost";


$tdatahosts[".strOriginalTableName"] = "hosts";

	



$tdatahosts[".showAddInPopup"] = false;

$tdatahosts[".showEditInPopup"] = false;

$tdatahosts[".showViewInPopup"] = false;

$tdatahosts[".listAjax"] = false;
//	temporary
//$tdatahosts[".listAjax"] = false;

	$tdatahosts[".audit"] = false;

	$tdatahosts[".locking"] = false;


$pages = $tdatahosts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahosts[".edit"] = true;
	$tdatahosts[".afterEditAction"] = 1;
	$tdatahosts[".closePopupAfterEdit"] = 1;
	$tdatahosts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahosts[".add"] = true;
$tdatahosts[".afterAddAction"] = 1;
$tdatahosts[".closePopupAfterAdd"] = 1;
$tdatahosts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahosts[".list"] = true;
}



$tdatahosts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahosts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahosts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahosts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahosts[".printFriendly"] = true;
}



$tdatahosts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahosts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahosts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahosts[".isUseAjaxSuggest"] = true;





$tdatahosts[".ajaxCodeSnippetAdded"] = false;

$tdatahosts[".buttonsAdded"] = false;

$tdatahosts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahosts[".isUseTimeForSearch"] = false;


$tdatahosts[".badgeColor"] = "3CB371";


$tdatahosts[".allSearchFields"] = array();
$tdatahosts[".filterFields"] = array();
$tdatahosts[".requiredSearchFields"] = array();

$tdatahosts[".googleLikeFields"] = array();
$tdatahosts[".googleLikeFields"][] = "host_id";
$tdatahosts[".googleLikeFields"][] = "hostname";
$tdatahosts[".googleLikeFields"][] = "comments";
$tdatahosts[".googleLikeFields"][] = "created";



$tdatahosts[".tableType"] = "list";

$tdatahosts[".printerPageOrientation"] = 0;
$tdatahosts[".nPrinterPageScale"] = 100;

$tdatahosts[".nPrinterSplitRecords"] = 40;

$tdatahosts[".geocodingEnabled"] = false;










$tdatahosts[".pageSize"] = 20;

$tdatahosts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahosts[".strOrderBy"] = $tstrOrderBy;

$tdatahosts[".orderindexes"] = array();


$tdatahosts[".sqlHead"] = "SELECT host_id,  	hostname,  	comments,  	created";
$tdatahosts[".sqlFrom"] = "FROM hosts";
$tdatahosts[".sqlWhereExpr"] = "";
$tdatahosts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahosts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahosts[".arrGroupsPerPage"] = $arrGPP;

$tdatahosts[".highlightSearchResults"] = true;

$tableKeyshosts = array();
$tableKeyshosts[] = "host_id";
$tdatahosts[".Keys"] = $tableKeyshosts;


$tdatahosts[".hideMobileList"] = array();




//	host_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "host_id";
	$fdata["GoodName"] = "host_id";
	$fdata["ownerTable"] = "hosts";
	$fdata["Label"] = GetFieldLabel("hosts","host_id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatahosts["host_id"] = $fdata;
		$tdatahosts[".searchableFields"][] = "host_id";
//	hostname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hostname";
	$fdata["GoodName"] = "hostname";
	$fdata["ownerTable"] = "hosts";
	$fdata["Label"] = GetFieldLabel("hosts","hostname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hostname";

		$fdata["sourceSingle"] = "hostname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hostname";

	
	
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


	$tdatahosts["hostname"] = $fdata;
		$tdatahosts[".searchableFields"][] = "hostname";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "hosts";
	$fdata["Label"] = GetFieldLabel("hosts","comments");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "comments";

		$fdata["sourceSingle"] = "comments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";

	
	
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


	$tdatahosts["comments"] = $fdata;
		$tdatahosts[".searchableFields"][] = "comments";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "hosts";
	$fdata["Label"] = GetFieldLabel("hosts","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

		$fdata["sourceSingle"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	$tdatahosts["created"] = $fdata;
		$tdatahosts[".searchableFields"][] = "created";


$tables_data["hosts"]=&$tdatahosts;
$field_labels["hosts"] = &$fieldLabelshosts;
$fieldToolTips["hosts"] = &$fieldToolTipshosts;
$placeHolders["hosts"] = &$placeHoldershosts;
$page_titles["hosts"] = &$pageTitleshosts;


changeTextControlsToDate( "hosts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hosts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hosts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hosts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "host_id,  	hostname,  	comments,  	created";
$proto0["m_strFrom"] = "FROM hosts";
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
	"m_strName" => "host_id",
	"m_strTable" => "hosts",
	"m_srcTableName" => "hosts"
));

$proto6["m_sql"] = "host_id";
$proto6["m_srcTableName"] = "hosts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hostname",
	"m_strTable" => "hosts",
	"m_srcTableName" => "hosts"
));

$proto8["m_sql"] = "hostname";
$proto8["m_srcTableName"] = "hosts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "hosts",
	"m_srcTableName" => "hosts"
));

$proto10["m_sql"] = "comments";
$proto10["m_srcTableName"] = "hosts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "hosts",
	"m_srcTableName" => "hosts"
));

$proto12["m_sql"] = "created";
$proto12["m_srcTableName"] = "hosts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "hosts";
$proto15["m_srcTableName"] = "hosts";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "host_id";
$proto15["m_columns"][] = "hostname";
$proto15["m_columns"][] = "comments";
$proto15["m_columns"][] = "created";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "hosts";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "hosts";
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
$proto0["m_srcTableName"]="hosts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hosts = createSqlQuery_hosts();


	
		;

				

$tdatahosts[".sqlquery"] = $queryData_hosts;



$tdatahosts[".hasEvents"] = false;

?>