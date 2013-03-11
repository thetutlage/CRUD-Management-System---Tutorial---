<?php include_once( 'libs/listTables.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>	
	<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
			<a class="brand" href="index.php">
				Database Manager
			</a>
		</div>
	  </div>
	</div><!-- end navbar -->
 <div class="container">
	<div class="table_switcher">
		<form class="well form-inline" method="post" action="switch_tables.php?referrer=<?php echo $_SERVER['REQUEST_URI']; ?>">
			<label for="Table Name">Table Name</label>
			<select name="table_name">
				<?php
					echo '<option value="'.$session_table_name.'" selected="selected">'.$session_table_name.'</option>';
					foreach($tables_left as $key => $value){
					echo '<option value="'.$value.'">'.$value.'</option>';
					}
				?>
			</select>
			<input type="submit" name="switch_table" value="Switch Table" class="btn btn-primary"/>
		</form>
	</div><!-- end table_switcher -->
	
	<?php
		if(!isset($_SESSION['SESSION_TABLE_NAME']))
		{
			 echo '<div class="alert alert-error"><p>Select a table to get started </p></div>';
			die;
		}
	?>
	
