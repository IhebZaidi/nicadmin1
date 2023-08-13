<?php
$dalTablehosts = array();
$dalTablehosts["host_id"] = array("type"=>20,"varname"=>"host_id", "name" => "host_id", "autoInc" => "1");
$dalTablehosts["hostname"] = array("type"=>200,"varname"=>"hostname", "name" => "hostname", "autoInc" => "0");
$dalTablehosts["comments"] = array("type"=>200,"varname"=>"comments", "name" => "comments", "autoInc" => "0");
$dalTablehosts["created"] = array("type"=>135,"varname"=>"created", "name" => "created", "autoInc" => "0");
$dalTablehosts["host_id"]["key"]=true;

$dal_info["nicadmin_at_localhost__hosts"] = &$dalTablehosts;
?>