<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["domain_contacts"] ) ) {
			$lookupTableLinks["domain_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["domain_contacts"]["domain_contacts.type_contact"] )) {
			$lookupTableLinks["domain_contacts"]["domain_contacts.type_contact"] = array();
		}
		$lookupTableLinks["domain_contacts"]["domain_contacts.type_contact"]["edit"] = array("table" => "domain_contacts", "field" => "type_contact", "page" => "edit");
		if( !isset( $lookupTableLinks["domains"] ) ) {
			$lookupTableLinks["domains"] = array();
		}
		if( !isset( $lookupTableLinks["domains"]["domain_contacts.id_domain"] )) {
			$lookupTableLinks["domains"]["domain_contacts.id_domain"] = array();
		}
		$lookupTableLinks["domains"]["domain_contacts.id_domain"]["edit"] = array("table" => "domain_contacts", "field" => "id_domain", "page" => "edit");
		if( !isset( $lookupTableLinks["contacts"] ) ) {
			$lookupTableLinks["contacts"] = array();
		}
		if( !isset( $lookupTableLinks["contacts"]["domain_contacts.id_contact"] )) {
			$lookupTableLinks["contacts"]["domain_contacts.id_contact"] = array();
		}
		$lookupTableLinks["contacts"]["domain_contacts.id_contact"]["edit"] = array("table" => "domain_contacts", "field" => "id_contact", "page" => "edit");
		if( !isset( $lookupTableLinks["extensions"] ) ) {
			$lookupTableLinks["extensions"] = array();
		}
		if( !isset( $lookupTableLinks["extensions"]["domains.ext"] )) {
			$lookupTableLinks["extensions"]["domains.ext"] = array();
		}
		$lookupTableLinks["extensions"]["domains.ext"]["edit"] = array("table" => "domains", "field" => "ext", "page" => "edit");
		if( !isset( $lookupTableLinks["fsi"] ) ) {
			$lookupTableLinks["fsi"] = array();
		}
		if( !isset( $lookupTableLinks["fsi"]["domains.fsi"] )) {
			$lookupTableLinks["fsi"]["domains.fsi"] = array();
		}
		$lookupTableLinks["fsi"]["domains.fsi"]["edit"] = array("table" => "domains", "field" => "fsi", "page" => "edit");
		if( !isset( $lookupTableLinks["extensions"] ) ) {
			$lookupTableLinks["extensions"] = array();
		}
		if( !isset( $lookupTableLinks["extensions"]["fsi_extensions.ext"] )) {
			$lookupTableLinks["extensions"]["fsi_extensions.ext"] = array();
		}
		$lookupTableLinks["extensions"]["fsi_extensions.ext"]["edit"] = array("table" => "fsi_extensions", "field" => "ext", "page" => "edit");
		if( !isset( $lookupTableLinks["fsi"] ) ) {
			$lookupTableLinks["fsi"] = array();
		}
		if( !isset( $lookupTableLinks["fsi"]["fsi_ns.id_fsi"] )) {
			$lookupTableLinks["fsi"]["fsi_ns.id_fsi"] = array();
		}
		$lookupTableLinks["fsi"]["fsi_ns.id_fsi"]["edit"] = array("table" => "fsi_ns", "field" => "id_fsi", "page" => "edit");
		if( !isset( $lookupTableLinks["hosts"] ) ) {
			$lookupTableLinks["hosts"] = array();
		}
		if( !isset( $lookupTableLinks["hosts"]["fsi_ns.nameserver"] )) {
			$lookupTableLinks["hosts"]["fsi_ns.nameserver"] = array();
		}
		$lookupTableLinks["hosts"]["fsi_ns.nameserver"]["edit"] = array("table" => "fsi_ns", "field" => "nameserver", "page" => "edit");
		if( !isset( $lookupTableLinks["hosts"] ) ) {
			$lookupTableLinks["hosts"] = array();
		}
		if( !isset( $lookupTableLinks["hosts"]["nameservers.nameserver"] )) {
			$lookupTableLinks["hosts"]["nameservers.nameserver"] = array();
		}
		$lookupTableLinks["hosts"]["nameservers.nameserver"]["edit"] = array("table" => "nameservers", "field" => "nameserver", "page" => "edit");
}

?>