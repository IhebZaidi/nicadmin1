<?php
$dalTablenameservers = array();
$dalTablenameservers["domain_id"] = array("type"=>20,"varname"=>"domain_id", "name" => "domain_id", "autoInc" => "0");
$dalTablenameservers["ttl"] = array("type"=>200,"varname"=>"ttl", "name" => "ttl", "autoInc" => "0");
$dalTablenameservers["nameserver"] = array("type"=>20,"varname"=>"nameserver", "name" => "nameserver", "autoInc" => "0");
$dalTablenameservers["domain_id"]["key"]=true;
$dalTablenameservers["nameserver"]["key"]=true;

$dal_info["nicadmin_at_localhost__nameservers"] = &$dalTablenameservers;
?>