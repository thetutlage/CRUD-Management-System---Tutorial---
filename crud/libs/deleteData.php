<?php

	if(isset($_GET['delete']))
	{
		include_once( 'core/class.ManageDatabase.php' );
		$init = new ManageDatabase;
		$id = $_GET['id'];
		$delete = $init->deleteData($session_table_name,$id);
		
		if($delete == 1)
		{
			$success = 'Data deleted successfully';
		}
		else
		{
			$error  = 'There was a slight problem';
		}
	}
?>