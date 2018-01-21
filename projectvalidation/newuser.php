<?php
if(isset($_POST['z'])&&!empty($_POST['z'])){
	header('Location: register.php');
}?>
<form action="register.php" method="POST">
<input class="btn btn-primary" type="submit" value="NEW USER" name="z">
</form>