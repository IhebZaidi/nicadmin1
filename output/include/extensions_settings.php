<?php
$tdataextensions = array();
$tdataextensions[".searchableFields"] = array();
$tdataextensions[".ShortName"] = "extensions";
$tdataextensions[".OwnerID"] = "";
$tdataextensions[".OriginalTable"] = "extensions";


$tdataextensions[".pagesByType"] = my_json_decode( "{}" );
$tdataextensions[".originalPagesByType"] = $tdataextensions[".pagesByType"];
$tdataextensions[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataextensions[".originalPages"] = $tdataextensions[".pages"];
$tdataextensions[".defaultPages"] = my_json_decode( "{}" );
$tdataextensions[".originalDefaultPages"] = $tdataextensions[".defaultPages"];

//	field labels
$fieldLabelsextensions = array();
$fieldToolTipsextensions = array();
$pageTitlesextensions = array();
$placeHoldersextensions = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsextensions["French"] = array();
	$fieldToolTipsextensions["French"] = array();
	$placeHoldersextensions["French"] = array();
	$pageTitlesextensions["French"] = array();
	$fieldLabelsextensions["French"]["id"] = "Id";
	$fieldToolTipsextensions["French"]["id"] = "";
	$placeHoldersextensions["French"]["id"] = "";
	$fieldLabelsextensions["French"]["nom"] = "Nom";
	$fieldToolTipsextensions["French"]["nom"] = "";
	$placeHoldersextensions["French"]["nom"] = "";
	$fieldLabelsextensions["French"]["commentaires"] = "Commentaires";
	$fieldToolTipsextensions["French"]["commentaires"] = "";
	$placeHoldersextensions["French"]["commentaires"] = "";
	$fieldLabelsextensions["French"]["nom_script"] = "Nom Script";
	$fieldToolTipsextensions["French"]["nom_script"] = "";
	$placeHoldersextensions["French"]["nom_script"] = "";
	$fieldLabelsextensions["French"]["upd"] = "Upd";
	$fieldToolTipsextensions["French"]["upd"] = "";
	$placeHoldersextensions["French"]["upd"] = "";
	if (count($fieldToolTipsextensions["French"]))
		$tdataextensions[".isUseToolTips"] = true;
}


	$tdataextensions[".NCSearch"] = true;



$tdataextensions[".shortTableName"] = "extensions";
$tdataextensions[".nSecOptions"] = 0;

$tdataextensions[".mainTableOwnerID"] = "";
$tdataextensions[".entityType"] = 0;
$tdataextensions[".connId"] = "nicadmin_at_localhost";


$tdataextensions[".strOriginalTableName"] = "extensions";

	



$tdataextensions[".showAddInPopup"] = false;

$tdataextensions[".showEditInPopup"] = false;

$tdataextensions[".showViewInPopup"] = false;

$tdataextensions[".listAjax"] = false;
//	temporary
//$tdataextensions[".listAjax"] = false;

	$tdataextensions[".audit"] = false;

	$tdataextensions[".locking"] = false;


$pages = $tdataextensions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataextensions[".edit"] = true;
	$tdataextensions[".afterEditAction"] = 1;
	$tdataextensions[".closePopupAfterEdit"] = 1;
	$tdataextensions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataextensions[".add"] = true;
$tdataextensions[".afterAddAction"] = 1;
$tdataextensions[".closePopupAfterAdd"] = 1;
$tdataextensions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataextensions[".list"] = true;
}



$tdataextensions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataextensions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataextensions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataextensions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataextensions[".printFriendly"] = true;
}



$tdataextensions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataextensions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataextensions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataextensions[".isUseAjaxSuggest"] = true;





$tdataextensions[".ajaxCodeSnippetAdded"] = false;

$tdataextensions[".buttonsAdded"] = false;

$tdataextensions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataextensions[".isUseTimeForSearch"] = false;


$tdataextensions[".badgeColor"] = "6da5c8";


$tdataextensions[".allSearchFields"] = array();
$tdataextensions[".filterFields"] = array();
$tdataextensions[".requiredSearchFields"] = array();

$tdataextensions[".googleLikeFields"] = array();
$tdataextensions[".googleLikeFields"][] = "id";
$tdataextensions[".googleLikeFields"][] = "nom";
$tdataextensions[".googleLikeFields"][] = "commentaires";
$tdataextensions[".googleLikeFields"][] = "nom_script";
$tdataextensions[".googleLikeFields"][] = "upd";



$tdataextensions[".tableType"] = "list";

$tdataextensions[".printerPageOrientation"] = 0;
$tdataextensions[".nPrinterPageScale"] = 100;

$tdataextensions[".nPrinterSplitRecords"] = 40;

$tdataextensions[".geocodingEnabled"] = false;










$tdataextensions[".pageSize"] = 20;

$tdataextensions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataextensions[".strOrderBy"] = $tstrOrderBy;

$tdataextensions[".orderindexes"] = array();


$tdataextensions[".sqlHead"] = "SELECT id,  	nom,  	commentaires,  	nom_script,  	upd";
$tdataextensions[".sqlFrom"] = "FROM extensions";
$tdataextensions[".sqlWhereExpr"] = "";
$tdataextensions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataextensions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataextensions[".arrGroupsPerPage"] = $arrGPP;

$tdataextensions[".highlightSearchResults"] = true;

$tableKeysextensions = array();
$tableKeysextensions[] = "id";
$tdataextensions[".Keys"] = $tableKeysextensions;


$tdataextensions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("extensions","id");
	$fdata["FieldType"] = 16;


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


	$tdataextensions["id"] = $fdata;
		$tdataextensions[".searchableFields"][] = "id";
//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("extensions","nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom";

		$fdata["sourceSingle"] = "nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataextensions["nom"] = $fdata;
		$tdataextensions[".searchableFields"][] = "nom";
//	commentaires
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "commentaires";
	$fdata["GoodName"] = "commentaires";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("extensions","commentaires");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "commentaires";

		$fdata["sourceSingle"] = "commentaires";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "commentaires";

	
	
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


	$tdataextensions["commentaires"] = $fdata;
		$tdataextensions[".searchableFields"][] = "commentaires";
//	nom_script
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nom_script";
	$fdata["GoodName"] = "nom_script";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("extensions","nom_script");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_script";

		$fdata["sourceSingle"] = "nom_script";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_script";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataextensions["nom_script"] = $fdata;
		$tdataextensions[".searchableFields"][] = "nom_script";
//	upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "upd";
	$fdata["GoodName"] = "upd";
	$fdata["ownerTable"] = "extensions";
	$fdata["Label"] = GetFieldLabel("extensions","upd");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "upd";

		$fdata["sourceSingle"] = "upd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd";

	
	
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


	$tdataextensions["upd"] = $fdata;
		$tdataextensions[".searchableFields"][] = "upd";


$tables_data["extensions"]=&$tdataextensions;
$field_labels["extensions"] = &$fieldLabelsextensions;
$fieldToolTips["extensions"] = &$fieldToolTipsextensions;
$placeHolders["extensions"] = &$placeHoldersextensions;
$page_titles["extensions"] = &$pageTitlesextensions;


changeTextControlsToDate( "extensions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["extensions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["extensions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_extensions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nom,  	commentaires,  	nom_script,  	upd";
$proto0["m_strFrom"] = "FROM extensions";
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
	"m_strTable" => "extensions",
	"m_srcTableName" => "extensions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "extensions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom",
	"m_strTable" => "extensions",
	"m_srcTableName" => "extensions"
));

$proto8["m_sql"] = "nom";
$proto8["m_srcTableName"] = "extensions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "commentaires",
	"m_strTable" => "extensions",
	"m_srcTableName" => "extensions"
));

$proto10["m_sql"] = "commentaires";
$proto10["m_srcTableName"] = "extensions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_script",
	"m_strTable" => "extensions",
	"m_srcTableName" => "extensions"
));

$proto12["m_sql"] = "nom_script";
$proto12["m_srcTableName"] = "extensions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "upd",
	"m_strTable" => "extensions",
	"m_srcTableName" => "extensions"
));

$proto14["m_sql"] = "upd";
$proto14["m_srcTableName"] = "extensions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "extensions";
$proto17["m_srcTableName"] = "extensions";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nom";
$proto17["m_columns"][] = "commentaires";
$proto17["m_columns"][] = "nom_script";
$proto17["m_columns"][] = "upd";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "extensions";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "extensions";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="extensions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_extensions = createSqlQuery_extensions();


	
		;

					

$tdataextensions[".sqlquery"] = $queryData_extensions;



$tdataextensions[".hasEvents"] = false;

?>