<?php
$tdatanameservers = array();
$tdatanameservers[".searchableFields"] = array();
$tdatanameservers[".ShortName"] = "nameservers";
$tdatanameservers[".OwnerID"] = "nameserver";
$tdatanameservers[".OriginalTable"] = "nameservers";


$tdatanameservers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanameservers[".originalPagesByType"] = $tdatanameservers[".pagesByType"];
$tdatanameservers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanameservers[".originalPages"] = $tdatanameservers[".pages"];
$tdatanameservers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanameservers[".originalDefaultPages"] = $tdatanameservers[".defaultPages"];

//	field labels
$fieldLabelsnameservers = array();
$fieldToolTipsnameservers = array();
$pageTitlesnameservers = array();
$placeHoldersnameservers = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsnameservers["French"] = array();
	$fieldToolTipsnameservers["French"] = array();
	$placeHoldersnameservers["French"] = array();
	$pageTitlesnameservers["French"] = array();
	$fieldLabelsnameservers["French"]["domain_id"] = "Domain Id";
	$fieldToolTipsnameservers["French"]["domain_id"] = "";
	$placeHoldersnameservers["French"]["domain_id"] = "";
	$fieldLabelsnameservers["French"]["ttl"] = "Ttl";
	$fieldToolTipsnameservers["French"]["ttl"] = "";
	$placeHoldersnameservers["French"]["ttl"] = "";
	$fieldLabelsnameservers["French"]["nameserver"] = "Nameserver";
	$fieldToolTipsnameservers["French"]["nameserver"] = "";
	$placeHoldersnameservers["French"]["nameserver"] = "";
	if (count($fieldToolTipsnameservers["French"]))
		$tdatanameservers[".isUseToolTips"] = true;
}


	$tdatanameservers[".NCSearch"] = true;



$tdatanameservers[".shortTableName"] = "nameservers";
$tdatanameservers[".nSecOptions"] = 0;

$tdatanameservers[".mainTableOwnerID"] = "nameserver";
$tdatanameservers[".entityType"] = 0;
$tdatanameservers[".connId"] = "nicadmin_at_localhost";


$tdatanameservers[".strOriginalTableName"] = "nameservers";

	



$tdatanameservers[".showAddInPopup"] = false;

$tdatanameservers[".showEditInPopup"] = false;

$tdatanameservers[".showViewInPopup"] = false;

$tdatanameservers[".listAjax"] = false;
//	temporary
//$tdatanameservers[".listAjax"] = false;

	$tdatanameservers[".audit"] = false;

	$tdatanameservers[".locking"] = false;


$pages = $tdatanameservers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanameservers[".edit"] = true;
	$tdatanameservers[".afterEditAction"] = 1;
	$tdatanameservers[".closePopupAfterEdit"] = 1;
	$tdatanameservers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanameservers[".add"] = true;
$tdatanameservers[".afterAddAction"] = 1;
$tdatanameservers[".closePopupAfterAdd"] = 1;
$tdatanameservers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanameservers[".list"] = true;
}



$tdatanameservers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanameservers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanameservers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanameservers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanameservers[".printFriendly"] = true;
}



$tdatanameservers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanameservers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanameservers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanameservers[".isUseAjaxSuggest"] = true;





$tdatanameservers[".ajaxCodeSnippetAdded"] = false;

$tdatanameservers[".buttonsAdded"] = false;

$tdatanameservers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanameservers[".isUseTimeForSearch"] = false;


$tdatanameservers[".badgeColor"] = "cfae83";


$tdatanameservers[".allSearchFields"] = array();
$tdatanameservers[".filterFields"] = array();
$tdatanameservers[".requiredSearchFields"] = array();

$tdatanameservers[".googleLikeFields"] = array();
$tdatanameservers[".googleLikeFields"][] = "domain_id";
$tdatanameservers[".googleLikeFields"][] = "ttl";
$tdatanameservers[".googleLikeFields"][] = "nameserver";



$tdatanameservers[".tableType"] = "list";

$tdatanameservers[".printerPageOrientation"] = 0;
$tdatanameservers[".nPrinterPageScale"] = 100;

$tdatanameservers[".nPrinterSplitRecords"] = 40;

$tdatanameservers[".geocodingEnabled"] = false;










$tdatanameservers[".pageSize"] = 20;

$tdatanameservers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanameservers[".strOrderBy"] = $tstrOrderBy;

$tdatanameservers[".orderindexes"] = array();


$tdatanameservers[".sqlHead"] = "SELECT domain_id,  	ttl,  	nameserver";
$tdatanameservers[".sqlFrom"] = "FROM nameservers";
$tdatanameservers[".sqlWhereExpr"] = "";
$tdatanameservers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanameservers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanameservers[".arrGroupsPerPage"] = $arrGPP;

$tdatanameservers[".highlightSearchResults"] = true;

$tableKeysnameservers = array();
$tableKeysnameservers[] = "domain_id";
$tableKeysnameservers[] = "nameserver";
$tdatanameservers[".Keys"] = $tableKeysnameservers;


$tdatanameservers[".hideMobileList"] = array();




//	domain_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "domain_id";
	$fdata["GoodName"] = "domain_id";
	$fdata["ownerTable"] = "nameservers";
	$fdata["Label"] = GetFieldLabel("nameservers","domain_id");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "domain_id";

		$fdata["sourceSingle"] = "domain_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domain_id";

	
	
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


	$tdatanameservers["domain_id"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "domain_id";
//	ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ttl";
	$fdata["GoodName"] = "ttl";
	$fdata["ownerTable"] = "nameservers";
	$fdata["Label"] = GetFieldLabel("nameservers","ttl");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ttl";

		$fdata["sourceSingle"] = "ttl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ttl";

	
	
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
			$edata["EditParams"].= " maxlength=14";

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


	$tdatanameservers["ttl"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "ttl";
//	nameserver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nameserver";
	$fdata["GoodName"] = "nameserver";
	$fdata["ownerTable"] = "nameservers";
	$fdata["Label"] = GetFieldLabel("nameservers","nameserver");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "nameserver";

		$fdata["sourceSingle"] = "nameserver";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nameserver";

	
	
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
	$edata["LookupTable"] = "hosts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "host_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "hostname";

	

	
	$edata["LookupOrderBy"] = "hostname";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatanameservers["nameserver"] = $fdata;
		$tdatanameservers[".searchableFields"][] = "nameserver";


$tables_data["nameservers"]=&$tdatanameservers;
$field_labels["nameservers"] = &$fieldLabelsnameservers;
$fieldToolTips["nameservers"] = &$fieldToolTipsnameservers;
$placeHolders["nameservers"] = &$placeHoldersnameservers;
$page_titles["nameservers"] = &$pageTitlesnameservers;


changeTextControlsToDate( "nameservers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nameservers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nameservers"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="domains";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="domains";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "domains";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["nameservers"][0] = $masterParams;
				$masterTablesData["nameservers"][0]["masterKeys"] = array();
	$masterTablesData["nameservers"][0]["masterKeys"][]="id";
				$masterTablesData["nameservers"][0]["detailKeys"] = array();
	$masterTablesData["nameservers"][0]["detailKeys"][]="domain_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nameservers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "domain_id,  	ttl,  	nameserver";
$proto0["m_strFrom"] = "FROM nameservers";
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
	"m_strName" => "domain_id",
	"m_strTable" => "nameservers",
	"m_srcTableName" => "nameservers"
));

$proto6["m_sql"] = "domain_id";
$proto6["m_srcTableName"] = "nameservers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl",
	"m_strTable" => "nameservers",
	"m_srcTableName" => "nameservers"
));

$proto8["m_sql"] = "ttl";
$proto8["m_srcTableName"] = "nameservers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nameserver",
	"m_strTable" => "nameservers",
	"m_srcTableName" => "nameservers"
));

$proto10["m_sql"] = "nameserver";
$proto10["m_srcTableName"] = "nameservers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "nameservers";
$proto13["m_srcTableName"] = "nameservers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "domain_id";
$proto13["m_columns"][] = "ttl";
$proto13["m_columns"][] = "nameserver";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "nameservers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "nameservers";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="nameservers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nameservers = createSqlQuery_nameservers();


	
		;

			

$tdatanameservers[".sqlquery"] = $queryData_nameservers;



$tdatanameservers[".hasEvents"] = false;

?>