<?php

	if(isset($_POST['insert_values']))
	{
		$param = $_POST;
		include_once( 'core/class.ManageDatabase.php' );
		$init = new ManageDatabase;
		
		foreach($param as $key => $value){
			if($key !== 'insert_values')
			{
				$fields_name[] = $key;
				$field_value[] = $value;
			}
		}
		$field_count = count($fields_name);
		$fields_name = implode(',',$fields_name);
		for($x=1;$x<=$field_count; $x++)
		{
			$total_counts[] = '?';
		}
		$bind_params = implode(',',$total_counts);
		$insert = $init->insertData($session_table_name,$fields_name,$bind_params,$field_value);
		
		
		if($insert == 1)
		{
			$success = 'New value added';
		}
		else
		{
			$error = 'There was a slight problem';
		}
	}

?>