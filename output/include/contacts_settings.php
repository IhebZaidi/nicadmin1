<?php
$tdatacontacts = array();
$tdatacontacts[".searchableFields"] = array();
$tdatacontacts[".ShortName"] = "contacts";
$tdatacontacts[".OwnerID"] = "id_fsi";
$tdatacontacts[".OriginalTable"] = "contacts";


$tdatacontacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontacts[".originalPagesByType"] = $tdatacontacts[".pagesByType"];
$tdatacontacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontacts[".originalPages"] = $tdatacontacts[".pages"];
$tdatacontacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontacts[".originalDefaultPages"] = $tdatacontacts[".defaultPages"];

//	field labels
$fieldLabelscontacts = array();
$fieldToolTipscontacts = array();
$pageTitlescontacts = array();
$placeHolderscontacts = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelscontacts["French"] = array();
	$fieldToolTipscontacts["French"] = array();
	$placeHolderscontacts["French"] = array();
	$pageTitlescontacts["French"] = array();
	$fieldLabelscontacts["French"]["Prenom"] = "Prenom";
	$fieldToolTipscontacts["French"]["Prenom"] = "";
	$placeHolderscontacts["French"]["Prenom"] = "";
	$fieldLabelscontacts["French"]["personne_physique"] = "Personne Physique";
	$fieldToolTipscontacts["French"]["personne_physique"] = "";
	$placeHolderscontacts["French"]["personne_physique"] = "";
	$fieldLabelscontacts["French"]["nom"] = "Nom";
	$fieldToolTipscontacts["French"]["nom"] = "";
	$placeHolderscontacts["French"]["nom"] = "";
	$fieldLabelscontacts["French"]["adresse"] = "Adresse";
	$fieldToolTipscontacts["French"]["adresse"] = "";
	$placeHolderscontacts["French"]["adresse"] = "";
	$fieldLabelscontacts["French"]["tel"] = "Tel";
	$fieldToolTipscontacts["French"]["tel"] = "";
	$placeHolderscontacts["French"]["tel"] = "";
	$fieldLabelscontacts["French"]["email"] = "Email";
	$fieldToolTipscontacts["French"]["email"] = "";
	$placeHolderscontacts["French"]["email"] = "";
	$fieldLabelscontacts["French"]["fax"] = "Fax";
	$fieldToolTipscontacts["French"]["fax"] = "";
	$placeHolderscontacts["French"]["fax"] = "";
	$fieldLabelscontacts["French"]["date_creation"] = "Date Creation";
	$fieldToolTipscontacts["French"]["date_creation"] = "";
	$placeHolderscontacts["French"]["date_creation"] = "";
	$fieldLabelscontacts["French"]["date_modif"] = "Date Modif";
	$fieldToolTipscontacts["French"]["date_modif"] = "";
	$placeHolderscontacts["French"]["date_modif"] = "";
	$fieldLabelscontacts["French"]["id_fsi"] = "Id Fsi";
	$fieldToolTipscontacts["French"]["id_fsi"] = "";
	$placeHolderscontacts["French"]["id_fsi"] = "";
	$fieldLabelscontacts["French"]["adresse2"] = "Adresse2";
	$fieldToolTipscontacts["French"]["adresse2"] = "";
	$placeHolderscontacts["French"]["adresse2"] = "";
	$fieldLabelscontacts["French"]["state_prov"] = "State Prov";
	$fieldToolTipscontacts["French"]["state_prov"] = "";
	$placeHolderscontacts["French"]["state_prov"] = "";
	$fieldLabelscontacts["French"]["zip_code"] = "Zip Code";
	$fieldToolTipscontacts["French"]["zip_code"] = "";
	$placeHolderscontacts["French"]["zip_code"] = "";
	$fieldLabelscontacts["French"]["city"] = "City";
	$fieldToolTipscontacts["French"]["city"] = "";
	$placeHolderscontacts["French"]["city"] = "";
	$fieldLabelscontacts["French"]["country"] = "Country";
	$fieldToolTipscontacts["French"]["country"] = "";
	$placeHolderscontacts["French"]["country"] = "";
	$fieldLabelscontacts["French"]["id"] = "Id";
	$fieldToolTipscontacts["French"]["id"] = "";
	$placeHolderscontacts["French"]["id"] = "";
	$pageTitlescontacts["French"]["edit"] = "Edit Contacts";
	$pageTitlescontacts["French"]["view"] = "Contacts";
	if (count($fieldToolTipscontacts["French"]))
		$tdatacontacts[".isUseToolTips"] = true;
}


	$tdatacontacts[".NCSearch"] = true;



$tdatacontacts[".shortTableName"] = "contacts";
$tdatacontacts[".nSecOptions"] = 1;

$tdatacontacts[".mainTableOwnerID"] = "id_fsi";
$tdatacontacts[".entityType"] = 0;
$tdatacontacts[".connId"] = "nicadmin_at_localhost";


$tdatacontacts[".strOriginalTableName"] = "contacts";

	



$tdatacontacts[".showAddInPopup"] = false;

$tdatacontacts[".showEditInPopup"] = false;

$tdatacontacts[".showViewInPopup"] = false;

$tdatacontacts[".listAjax"] = false;
//	temporary
//$tdatacontacts[".listAjax"] = false;

	$tdatacontacts[".audit"] = false;

	$tdatacontacts[".locking"] = false;


$pages = $tdatacontacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontacts[".edit"] = true;
	$tdatacontacts[".afterEditAction"] = 1;
	$tdatacontacts[".closePopupAfterEdit"] = 1;
	$tdatacontacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontacts[".add"] = true;
$tdatacontacts[".afterAddAction"] = 1;
$tdatacontacts[".closePopupAfterAdd"] = 1;
$tdatacontacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontacts[".list"] = true;
}



$tdatacontacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontacts[".printFriendly"] = true;
}



$tdatacontacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontacts[".isUseAjaxSuggest"] = true;





$tdatacontacts[".ajaxCodeSnippetAdded"] = false;

$tdatacontacts[".buttonsAdded"] = false;

$tdatacontacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontacts[".isUseTimeForSearch"] = false;


$tdatacontacts[".badgeColor"] = "9acd32";


$tdatacontacts[".allSearchFields"] = array();
$tdatacontacts[".filterFields"] = array();
$tdatacontacts[".requiredSearchFields"] = array();

$tdatacontacts[".googleLikeFields"] = array();
$tdatacontacts[".googleLikeFields"][] = "nom";
$tdatacontacts[".googleLikeFields"][] = "Prenom";
$tdatacontacts[".googleLikeFields"][] = "personne_physique";
$tdatacontacts[".googleLikeFields"][] = "id";
$tdatacontacts[".googleLikeFields"][] = "adresse";
$tdatacontacts[".googleLikeFields"][] = "tel";
$tdatacontacts[".googleLikeFields"][] = "email";
$tdatacontacts[".googleLikeFields"][] = "fax";
$tdatacontacts[".googleLikeFields"][] = "date_creation";
$tdatacontacts[".googleLikeFields"][] = "date_modif";
$tdatacontacts[".googleLikeFields"][] = "id_fsi";
$tdatacontacts[".googleLikeFields"][] = "adresse2";
$tdatacontacts[".googleLikeFields"][] = "state_prov";
$tdatacontacts[".googleLikeFields"][] = "zip_code";
$tdatacontacts[".googleLikeFields"][] = "city";
$tdatacontacts[".googleLikeFields"][] = "country";



$tdatacontacts[".tableType"] = "list";

$tdatacontacts[".printerPageOrientation"] = 0;
$tdatacontacts[".nPrinterPageScale"] = 100;

$tdatacontacts[".nPrinterSplitRecords"] = 40;

$tdatacontacts[".geocodingEnabled"] = false;










$tdatacontacts[".pageSize"] = 20;

$tdatacontacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontacts[".strOrderBy"] = $tstrOrderBy;

$tdatacontacts[".orderindexes"] = array();


$tdatacontacts[".sqlHead"] = "SELECT nom,  Prenom,  personne_physique,  id,  adresse,  tel,  email,  fax,  date_creation,  date_modif,  id_fsi,  adresse2,  state_prov,  zip_code,  city,  country";
$tdatacontacts[".sqlFrom"] = "FROM contacts";
$tdatacontacts[".sqlWhereExpr"] = "";
$tdatacontacts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontacts[".arrGroupsPerPage"] = $arrGPP;

$tdatacontacts[".highlightSearchResults"] = true;

$tableKeyscontacts = array();
$tableKeyscontacts[] = "Prenom";
$tableKeyscontacts[] = "personne_physique";
$tableKeyscontacts[] = "nom";
$tableKeyscontacts[] = "adresse";
$tableKeyscontacts[] = "tel";
$tableKeyscontacts[] = "email";
$tableKeyscontacts[] = "fax";
$tableKeyscontacts[] = "date_creation";
$tableKeyscontacts[] = "date_modif";
$tableKeyscontacts[] = "adresse2";
$tableKeyscontacts[] = "state_prov";
$tableKeyscontacts[] = "zip_code";
$tableKeyscontacts[] = "city";
$tableKeyscontacts[] = "country";
$tdatacontacts[".Keys"] = $tableKeyscontacts;


$tdatacontacts[".hideMobileList"] = array();




//	nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nom";
	$fdata["GoodName"] = "nom";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","nom");
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatacontacts["nom"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "nom";
//	Prenom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Prenom";
	$fdata["GoodName"] = "Prenom";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","Prenom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Prenom";

		$fdata["sourceSingle"] = "Prenom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prenom";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["Prenom"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "Prenom";
//	personne_physique
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "personne_physique";
	$fdata["GoodName"] = "personne_physique";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","personne_physique");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "personne_physique";

		$fdata["sourceSingle"] = "personne_physique";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personne_physique";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
		$edata["autoUpdatable"] = true;

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


	$tdatacontacts["personne_physique"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "personne_physique";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","id");
	$fdata["FieldType"] = 3;


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


	$tdatacontacts["id"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "id";
//	adresse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "adresse";
	$fdata["GoodName"] = "adresse";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","adresse");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "adresse";

		$fdata["sourceSingle"] = "adresse";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adresse";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatacontacts["adresse"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "adresse";
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","tel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tel";

		$fdata["sourceSingle"] = "tel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
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


	$tdatacontacts["tel"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "tel";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["email"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "email";
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","fax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fax";

		$fdata["sourceSingle"] = "fax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
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


	$tdatacontacts["fax"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "fax";
//	date_creation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "date_creation";
	$fdata["GoodName"] = "date_creation";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","date_creation");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_creation";

		$fdata["sourceSingle"] = "date_creation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_creation";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatacontacts["date_creation"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "date_creation";
//	date_modif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "date_modif";
	$fdata["GoodName"] = "date_modif";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","date_modif");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "date_modif";

		$fdata["sourceSingle"] = "date_modif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_modif";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatacontacts["date_modif"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "date_modif";
//	id_fsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_fsi";
	$fdata["GoodName"] = "id_fsi";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","id_fsi");
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


	$tdatacontacts["id_fsi"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "id_fsi";
//	adresse2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "adresse2";
	$fdata["GoodName"] = "adresse2";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","adresse2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "adresse2";

		$fdata["sourceSingle"] = "adresse2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adresse2";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["adresse2"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "adresse2";
//	state_prov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "state_prov";
	$fdata["GoodName"] = "state_prov";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","state_prov");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "state_prov";

		$fdata["sourceSingle"] = "state_prov";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "state_prov";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["state_prov"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "state_prov";
//	zip_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "zip_code";
	$fdata["GoodName"] = "zip_code";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","zip_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "zip_code";

		$fdata["sourceSingle"] = "zip_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip_code";

	
	
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


	$tdatacontacts["zip_code"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "zip_code";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "city";

		$fdata["sourceSingle"] = "city";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontacts["city"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "city";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "contacts";
	$fdata["Label"] = GetFieldLabel("contacts","country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country";

		$fdata["sourceSingle"] = "country";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacontacts["country"] = $fdata;
		$tdatacontacts[".searchableFields"][] = "country";


$tables_data["contacts"]=&$tdatacontacts;
$field_labels["contacts"] = &$fieldLabelscontacts;
$fieldToolTips["contacts"] = &$fieldToolTipscontacts;
$placeHolders["contacts"] = &$placeHolderscontacts;
$page_titles["contacts"] = &$pageTitlescontacts;


changeTextControlsToDate( "contacts" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contacts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contacts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nom,  Prenom,  personne_physique,  id,  adresse,  tel,  email,  fax,  date_creation,  date_modif,  id_fsi,  adresse2,  state_prov,  zip_code,  city,  country";
$proto0["m_strFrom"] = "FROM contacts";
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
	"m_strName" => "nom",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto6["m_sql"] = "nom";
$proto6["m_srcTableName"] = "contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Prenom",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto8["m_sql"] = "Prenom";
$proto8["m_srcTableName"] = "contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "personne_physique",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto10["m_sql"] = "personne_physique";
$proto10["m_srcTableName"] = "contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto14["m_sql"] = "adresse";
$proto14["m_srcTableName"] = "contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto16["m_sql"] = "tel";
$proto16["m_srcTableName"] = "contacts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "contacts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto20["m_sql"] = "fax";
$proto20["m_srcTableName"] = "contacts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "date_creation",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto22["m_sql"] = "date_creation";
$proto22["m_srcTableName"] = "contacts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "date_modif",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto24["m_sql"] = "date_modif";
$proto24["m_srcTableName"] = "contacts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fsi",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto26["m_sql"] = "id_fsi";
$proto26["m_srcTableName"] = "contacts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "adresse2",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto28["m_sql"] = "adresse2";
$proto28["m_srcTableName"] = "contacts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "state_prov",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto30["m_sql"] = "state_prov";
$proto30["m_srcTableName"] = "contacts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_code",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto32["m_sql"] = "zip_code";
$proto32["m_srcTableName"] = "contacts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto34["m_sql"] = "city";
$proto34["m_srcTableName"] = "contacts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "contacts",
	"m_srcTableName" => "contacts"
));

$proto36["m_sql"] = "country";
$proto36["m_srcTableName"] = "contacts";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "contacts";
$proto39["m_srcTableName"] = "contacts";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "Prenom";
$proto39["m_columns"][] = "personne_physique";
$proto39["m_columns"][] = "nom";
$proto39["m_columns"][] = "adresse";
$proto39["m_columns"][] = "tel";
$proto39["m_columns"][] = "email";
$proto39["m_columns"][] = "fax";
$proto39["m_columns"][] = "date_creation";
$proto39["m_columns"][] = "date_modif";
$proto39["m_columns"][] = "etat";
$proto39["m_columns"][] = "id_fsi";
$proto39["m_columns"][] = "password";
$proto39["m_columns"][] = "adresse2";
$proto39["m_columns"][] = "state_prov";
$proto39["m_columns"][] = "zip_code";
$proto39["m_columns"][] = "city";
$proto39["m_columns"][] = "country";
$proto39["m_columns"][] = "authtype";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "contacts";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "contacts";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contacts = createSqlQuery_contacts();


	
		;

																

$tdatacontacts[".sqlquery"] = $queryData_contacts;



$tdatacontacts[".hasEvents"] = false;

?>