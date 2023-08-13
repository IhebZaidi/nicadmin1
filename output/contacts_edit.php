<?php 

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once("include/contacts_variables.php");
require_once('include/xtempl.php');
require_once('classes/editpage.php');

add_nocache_headers();

if( Security::hasLogin() ) {
	if( !EditPage::processEditPageSecurity( $strTableName ) )
		return;
}

EditPage::handleBrokenRequest();

//	render all necessary layouts


// parse control parameters
$pageMode = EditPage::readEditModeFromRequest();

$xt = new Xtempl();	
	
$id = postvalue_number("id");
$id = intval($id) == 0 ? 1 : $id;


// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["Prenom"] = postvalue("editid1");
$keys["personne_physique"] = postvalue("editid2");
$keys["nom"] = postvalue("editid3");
$keys["adresse"] = postvalue("editid4");
$keys["tel"] = postvalue("editid5");
$keys["email"] = postvalue("editid6");
$keys["fax"] = postvalue("editid7");
$keys["date_creation"] = postvalue("editid8");
$keys["date_modif"] = postvalue("editid9");
$keys["adresse2"] = postvalue("editid10");
$keys["state_prov"] = postvalue("editid11");
$keys["zip_code"] = postvalue("editid12");
$keys["city"] = postvalue("editid13");
$keys["country"] = postvalue("editid14");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_EDIT;
$params["pageName"] = postvalue("page");
$params["tName"] = $strTableName;
$params["action"] = postvalue("a");
$params["selectedFields"] = postvalue("fields");
		
;
$params["captchaName"] = "captcha_1209xre";
$params["captchaValue"] = postvalue("value_captcha_1209xre_" . $id);
$params["selection"] = postvalue("selection");
$params["rowIds"] = my_json_decode( postvalue("rowIds") );

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();

//	locking parameters
$params["lockingAction"] = postvalue("action");
$params["lockingSid"] = postvalue("sid");
$params["lockingKeys"] = postvalue("keys");
$params["lockingStart"] = postvalue("startEdit");

if( $pageMode == EDIT_INLINE )
{
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
}	

if( $pageMode == EDIT_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	$params["dashPage"] = postvalue("dashPage");
	
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}	
}

if(( $pageMode == EDIT_POPUP || $pageMode == EDIT_INLINE ) && postvalue("dashTName"))
{
	$params["dashTName"] = postvalue("dashTName");
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashPage"] = postvalue("dashPage");
}

$params["forSpreadsheetGrid"] = postvalue("spreadsheetGrid");
$params["hostPageName"] = postvalue("hostPageName");

$pageObject = EditPage::EditPageFactory($params);

if( $pageObject->isLockingRequest() )
{
	$pageObject->doLockingAction();
	exit();
}

$pageObject->init();

$pageObject->process();
?>