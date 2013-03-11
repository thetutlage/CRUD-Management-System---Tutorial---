<?php
	include_once( 'core/class.ManageDatabase.php' );
	$init = new ManageDatabase;
	$table_fields = $init->listFields($session_table_name);
?>