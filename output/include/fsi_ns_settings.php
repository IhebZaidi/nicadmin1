<?php
$tdatafsi_ns = array();
$tdatafsi_ns[".searchableFields"] = array();
$tdatafsi_ns[".ShortName"] = "fsi_ns";
$tdatafsi_ns[".OwnerID"] = "id_fsi";
$tdatafsi_ns[".OriginalTable"] = "fsi_ns";


$tdatafsi_ns[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatafsi_ns[".originalPagesByType"] = $tdatafsi_ns[".pagesByType"];
$tdatafsi_ns[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatafsi_ns[".originalPages"] = $tdatafsi_ns[".pages"];
$tdatafsi_ns[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatafsi_ns[".originalDefaultPages"] = $tdatafsi_ns[".defaultPages"];

//	field labels
$fieldLabelsfsi_ns = array();
$fieldToolTipsfsi_ns = array();
$pageTitlesfsi_ns = array();
$placeHoldersfsi_ns = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfsi_ns["French"] = array();
	$fieldToolTipsfsi_ns["French"] = array();
	$placeHoldersfsi_ns["French"] = array();
	$pageTitlesfsi_ns["French"] = array();
	$fieldLabelsfsi_ns["French"]["id_fsi"] = "Id Fsi";
	$fieldToolTipsfsi_ns["French"]["id_fsi"] = "";
	$placeHoldersfsi_ns["French"]["id_fsi"] = "";
	$fieldLabelsfsi_ns["French"]["nameserver"] = "Nameserver";
	$fieldToolTipsfsi_ns["French"]["nameserver"] = "";
	$placeHoldersfsi_ns["French"]["nameserver"] = "";
	if (count($fieldToolTipsfsi_ns["French"]))
		$tdatafsi_ns[".isUseToolTips"] = true;
}


	$tdatafsi_ns[".NCSearch"] = true;



$tdatafsi_ns[".shortTableName"] = "fsi_ns";
$tdatafsi_ns[".nSecOptions"] = 1;

$tdatafsi_ns[".mainTableOwnerID"] = "id_fsi";
$tdatafsi_ns[".entityType"] = 0;
$tdatafsi_ns[".connId"] = "nicadmin_at_localhost";


$tdatafsi_ns[".strOriginalTableName"] = "fsi_ns";

	



$tdatafsi_ns[".showAddInPopup"] = false;

$tdatafsi_ns[".showEditInPopup"] = false;

$tdatafsi_ns[".showViewInPopup"] = false;

$tdatafsi_ns[".listAjax"] = false;
//	temporary
//$tdatafsi_ns[".listAjax"] = false;

	$tdatafsi_ns[".audit"] = false;

	$tdatafsi_ns[".locking"] = false;


$pages = $tdatafsi_ns[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafsi_ns[".edit"] = true;
	$tdatafsi_ns[".afterEditAction"] = 1;
	$tdatafsi_ns[".closePopupAfterEdit"] = 1;
	$tdatafsi_ns[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafsi_ns[".add"] = true;
$tdatafsi_ns[".afterAddAction"] = 1;
$tdatafsi_ns[".closePopupAfterAdd"] = 1;
$tdatafsi_ns[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafsi_ns[".list"] = true;
}



$tdatafsi_ns[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafsi_ns[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafsi_ns[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafsi_ns[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafsi_ns[".printFriendly"] = true;
}



$tdatafsi_ns[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafsi_ns[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafsi_ns[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafsi_ns[".isUseAjaxSuggest"] = true;





$tdatafsi_ns[".ajaxCodeSnippetAdded"] = false;

$tdatafsi_ns[".buttonsAdded"] = false;

$tdatafsi_ns[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafsi_ns[".isUseTimeForSearch"] = false;


$tdatafsi_ns[".badgeColor"] = "2f4f4f";


$tdatafsi_ns[".allSearchFields"] = array();
$tdatafsi_ns[".filterFields"] = array();
$tdatafsi_ns[".requiredSearchFields"] = array();

$tdatafsi_ns[".googleLikeFields"] = array();
$tdatafsi_ns[".googleLikeFields"][] = "id_fsi";
$tdatafsi_ns[".googleLikeFields"][] = "nameserver";



$tdatafsi_ns[".tableType"] = "list";

$tdatafsi_ns[".printerPageOrientation"] = 0;
$tdatafsi_ns[".nPrinterPageScale"] = 100;

$tdatafsi_ns[".nPrinterSplitRecords"] = 40;

$tdatafsi_ns[".geocodingEnabled"] = false;










$tdatafsi_ns[".pageSize"] = 20;

$tdatafsi_ns[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafsi_ns[".strOrderBy"] = $tstrOrderBy;

$tdatafsi_ns[".orderindexes"] = array();


$tdatafsi_ns[".sqlHead"] = "SELECT id_fsi,  	nameserver";
$tdatafsi_ns[".sqlFrom"] = "FROM fsi_ns";
$tdatafsi_ns[".sqlWhereExpr"] = "";
$tdatafsi_ns[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafsi_ns[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafsi_ns[".arrGroupsPerPage"] = $arrGPP;

$tdatafsi_ns[".highlightSearchResults"] = true;

$tableKeysfsi_ns = array();
$tdatafsi_ns[".Keys"] = $tableKeysfsi_ns;


$tdatafsi_ns[".hideMobileList"] = array();




//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "fsi_ns";
	$fdata["Label"] = GetFieldLabel("fsi_ns","id_fsi");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatafsi_ns["id_fsi"] = $fdata;
		$tdatafsi_ns[".searchableFields"][] = "id_fsi";
//	nameserver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nameserver";
	$fdata["GoodName"] = "nameserver";
	$fdata["ownerTable"] = "fsi_ns";
	$fdata["Label"] = GetFieldLabel("fsi_ns","nameserver");
	$fdata["FieldType"] = 3;


	
	
			

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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "host_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "hostname";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatafsi_ns["nameserver"] = $fdata;
		$tdatafsi_ns[".searchableFields"][] = "nameserver";


$tables_data["fsi_ns"]=&$tdatafsi_ns;
$field_labels["fsi_ns"] = &$fieldLabelsfsi_ns;
$fieldToolTips["fsi_ns"] = &$fieldToolTipsfsi_ns;
$placeHolders["fsi_ns"] = &$placeHoldersfsi_ns;
$page_titles["fsi_ns"] = &$pageTitlesfsi_ns;


changeTextControlsToDate( "fsi_ns" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fsi_ns"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fsi_ns"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fsi";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fsi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fsi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["fsi_ns"][0] = $masterParams;
				$masterTablesData["fsi_ns"][0]["masterKeys"] = array();
	$masterTablesData["fsi_ns"][0]["masterKeys"][]="id_fsi";
				$masterTablesData["fsi_ns"][0]["detailKeys"] = array();
	$masterTablesData["fsi_ns"][0]["detailKeys"][]="id_fsi";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fsi_ns()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_fsi,  	nameserver";
$proto0["m_strFrom"] = "FROM fsi_ns";
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
	"m_strTable" => "fsi_ns",
	"m_srcTableName" => "fsi_ns"
));

$proto6["m_sql"] = "id_fsi";
$proto6["m_srcTableName"] = "fsi_ns";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nameserver",
	"m_strTable" => "fsi_ns",
	"m_srcTableName" => "fsi_ns"
));

$proto8["m_sql"] = "nameserver";
$proto8["m_srcTableName"] = "fsi_ns";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "fsi_ns";
$proto11["m_srcTableName"] = "fsi_ns";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_fsi";
$proto11["m_columns"][] = "nameserver";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "fsi_ns";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "fsi_ns";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fsi_ns";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fsi_ns = createSqlQuery_fsi_ns();


	
		;

		

$tdatafsi_ns[".sqlquery"] = $queryData_fsi_ns;



$tdatafsi_ns[".hasEvents"] = false;

?>