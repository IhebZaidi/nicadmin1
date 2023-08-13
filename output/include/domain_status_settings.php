<?php
$tdatadomain_status = array();
$tdatadomain_status[".searchableFields"] = array();
$tdatadomain_status[".ShortName"] = "domain_status";
$tdatadomain_status[".OwnerID"] = "id_status";
$tdatadomain_status[".OriginalTable"] = "domain_status";


$tdatadomain_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadomain_status[".originalPagesByType"] = $tdatadomain_status[".pagesByType"];
$tdatadomain_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadomain_status[".originalPages"] = $tdatadomain_status[".pages"];
$tdatadomain_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadomain_status[".originalDefaultPages"] = $tdatadomain_status[".defaultPages"];

//	field labels
$fieldLabelsdomain_status = array();
$fieldToolTipsdomain_status = array();
$pageTitlesdomain_status = array();
$placeHoldersdomain_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdomain_status["English"] = array();
	$fieldToolTipsdomain_status["English"] = array();
	$placeHoldersdomain_status["English"] = array();
	$pageTitlesdomain_status["English"] = array();
	$fieldLabelsdomain_status["English"]["id_status"] = "Id Status";
	$fieldToolTipsdomain_status["English"]["id_status"] = "";
	$placeHoldersdomain_status["English"]["id_status"] = "";
	$fieldLabelsdomain_status["English"]["status"] = "Status";
	$fieldToolTipsdomain_status["English"]["status"] = "";
	$placeHoldersdomain_status["English"]["status"] = "";
	if (count($fieldToolTipsdomain_status["English"]))
		$tdatadomain_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Arabic")
{
	$fieldLabelsdomain_status["Arabic"] = array();
	$fieldToolTipsdomain_status["Arabic"] = array();
	$placeHoldersdomain_status["Arabic"] = array();
	$pageTitlesdomain_status["Arabic"] = array();
	$fieldLabelsdomain_status["Arabic"]["id_status"] = "Id Status";
	$fieldToolTipsdomain_status["Arabic"]["id_status"] = "";
	$placeHoldersdomain_status["Arabic"]["id_status"] = "";
	$fieldLabelsdomain_status["Arabic"]["status"] = "Status";
	$fieldToolTipsdomain_status["Arabic"]["status"] = "";
	$placeHoldersdomain_status["Arabic"]["status"] = "";
	if (count($fieldToolTipsdomain_status["Arabic"]))
		$tdatadomain_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdomain_status["French"] = array();
	$fieldToolTipsdomain_status["French"] = array();
	$placeHoldersdomain_status["French"] = array();
	$pageTitlesdomain_status["French"] = array();
	$fieldLabelsdomain_status["French"]["id_status"] = "Id Status";
	$fieldToolTipsdomain_status["French"]["id_status"] = "";
	$placeHoldersdomain_status["French"]["id_status"] = "";
	$fieldLabelsdomain_status["French"]["status"] = "Status";
	$fieldToolTipsdomain_status["French"]["status"] = "";
	$placeHoldersdomain_status["French"]["status"] = "";
	if (count($fieldToolTipsdomain_status["French"]))
		$tdatadomain_status[".isUseToolTips"] = true;
}


	$tdatadomain_status[".NCSearch"] = true;



$tdatadomain_status[".shortTableName"] = "domain_status";
$tdatadomain_status[".nSecOptions"] = 1;

$tdatadomain_status[".mainTableOwnerID"] = "id_status";
$tdatadomain_status[".entityType"] = 0;
$tdatadomain_status[".connId"] = "nicadmin_at_localhost";


$tdatadomain_status[".strOriginalTableName"] = "domain_status";

	



$tdatadomain_status[".showAddInPopup"] = false;

$tdatadomain_status[".showEditInPopup"] = false;

$tdatadomain_status[".showViewInPopup"] = false;

$tdatadomain_status[".listAjax"] = false;
//	temporary
//$tdatadomain_status[".listAjax"] = false;

	$tdatadomain_status[".audit"] = false;

	$tdatadomain_status[".locking"] = false;


$pages = $tdatadomain_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadomain_status[".edit"] = true;
	$tdatadomain_status[".afterEditAction"] = 1;
	$tdatadomain_status[".closePopupAfterEdit"] = 1;
	$tdatadomain_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadomain_status[".add"] = true;
$tdatadomain_status[".afterAddAction"] = 1;
$tdatadomain_status[".closePopupAfterAdd"] = 1;
$tdatadomain_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadomain_status[".list"] = true;
}



$tdatadomain_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadomain_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadomain_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadomain_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadomain_status[".printFriendly"] = true;
}



$tdatadomain_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadomain_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadomain_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadomain_status[".isUseAjaxSuggest"] = true;





$tdatadomain_status[".ajaxCodeSnippetAdded"] = false;

$tdatadomain_status[".buttonsAdded"] = false;

$tdatadomain_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadomain_status[".isUseTimeForSearch"] = false;


$tdatadomain_status[".badgeColor"] = "00c2c5";


$tdatadomain_status[".allSearchFields"] = array();
$tdatadomain_status[".filterFields"] = array();
$tdatadomain_status[".requiredSearchFields"] = array();

$tdatadomain_status[".googleLikeFields"] = array();
$tdatadomain_status[".googleLikeFields"][] = "id_status";
$tdatadomain_status[".googleLikeFields"][] = "status";



$tdatadomain_status[".tableType"] = "list";

$tdatadomain_status[".printerPageOrientation"] = 0;
$tdatadomain_status[".nPrinterPageScale"] = 100;

$tdatadomain_status[".nPrinterSplitRecords"] = 40;

$tdatadomain_status[".geocodingEnabled"] = false;










$tdatadomain_status[".pageSize"] = 20;

$tdatadomain_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadomain_status[".strOrderBy"] = $tstrOrderBy;

$tdatadomain_status[".orderindexes"] = array();


$tdatadomain_status[".sqlHead"] = "SELECT id_status,  	status";
$tdatadomain_status[".sqlFrom"] = "FROM domain_status";
$tdatadomain_status[".sqlWhereExpr"] = "";
$tdatadomain_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadomain_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadomain_status[".arrGroupsPerPage"] = $arrGPP;

$tdatadomain_status[".highlightSearchResults"] = true;

$tableKeysdomain_status = array();
$tableKeysdomain_status[] = "id_status";
$tdatadomain_status[".Keys"] = $tableKeysdomain_status;


$tdatadomain_status[".hideMobileList"] = array();




//	id_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_status";
	$fdata["GoodName"] = "id_status";
	$fdata["ownerTable"] = "domain_status";
	$fdata["Label"] = GetFieldLabel("domain_status","id_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_status";

		$fdata["sourceSingle"] = "id_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_status";

	
	
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


	$tdatadomain_status["id_status"] = $fdata;
		$tdatadomain_status[".searchableFields"][] = "id_status";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "domain_status";
	$fdata["Label"] = GetFieldLabel("domain_status","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatadomain_status["status"] = $fdata;
		$tdatadomain_status[".searchableFields"][] = "status";


$tables_data["domain_status"]=&$tdatadomain_status;
$field_labels["domain_status"] = &$fieldLabelsdomain_status;
$fieldToolTips["domain_status"] = &$fieldToolTipsdomain_status;
$placeHolders["domain_status"] = &$placeHoldersdomain_status;
$page_titles["domain_status"] = &$pageTitlesdomain_status;


changeTextControlsToDate( "domain_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["domain_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["domain_status"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="domains";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="domains";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "domains";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["domain_status"][0] = $masterParams;
				$masterTablesData["domain_status"][0]["masterKeys"] = array();
	$masterTablesData["domain_status"][0]["masterKeys"][]="etat";
				$masterTablesData["domain_status"][0]["detailKeys"] = array();
	$masterTablesData["domain_status"][0]["detailKeys"][]="id_status";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_domain_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_status,  	status";
$proto0["m_strFrom"] = "FROM domain_status";
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
	"m_strName" => "id_status",
	"m_strTable" => "domain_status",
	"m_srcTableName" => "domain_status"
));

$proto6["m_sql"] = "id_status";
$proto6["m_srcTableName"] = "domain_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "domain_status",
	"m_srcTableName" => "domain_status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "domain_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "domain_status";
$proto11["m_srcTableName"] = "domain_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_status";
$proto11["m_columns"][] = "status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "domain_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "domain_status";
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
$proto0["m_srcTableName"]="domain_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_domain_status = createSqlQuery_domain_status();


	
		;

		

$tdatadomain_status[".sqlquery"] = $queryData_domain_status;



$tdatadomain_status[".hasEvents"] = false;

?>