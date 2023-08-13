<?php
$dalTabletermes = array();
$dalTabletermes["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletermes["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTabletermes["prohibited"] = array("type"=>16,"varname"=>"prohibited", "name" => "prohibited", "autoInc" => "0");
$dalTabletermes["reason"] = array("type"=>201,"varname"=>"reason", "name" => "reason", "autoInc" => "0");
$dalTabletermes["date_added"] = array("type"=>135,"varname"=>"date_added", "name" => "date_added", "autoInc" => "0");
$dalTabletermes["type"] = array("type"=>129,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTabletermes["id"]["key"]=true;

$dal_info["nicadmin_at_localhost__termes"] = &$dalTabletermes;
?>