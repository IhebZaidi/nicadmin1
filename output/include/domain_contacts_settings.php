<?php
$tdatadomain_contacts = array();
$tdatadomain_contacts[".searchableFields"] = array();
$tdatadomain_contacts[".ShortName"] = "domain_contacts";
$tdatadomain_contacts[".OwnerID"] = "id_contact";
$tdatadomain_contacts[".OriginalTable"] = "domain_contacts";


$tdatadomain_contacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\",\"list2\",\"list3\",\"list4\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadomain_contacts[".originalPagesByType"] = $tdatadomain_contacts[".pagesByType"];
$tdatadomain_contacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\",\"list2\",\"list3\",\"list4\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadomain_contacts[".originalPages"] = $tdatadomain_contacts[".pages"];
$tdatadomain_contacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadomain_contacts[".originalDefaultPages"] = $tdatadomain_contacts[".defaultPages"];

//	field labels
$fieldLabelsdomain_contacts = array();
$fieldToolTipsdomain_contacts = array();
$pageTitlesdomain_contacts = array();
$placeHoldersdomain_contacts = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsdomain_contacts["French"] = array();
	$fieldToolTipsdomain_contacts["French"] = array();
	$placeHoldersdomain_contacts["French"] = array();
	$pageTitlesdomain_contacts["French"] = array();
	$fieldLabelsdomain_contacts["French"]["type_contact"] = "Type Contact";
	$fieldToolTipsdomain_contacts["French"]["type_contact"] = "";
	$placeHoldersdomain_contacts["French"]["type_contact"] = "";
	$fieldLabelsdomain_contacts["French"]["id_domain"] = "Id Domain";
	$fieldToolTipsdomain_contacts["French"]["id_domain"] = "";
	$placeHoldersdomain_contacts["French"]["id_domain"] = "";
	$fieldLabelsdomain_contacts["French"]["id_contact"] = "Id Contact";
	$fieldToolTipsdomain_contacts["French"]["id_contact"] = "";
	$placeHoldersdomain_contacts["French"]["id_contact"] = "";
	if (count($fieldToolTipsdomain_contacts["French"]))
		$tdatadomain_contacts[".isUseToolTips"] = true;
}


	$tdatadomain_contacts[".NCSearch"] = true;



$tdatadomain_contacts[".shortTableName"] = "domain_contacts";
$tdatadomain_contacts[".nSecOptions"] = 0;

$tdatadomain_contacts[".mainTableOwnerID"] = "id_contact";
$tdatadomain_contacts[".entityType"] = 0;
$tdatadomain_contacts[".connId"] = "nicadmin_at_localhost";


$tdatadomain_contacts[".strOriginalTableName"] = "domain_contacts";

	



$tdatadomain_contacts[".showAddInPopup"] = false;

$tdatadomain_contacts[".showEditInPopup"] = false;

$tdatadomain_contacts[".showViewInPopup"] = false;

$tdatadomain_contacts[".listAjax"] = false;
//	temporary
//$tdatadomain_contacts[".listAjax"] = false;

	$tdatadomain_contacts[".audit"] = false;

	$tdatadomain_contacts[".locking"] = false;


$pages = $tdatadomain_contacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadomain_contacts[".edit"] = true;
	$tdatadomain_contacts[".afterEditAction"] = 1;
	$tdatadomain_contacts[".closePopupAfterEdit"] = 1;
	$tdatadomain_contacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadomain_contacts[".add"] = true;
$tdatadomain_contacts[".afterAddAction"] = 1;
$tdatadomain_contacts[".closePopupAfterAdd"] = 1;
$tdatadomain_contacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadomain_contacts[".list"] = true;
}



$tdatadomain_contacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadomain_contacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadomain_contacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadomain_contacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadomain_contacts[".printFriendly"] = true;
}



$tdatadomain_contacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadomain_contacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadomain_contacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadomain_contacts[".isUseAjaxSuggest"] = true;





$tdatadomain_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatadomain_contacts[".buttonsAdded"] = false;

$tdatadomain_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadomain_contacts[".isUseTimeForSearch"] = false;


$tdatadomain_contacts[".badgeColor"] = "edca00";


$tdatadomain_contacts[".allSearchFields"] = array();
$tdatadomain_contacts[".filterFields"] = array();
$tdatadomain_contacts[".requiredSearchFields"] = array();

$tdatadomain_contacts[".googleLikeFields"] = array();
$tdatadomain_contacts[".googleLikeFields"][] = "type_contact";
$tdatadomain_contacts[".googleLikeFields"][] = "id_domain";
$tdatadomain_contacts[".googleLikeFields"][] = "id_contact";



$tdatadomain_contacts[".tableType"] = "list";

$tdatadomain_contacts[".printerPageOrientation"] = 0;
$tdatadomain_contacts[".nPrinterPageScale"] = 100;

$tdatadomain_contacts[".nPrinterSplitRecords"] = 40;

$tdatadomain_contacts[".geocodingEnabled"] = false;










$tdatadomain_contacts[".pageSize"] = 20;

$tdatadomain_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadomain_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatadomain_contacts[".orderindexes"] = array();


$tdatadomain_contacts[".sqlHead"] = "SELECT type_contact,  id_domain,  id_contact";
$tdatadomain_contacts[".sqlFrom"] = "FROM domain_contacts";
$tdatadomain_contacts[".sqlWhereExpr"] = "";
$tdatadomain_contacts[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatadomain_contacts[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadomain_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadomain_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatadomain_contacts[".highlightSearchResults"] = true;

$tableKeysdomain_contacts = array();
$tableKeysdomain_contacts[] = "type_contact";
$tdatadomain_contacts[".Keys"] = $tableKeysdomain_contacts;


$tdatadomain_contacts[".hideMobileList"] = array();




//	type_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type_contact";
	$fdata["GoodName"] = "type_contact";
	$fdata["ownerTable"] = "domain_contacts";
	$fdata["Label"] = GetFieldLabel("domain_contacts","type_contact");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "type_contact";

		$fdata["sourceSingle"] = "type_contact";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "type_contact";

	
	
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
	$edata["LookupTable"] = "domain_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "type_contact";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type_contact";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatadomain_contacts["type_contact"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "type_contact";
//	id_domain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_domain";
	$fdata["GoodName"] = "id_domain";
	$fdata["ownerTable"] = "domain_contacts";
	$fdata["Label"] = GetFieldLabel("domain_contacts","id_domain");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "domains";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id";

	

	
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


	$tdatadomain_contacts["id_domain"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "id_domain";
//	id_contact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_contact";
	$fdata["GoodName"] = "id_contact";
	$fdata["ownerTable"] = "domain_contacts";
	$fdata["Label"] = GetFieldLabel("domain_contacts","id_contact");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_contact";

		$fdata["sourceSingle"] = "id_contact";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_contact";

	
	
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
	$edata["LookupTable"] = "contacts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatadomain_contacts["id_contact"] = $fdata;
		$tdatadomain_contacts[".searchableFields"][] = "id_contact";


$tables_data["domain_contacts"]=&$tdatadomain_contacts;
$field_labels["domain_contacts"] = &$fieldLabelsdomain_contacts;
$fieldToolTips["domain_contacts"] = &$fieldToolTipsdomain_contacts;
$placeHolders["domain_contacts"] = &$placeHoldersdomain_contacts;
$page_titles["domain_contacts"] = &$pageTitlesdomain_contacts;


changeTextControlsToDate( "domain_contacts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["domain_contacts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["domain_contacts"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="domains";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="domains";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "domains";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["domain_contacts"][0] = $masterParams;
				$masterTablesData["domain_contacts"][0]["masterKeys"] = array();
	$masterTablesData["domain_contacts"][0]["masterKeys"][]="id";
				$masterTablesData["domain_contacts"][0]["detailKeys"] = array();
	$masterTablesData["domain_contacts"][0]["detailKeys"][]="id_domain";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_domain_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "type_contact,  id_domain,  id_contact";
$proto0["m_strFrom"] = "FROM domain_contacts";
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
	"m_strName" => "type_contact",
	"m_strTable" => "domain_contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto6["m_sql"] = "type_contact";
$proto6["m_srcTableName"] = "domain_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_domain",
	"m_strTable" => "domain_contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto8["m_sql"] = "id_domain";
$proto8["m_srcTableName"] = "domain_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_contact",
	"m_strTable" => "domain_contacts",
	"m_srcTableName" => "domain_contacts"
));

$proto10["m_sql"] = "id_contact";
$proto10["m_srcTableName"] = "domain_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "domain_contacts";
$proto13["m_srcTableName"] = "domain_contacts";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_domain";
$proto13["m_columns"][] = "id_contact";
$proto13["m_columns"][] = "type_contact";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "domain_contacts";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "domain_contacts";
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
$proto0["m_srcTableName"]="domain_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_domain_contacts = createSqlQuery_domain_contacts();


	
		;

			

$tdatadomain_contacts[".sqlquery"] = $queryData_domain_contacts;



$tdatadomain_contacts[".hasEvents"] = false;

?>