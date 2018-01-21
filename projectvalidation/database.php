<?php
require 'count.php';
require 'session.php';
error_reporting(0);
if(isset($_SESSION['username'])&&!empty($_SESSION['username'])){
    echo '<div class="alert alert-warning" role="alert">
  you are logged in
</div>';
    include 'logout.php';
    include 'design.php' ;
}else{
  include 'loginform.php';
  include 'design.php';

}
?>
   