<?php
	include_once( 'core/class.ManageDatabase.php' );
	include_once( 'session.php' );
	$tables_init = new ManageDatabase;
	
	$listed_tables = $tables_init->listTables();
	
	foreach($listed_tables as $key => $value){
		$given_tables[] = $value['Tables_in_'.DB_NAME];
	}
	
	$selected_table = array($session_table_name);
	$tables_left = array_diff($given_tables,$selected_table);
?>