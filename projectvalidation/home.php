<?php
if(isset($_POST['y'])&&!empty($_POST['y'])){
	header('Location: database.php');
}?>
<form action="database.php" method="POST">
<input class='btn btn-primary' type='submit' name='y' value='HOME'>
</form>