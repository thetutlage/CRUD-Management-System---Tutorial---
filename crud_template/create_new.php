<?php include_once( 'views/header.php' );?>
 <div class="container">
	<div class="table_switcher">
		<form class="well form-inline">
			<label for="Table Name">Table Name</label>
			<select name="table_name">
				<option value="">Select</option>
				<option value="">Some Value</option>
			</select>
			<input type="submit" name="switch_table" value="Switch Table" class="btn btn-primary"/>
		</form>
	</div><!-- end table_switcher -->
	<h2 class="left"> Insert Into Some Table </h2>
	<span class="right"><a href="index.php" class="btn btn-success">Go Back</a></span>
	<div class="clear"></div>

	<form class="well">
		<div class="form_elements">
			<label for="Label">Label</label>
			<input type="text" name="" />
		</div>

		<div class="form_elements">
			<label for="Label">Text Area</label>
			<input type="text" name="" />
		</div>

		<div class="form_elements">
			<input type="submit" name="insert_values" value="Insert Value" class="btn btn-primary"/>
		</div>
	</form>
 </div><!-- end container -->
 </body>
</html>