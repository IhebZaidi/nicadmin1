<?php

	// create menu nodes arr
	$menuNodes = array();

	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Mon Profil";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "fsi";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-camera";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Mon Profil";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "Mes Extensions";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "fsi_extensions";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-earphone";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Mes Extensions";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "Serveurs DNS Par Défaut";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "fsi_ns";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Serveurs DNS Par Défaut";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "Mes Noms des Domaines";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "domains";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Mes Noms des Domaines";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Mes Contacts";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "contacts";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-camera";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Mes Contacts";



	$menuNodes[] = $menuNode;
	$menuNodesCache[ "main" ] = $menuNodes;
?>