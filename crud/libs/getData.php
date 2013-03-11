<?php

	include_once( 'core/class.ManageDatabase.php' );
	$init = new ManageDatabase;
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$table_fields = $init->listFields($session_table_name);
		$data = $init->getData($session_table_name,$id);
	}
	else
	{
		$data = $init->getData($session_table_name);
		if($data !== 0){
			foreach($data[0] as $key => $value){
				$fields_name[] = $key;
			}
		}
	}
?>