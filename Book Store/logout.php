<?php
session_start();
 if(isset($_POST["submit"])){
	echo "termination";
	session_destroy();
	header("Location:index.php");
	
}else "somthing went wrong";
 ?>
