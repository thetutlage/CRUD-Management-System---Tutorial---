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
	<h2 class="left"> Records From Some Table </h2>
	<span class="right"><a href="create_new.php" class="btn btn-success">Insert New Value</a></span>
	<div class="clear"></div>

	<div class="mainDiv">
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th> Some Value</th>
					<th> Some Data </th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>Some Data</td>
						<th> Some Data </th>
						<td><a href="edit.php"><i class="icon-edit"></i></a> <a href="delete.php"><i class="icon-trash"></i></a></td>
					</tr>
			</tbody>
		</table>
	</div><!-- end mainDiv -->
 </div><!-- end container -->
 </body>
</html>