<?php
if(isset($_POST['up'])&&!empty($_POST['up'])){
	header('Location: register.php');
}?>
<form action="register.php" method="POST">
<input class='btn btn-primary' type='submit' name='up' value='SIGNUP'>
 </form>