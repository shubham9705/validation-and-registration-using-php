<?php
require 'count.php';
include 'design.php';
if(isset($_POST['name1'])&&isset($_POST['name2'])&&isset($_POST['name3'])&&isset($_POST['name4'])&&isset($_POST['name5'])&&isset($_POST['name6'])){
	$name1=$_POST['name1'];
	$name2=$_POST['name2'];
	$name3=$_POST['name3'];
	$name4=$_POST['name4'];
    $name5=$_POST['name5'];
    $name6=$_POST['name6'];
  if(!empty($name1)&&!empty($name2)&&!empty($name3)&&!empty($name4)&&!empty($name5)&&!empty($name6)){
	if((strlen($name1)<=30)&&(strlen($name2)<=20)&&(strlen($name3)<=20)&&(strlen($name4)<=20)&&(strlen($name5)<=20)){
	 $query="SELECT `username` FROM `people` WHERE `username`='$name1'";
	 $run=mysql_query($query);
	 $row=mysql_num_rows($run);
	 if($row==0){
             if($name2==$name3){
             	$pass=md5($name3);
                     $query1="INSERT INTO `people` VALUES('','".mysql_real_escape_string($name1)."','".mysql_real_escape_string($pass)."','".mysql_real_escape_string($name4)."','".mysql_real_escape_string($name5)."')";
                     if($run2=mysql_query($query1)){
                     include 'relogin.php';
                     header('Location: relogin.php');
                       }else {
                       	echo 'crash';
                       }
             }else {
             	echo '<div class="alert alert-warning" role="alert">
  Password Did Not Match
</div>';
             }
	 }else {
	 	echo '<div class="alert alert-warning" role="alert">
  Username Exist Try Another Username
</div>'; 
	 }
	} else {
		echo mysql_error();
	}
}else {
	echo '<div class="alert alert-warning" role="alert">
Desired Field Not Be Empty
</div>';
	echo mysql_error();
}
}else {
	echo mysql_error();
}
?>
<form action="register.php" method="POST">
USERNAME:
<input type='text' name='name1' maxlength="30" value='<?php if(isset($name1)){ echo $name1 ;}?>'><br>
PASSWORD:
<input type='password' name='name2' maxlength="20" ><br>
CONFIRM PASSWORD:
<input type='password' name='name3' maxlength="20"><br>
FIRSTNAME:
<input type='text' name='name4' maxlength="20" value='<?php if(isset($name4)){ echo $name4 ;}?>'><br>
LASTNAME:
<input type='text' name='name5' maxlength="20" value='<?php if(isset($name5)){ echo $name5 ;}?>'>
<br>
<input class='btn btn-primary' type='submit' name='name6' value='SIGNUP'><?php include 'home.php'; ?>
</form>
 