<?php include_once( 'views/header.php' );
	include_once( 'libs/getData.php' );
?>
	<h2 class="left"> Records From Some Table </h2>
	<span class="right"><a href="create_new.php" class="btn btn-success">Insert New Value</a></span>
 	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<?php if($data !== 0) { foreach($fields_name as $f) { 
					echo '<th>'.$f.'</th>';
				}
				echo '<th>Actions</th>';
				} ?>
			</tr>
		</thead>
		<tbody>
				<?php 
					if($data !== 0) { foreach($data as $key => $value) 
					{
						echo '<tr>';
						foreach($fields_name as $f){
							
							echo '<td>'.$value[$f].'</td>
							';

						}
						echo '<td><a href="edit.php?id='.$value['id'].'"><i class="icon-edit"></i></a> <a href="delete.php?id='.$value['id'].'"><i class="icon-trash"></i></a></td>

						</tr>';
						
					}
					
					}
				?>
		</tbody>
	</table>
 </div><!-- end container -->
 </body>
</html>