<?php
$dalTablehosts_ip = array();
$dalTablehosts_ip["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablehosts_ip["address"] = array("type"=>200,"varname"=>"address", "name" => "address", "autoInc" => "0");
$dalTablehosts_ip["host_id"] = array("type"=>20,"varname"=>"host_id", "name" => "host_id", "autoInc" => "0");
$dalTablehosts_ip["ip"] = array("type"=>129,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablehosts_ip["id"]["key"]=true;

$dal_info["nicadmin_at_localhost__hosts_ip"] = &$dalTablehosts_ip;
?>