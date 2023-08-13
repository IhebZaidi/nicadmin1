<?php
$dalTableextensions = array();
$dalTableextensions["id"] = array("type"=>16,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableextensions["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTableextensions["commentaires"] = array("type"=>201,"varname"=>"commentaires", "name" => "commentaires", "autoInc" => "0");
$dalTableextensions["nom_script"] = array("type"=>200,"varname"=>"nom_script", "name" => "nom_script", "autoInc" => "0");
$dalTableextensions["upd"] = array("type"=>3,"varname"=>"upd", "name" => "upd", "autoInc" => "0");
$dalTableextensions["id"]["key"]=true;

$dal_info["nicadmin_at_localhost__extensions"] = &$dalTableextensions;
?>