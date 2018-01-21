<?php
if(isset($_POST['x'])&&!empty($_POST['x'])){
	$x=$_POST['x'];
	unset($_SESSION['username']);
	header('Location: database.php');
}
?>
<form action="<?php echo $script ?>" method="POST">
	<input class='btn btn-primary' type='submit' name='x' value='LOGOUT'>
</form>