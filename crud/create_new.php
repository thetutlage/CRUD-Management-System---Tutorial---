<?php include_once( 'views/header.php' );
	include_once( 'libs/listFields.php' );
	include_once( 'libs/insertData.php' );
?>
	<?php if(isset($success)) 
		{
		 echo '<div class="alert alert-success"><p>'.$success.'</p></div>';} 
	?>

	<?php if(isset($error)) 
		{
		 echo '<div class="alert alert-error"><p>'.$error.'</p></div>';} 
	?>

	<h2 class="left"> Insert Into Some Table </h2>
	<span class="right"><a href="index.php" class="btn btn-success">Go Back</a></span>
	<div class="clear"></div>

	<form class="well" method="post" action="create_new.php">
		<?php foreach($table_fields as $key => $value){
				$field_name = $value['Field'];				
				if($field_name != 'id')
				{
					echo '<div class="form_elements">
						<label for="'.$field_name.'">'.$field_name.'</label>';
					if($value['Type'] == 'text' || $value['Type'] == 'longtext')
					{
						echo '<textarea name="'.$field_name.'"></textarea>
						<p class="help-block">'.$value['Type'].'</p>
						';
					}
					else
					{
						echo '<input type="text" name="'.$field_name.'" value="" />
							<p class="help-block">'.$value['Type'].'</p>';
					}
					echo '</div>';
				}
				}
		?>
	
		<div class="form_elements">
			<input type="submit" name="insert_values" value="Insert Value" class="btn btn-primary"/>
		</div>
	</form>
 </div><!-- end container -->
 </body>
</html>