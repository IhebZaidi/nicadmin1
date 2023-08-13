<?php
$tdatafsi_extensions = array();
$tdatafsi_extensions[".searchableFields"] = array();
$tdatafsi_extensions[".ShortName"] = "fsi_extensions";
$tdatafsi_extensions[".OwnerID"] = "id_fsi";
$tdatafsi_extensions[".OriginalTable"] = "fsi_extensions";


$tdatafsi_extensions[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatafsi_extensions[".originalPagesByType"] = $tdatafsi_extensions[".pagesByType"];
$tdatafsi_extensions[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatafsi_extensions[".originalPages"] = $tdatafsi_extensions[".pages"];
$tdatafsi_extensions[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatafsi_extensions[".originalDefaultPages"] = $tdatafsi_extensions[".defaultPages"];

//	field labels
$fieldLabelsfsi_extensions = array();
$fieldToolTipsfsi_extensions = array();
$pageTitlesfsi_extensions = array();
$placeHoldersfsi_extensions = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsfsi_extensions["French"] = array();
	$fieldToolTipsfsi_extensions["French"] = array();
	$placeHoldersfsi_extensions["French"] = array();
	$pageTitlesfsi_extensions["French"] = array();
	$fieldLabelsfsi_extensions["French"]["ext"] = "Ext";
	$fieldToolTipsfsi_extensions["French"]["ext"] = "";
	$placeHoldersfsi_extensions["French"]["ext"] = "";
	$fieldLabelsfsi_extensions["French"]["id_fsi"] = "Id Fsi";
	$fieldToolTipsfsi_extensions["French"]["id_fsi"] = "";
	$placeHoldersfsi_extensions["French"]["id_fsi"] = "";
	$fieldLabelsfsi_extensions["French"]["nom"] = "Nom";
	$fieldToolTipsfsi_extensions["French"]["nom"] = "";
	$placeHoldersfsi_extensions["French"]["nom"] = "";
	$fieldLabelsfsi_extensions["French"]["commentaires"] = "Commentaires";
	$fieldToolTipsfsi_extensions["French"]["commentaires"] = "";
	$placeHoldersfsi_extensions["French"]["commentaires"] = "";
	if (count($fieldToolTipsfsi_extensions["French"]))
		$tdatafsi_extensions[".isUseToolTips"] = true;
}


	$tdatafsi_extensions[".NCSearch"] = true;



$tdatafsi_extensions[".shortTableName"] = "fsi_extensions";
$tdatafsi_extensions[".nSecOptions"] = 1;

$tdatafsi_extensions[".mainTableOwnerID"] = "id_fsi";
$tdatafsi_extensions[".entityType"] = 0;
$tdatafsi_extensions[".connId"] = "nicadmin_at_localhost";


$tdatafsi_extensions[".strOriginalTableName"] = "fsi_extensions";

	



$tdatafsi_extensions[".showAddInPopup"] = false;

$tdatafsi_extensions[".showEditInPopup"] = false;

$tdatafsi_extensions[".showViewInPopup"] = false;

$tdatafsi_extensions[".listAjax"] = false;
//	temporary
//$tdatafsi_extensions[".listAjax"] = false;

	$tdatafsi_extensions[".audit"] = false;

	$tdatafsi_extensions[".locking"] = false;


$pages = $tdatafsi_extensions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafsi_extensions[".edit"] = true;
	$tdatafsi_extensions[".afterEditAction"] = 1;
	$tdatafsi_extensions[".closePopupAfterEdit"] = 1;
	$tdatafsi_extensions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafsi_extensions[".add"] = true;
$tdatafsi_extensions[".afterAddAction"] = 1;
$tdatafsi_extensions[".closePopupAfterAdd"] = 1;
$tdatafsi_extensions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafsi_extensions[".list"] = true;
}



$tdatafsi_extensions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafsi_extensions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafsi_extensions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafsi_extensions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafsi_extensions[".printFriendly"] = true;
}



$tdatafsi_extensions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafsi_extensions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafsi_extensions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafsi_extensions[".isUseAjaxSuggest"] = true;





$tdatafsi_extensions[".ajaxCodeSnippetAdded"] = false;

$tdatafsi_extensions[".buttonsAdded"] = false;

$tdatafsi_extensions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafsi_extensions[".isUseTimeForSearch"] = false;


$tdatafsi_extensions[".badgeColor"] = "b22222";


$tdatafsi_extensions[".allSearchFields"] = array();
$tdatafsi_extensions[".filterFields"] = array();
$tdatafsi_extensions[".requiredSearchFields"] = array();

$tdatafsi_extensions[".googleLikeFields"] = array();
$tdatafsi_extensions[".googleLikeFields"][] = "ext";
$tdatafsi_extensions[".googleLikeFields"][] = "id_fsi";
$tdatafsi_extensions[".googleLikeFields"][] = "nom";
$tdatafsi_extensions[".googleLikeFields"][] = "commentaires";



$tdatafsi_extensions[".tableType"] = "list";

$tdatafsi_extensions[".printerPageOrientation"] = 0;
$tdatafsi_extensions[".nPrinterPageScale"] = 100;

$tdatafsi_extensions[".nPrinterSplitRecords"] = 40;

$tdatafsi_extensions[".geocodingEnabled"] = false;










$tdatafsi_extensions[".pageSize"] = 20;

$tdatafsi_extensions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafsi_extensions[".strOrderBy"] = $tstrOrderBy;

$tdatafsi_extensions[".orderindexes"] = array();


$tdatafsi_extensions[".sqlHead"] = "SELECT fsi_extensions.ext,  fsi_extensions.id_fsi,  extensions.nom,  extensions.commentaires";
$tdatafsi_extensions[".sqlFrom"] = "FROM fsi_extensions  INNER JOIN extensions ON fsi_extensions.ext = extensions.id";
$tdatafsi_extensions[".sqlWhereExpr"] = "";
$tdatafsi_extensions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafsi_extensions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafsi_extensions[".arrGroupsPerPage"] = $arrGPP;

$tdatafsi_extensions[".highlightSearchResults"] = true;

$tableKeysfsi_extensions = array();
$tableKeysfsi_extensions[] = "ext";
$tdatafsi_extensions[".Keys"] = $tableKeysfsi_extensions;


$tdatafsi_extensions[".hideMobileList"] = array();




//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "fsi_extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","ext");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ext";

		$fdata["sourceSingle"] = "ext";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fsi_extensions.ext";

	
	
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


	$tdatafsi_extensions["ext"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "ext";
//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "fsi_extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","id_fsi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fsi";

		$fdata["sourceSingle"] = "id_fsi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fsi_extensions.id_fsi";

	
	
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


	$tdatafsi_extensions["id_fsi"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "id_fsi";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "extensions.nom";

	
	
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


	$tdatafsi_extensions["nom"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "nom";
//	commentaires
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "commentaires";
	$fdata["GoodName"] = "commentaires";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("fsi_extensions","commentaires");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "commentaires";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "extensions.commentaires";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 200;

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


	$tdatafsi_extensions["commentaires"] = $fdata;
		$tdatafsi_extensions[".searchableFields"][] = "commentaires";


$tables_data["fsi_extensions"]=&$tdatafsi_extensions;
$field_labels["fsi_extensions"] = &$fieldLabelsfsi_extensions;
$fieldToolTips["fsi_extensions"] = &$fieldToolTipsfsi_extensions;
$placeHolders["fsi_extensions"] = &$placeHoldersfsi_extensions;
$page_titles["fsi_extensions"] = &$pageTitlesfsi_extensions;


changeTextControlsToDate( "fsi_extensions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fsi_extensions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fsi_extensions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="fsi";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="fsi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fsi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["fsi_extensions"][0] = $masterParams;
				$masterTablesData["fsi_extensions"][0]["masterKeys"] = array();
	$masterTablesData["fsi_extensions"][0]["masterKeys"][]="id_fsi";
				$masterTablesData["fsi_extensions"][0]["detailKeys"] = array();
	$masterTablesData["fsi_extensions"][0]["detailKeys"][]="id_fsi";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fsi_extensions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fsi_extensions.ext,  fsi_extensions.id_fsi,  extensions.nom,  extensions.commentaires";
$proto0["m_strFrom"] = "FROM fsi_extensions  INNER JOIN extensions ON fsi_extensions.ext = extensions.id";
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
	"m_strName" => "ext",
	"m_strTable" => "fsi_extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto6["m_sql"] = "fsi_extensions.ext";
$proto6["m_srcTableName"] = "fsi_extensions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fsi",
	"m_strTable" => "fsi_extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto8["m_sql"] = "fsi_extensions.id_fsi";
$proto8["m_srcTableName"] = "fsi_extensions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto10["m_sql"] = "extensions.nom";
$proto10["m_srcTableName"] = "fsi_extensions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaires",
	"m_strTable" => "extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto12["m_sql"] = "extensions.commentaires";
$proto12["m_srcTableName"] = "fsi_extensions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "fsi_extensions";
$proto15["m_srcTableName"] = "fsi_extensions";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_fsi";
$proto15["m_columns"][] = "ext";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "fsi_extensions";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "fsi_extensions";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "extensions";
$proto19["m_srcTableName"] = "fsi_extensions";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "nom";
$proto19["m_columns"][] = "commentaires";
$proto19["m_columns"][] = "nom_script";
$proto19["m_columns"][] = "upd";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN extensions ON fsi_extensions.ext = extensions.id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "fsi_extensions";
$proto20=array();
$proto20["m_sql"] = "extensions.id = fsi_extensions.ext";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "extensions",
	"m_srcTableName" => "fsi_extensions"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= fsi_extensions.ext";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="fsi_extensions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fsi_extensions = createSqlQuery_fsi_extensions();


	
		;

				

$tdatafsi_extensions[".sqlquery"] = $queryData_fsi_extensions;



$tdatafsi_extensions[".hasEvents"] = false;

?>