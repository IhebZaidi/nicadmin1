<?php
$dalTabledomain_contacts = array();
$dalTabledomain_contacts["id_domain"] = array("type"=>3,"varname"=>"id_domain", "name" => "id_domain", "autoInc" => "0");
$dalTabledomain_contacts["id_contact"] = array("type"=>3,"varname"=>"id_contact", "name" => "id_contact", "autoInc" => "0");
$dalTabledomain_contacts["type_contact"] = array("type"=>129,"varname"=>"type_contact", "name" => "type_contact", "autoInc" => "0");
$dalTabledomain_contacts["id_domain"]["key"]=true;
$dalTabledomain_contacts["id_contact"]["key"]=true;
$dalTabledomain_contacts["type_contact"]["key"]=true;

$dal_info["nicadmin_at_localhost__domain_contacts"] = &$dalTabledomain_contacts;
?>