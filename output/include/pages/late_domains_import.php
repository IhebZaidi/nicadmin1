<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'code',
'domain',
'ext',
'fsi',
'organisme',
'adresse',
'tel',
'fax',
'email',
'contact',
'activite',
'rubrique',
'date_recept',
'date_accept',
'date_activ',
'date_modif',
'date_annul',
'etat',
'modif',
'commentaire' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'code' => array( 'import_field1' ),
'domain' => array( 'import_field2' ),
'ext' => array( 'import_field3' ),
'fsi' => array( 'import_field4' ),
'organisme' => array( 'import_field5' ),
'adresse' => array( 'import_field6' ),
'tel' => array( 'import_field7' ),
'fax' => array( 'import_field8' ),
'email' => array( 'import_field9' ),
'contact' => array( 'import_field10' ),
'activite' => array( 'import_field11' ),
'rubrique' => array( 'import_field12' ),
'date_recept' => array( 'import_field13' ),
'date_accept' => array( 'import_field14' ),
'date_activ' => array( 'import_field15' ),
'date_modif' => array( 'import_field16' ),
'date_annul' => array( 'import_field17' ),
'etat' => array( 'import_field18' ),
'modif' => array( 'import_field19' ),
'commentaire' => array( 'import_field20' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'code',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'domain',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'ext',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'fsi',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'organisme',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'adresse',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'tel',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'fax',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'contact',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'activite',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'rubrique',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'date_recept',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'date_accept',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'date_activ',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'date_modif',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'date_annul',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'etat',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'modif',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'commentaire',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>