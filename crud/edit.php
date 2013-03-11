<?php include_once( 'views/header.php' );
	include_once( 'libs/getData.php' );
	include_once( 'libs/editData.php' );
?>
	<h2 class="left"> Edit Some Table </h2>
	<span class="right"><a href="index.php" class="btn btn-success">Go Back</a>
		<a href="delete.php" class="btn btn-danger"> Delete this item</a>
	</span>
	<div class="clear"></div>

	<form class="well" action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">	
		<?php foreach($table_fields as $key => $value){
				$field_name = $value['Field'];
				
				if($data !== 0){ foreach($data as $someData) { 
				
				if($field_name != 'id')
				{
					echo '<div class="form_elements">
											<label for="'.$field_name.'">'.$field_name.'</label>';
					if($value['Type'] == 'text' || $value['Type'] == 'longtext')
					{
						echo '<textarea name="'.$field_name.'">'.$someData[$field_name].'</textarea>
						<p class="help-block">'.$value['Type'].'</p>
						';
					}
					else
					{
						echo '<input type="text" name="'.$field_name.'" value="'.$someData[$field_name].'" />
							<p class="help-block">'.$value['Type'].'</p>';
					}
					echo '</div>';
				}}
				}
		}
		?>
	
		<div class="form_elements">
			<input type="submit" name="edit_values" value="Edit Value" class="btn btn-primary"/>
		</div>


	</form>
 </div><!-- end container -->
 </body>
</html>