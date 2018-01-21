<?php
  require 'count.php';
  require 'session.php';
  include 'design.php';
  if(isset($_POST['username'])&&isset($_POST['password']))
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
  	if(!empty($username)&&!empty($password))
    {
       $query="SELECT `id` FROM `people` WHERE `username`='$username' AND `password`='$password'";
       if($run=mysql_query($query))
        {
          $num=mysql_num_rows($run);
          if($num==0)
           {
       	     echo '<div class="alert alert-warning" role="alert">
  Incorrect Username Or Password
</div>'.'<br>';
             include 'signup.php';
           }
          else
           {
             $_SESSION['username']='$username';
       	     header('Location: database.php');		
           }
        }
       else 
        {
   	      echo mysql_error();
        }
  	}
  	
  }
?>
<form action="database.php" method="POST">
USERNAME: <input type='text' name='username' placeholder='user id'><br>   
PASSWORD: <input type='password' name='password' id='inputPassword' placeholder='password'><br>
<button type="submit" class="btn btn-success">LOGIN</button><?php include 'newuser.php'; ?>
</form>