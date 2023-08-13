<?php
$dalTableip = array();
$dalTableip["id_ip"] = array("type"=>3,"varname"=>"id_ip", "name" => "id_ip", "autoInc" => "1");
$dalTableip["id_domain"] = array("type"=>3,"varname"=>"id_domain", "name" => "id_domain", "autoInc" => "0");
$dalTableip["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTableip["date_reception"] = array("type"=>7,"varname"=>"date_reception", "name" => "date_reception", "autoInc" => "0");
$dalTableip["date_modification"] = array("type"=>7,"varname"=>"date_modification", "name" => "date_modification", "autoInc" => "0");
$dalTableip["commentaire"] = array("type"=>201,"varname"=>"commentaire", "name" => "commentaire", "autoInc" => "0");
$dalTableip["id_ip"]["key"]=true;

$dal_info["nicadmin_at_localhost__ip"] = &$dalTableip;
?>