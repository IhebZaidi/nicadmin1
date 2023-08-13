<?php
$dalTablecontacts = array();
$dalTablecontacts["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecontacts["Prenom"] = array("type"=>200,"varname"=>"Prenom", "name" => "Prenom", "autoInc" => "0");
$dalTablecontacts["personne_physique"] = array("type"=>16,"varname"=>"personne_physique", "name" => "personne_physique", "autoInc" => "0");
$dalTablecontacts["nom"] = array("type"=>200,"varname"=>"nom", "name" => "nom", "autoInc" => "0");
$dalTablecontacts["adresse"] = array("type"=>200,"varname"=>"adresse", "name" => "adresse", "autoInc" => "0");
$dalTablecontacts["tel"] = array("type"=>200,"varname"=>"tel", "name" => "tel", "autoInc" => "0");
$dalTablecontacts["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablecontacts["fax"] = array("type"=>200,"varname"=>"fax", "name" => "fax", "autoInc" => "0");
$dalTablecontacts["date_creation"] = array("type"=>135,"varname"=>"date_creation", "name" => "date_creation", "autoInc" => "0");
$dalTablecontacts["date_modif"] = array("type"=>135,"varname"=>"date_modif", "name" => "date_modif", "autoInc" => "0");
$dalTablecontacts["etat"] = array("type"=>16,"varname"=>"etat", "name" => "etat", "autoInc" => "0");
$dalTablecontacts["id_fsi"] = array("type"=>3,"varname"=>"id_fsi", "name" => "id_fsi", "autoInc" => "0");
$dalTablecontacts["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablecontacts["adresse2"] = array("type"=>200,"varname"=>"adresse2", "name" => "adresse2", "autoInc" => "0");
$dalTablecontacts["state_prov"] = array("type"=>200,"varname"=>"state_prov", "name" => "state_prov", "autoInc" => "0");
$dalTablecontacts["zip_code"] = array("type"=>200,"varname"=>"zip_code", "name" => "zip_code", "autoInc" => "0");
$dalTablecontacts["city"] = array("type"=>200,"varname"=>"city", "name" => "city", "autoInc" => "0");
$dalTablecontacts["country"] = array("type"=>200,"varname"=>"country", "name" => "country", "autoInc" => "0");
$dalTablecontacts["authtype"] = array("type"=>129,"varname"=>"authtype", "name" => "authtype", "autoInc" => "0");
$dalTablecontacts["id"]["key"]=true;

$dal_info["nicadmin_at_localhost__contacts"] = &$dalTablecontacts;
?>