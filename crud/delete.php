<?php include_once( 'views/header.php' );
	include_once( 'libs/deleteData.php' );
?>
	<?php if(isset($success)) 
		{
		 echo '<div class="alert alert-success"><p>'.$success.'</p></div>';} 
	?>

	<?php if(isset($error)) 
		{
		 echo '<div class="alert alert-error"><p>'.$error.'</p></div>';} 
	?>

	
	<h2 class="left"> Delete From Some Table </h2>
	<span class="right"><a href="index.php" class="btn btn-success">Go Back</a></span>
	<div class="clear"></div>
	
	<div class="alert alert-info">
		<h3> Are you sure you want to delete data for id <?php echo $_GET['id']; ?>?</h3>
		<a href="delete.php?id=<?php echo $_GET['id']; ?>&&delete=true" class="btn btn-danger">Yes Delete</a>
		<a href="index.php" class="btn"> Cancel </a>
	</div><!-- end alert -->
	
 </div><!-- end container -->
 </body>
</html>