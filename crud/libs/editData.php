<?php

	if(isset($_POST['edit_values']))
	{
		include_once( 'session.php' );
	
		$param = $_POST;
		include_once( 'class.ManageDatabase.php' );
		$init = new ManageDatabase;
		$id = $_GET['id'];
		$edit_values = $init->editData($session_table_name,$param,$id);
		header("location: edit.php?id=".$id."");
	}
?>