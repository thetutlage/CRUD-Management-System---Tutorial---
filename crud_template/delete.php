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
	<h2 class="left"> Delete From Some Table </h2>
	<span class="right"><a href="index.php" class="btn btn-success">Go Back</a></span>
	<div class="clear"></div>
	
	<div class="alert alert-info">
		<h3> Are you sure you want to delete some data?</h3>
		<a href="#" class="btn btn-danger">Yes Delete</a>
		<a href="index.php" class="btn"> Cancel </a>
	</div><!-- end alert -->
 </div><!-- end container -->
 </body>
</html>