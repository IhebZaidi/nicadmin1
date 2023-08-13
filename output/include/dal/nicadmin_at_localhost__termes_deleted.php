<?php
$dalTabletermes_deleted = array();
$dalTabletermes_deleted["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletermes_deleted["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTabletermes_deleted["prohibited"] = array("type"=>16,"varname"=>"prohibited", "name" => "prohibited", "autoInc" => "0");
$dalTabletermes_deleted["reason"] = array("type"=>201,"varname"=>"reason", "name" => "reason", "autoInc" => "0");
$dalTabletermes_deleted["date_added"] = array("type"=>135,"varname"=>"date_added", "name" => "date_added", "autoInc" => "0");
$dalTabletermes_deleted["date_deleted"] = array("type"=>135,"varname"=>"date_deleted", "name" => "date_deleted", "autoInc" => "0");
$dalTabletermes_deleted["id"]["key"]=true;

$dal_info["nicadmin_at_localhost__termes_deleted"] = &$dalTabletermes_deleted;
?>