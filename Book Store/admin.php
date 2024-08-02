<?php
include'DBconn.php';
session_start();



?>

<html lang="en">
<head>
 
  <title>Admin</title>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="Style.css">
  
</head>
<body>
<div class="title">
<h1 >Welcome to Thandi's Second Hand Book Store</h1>
</div>

<div id="form-container">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	   <?php if(isset($_GET['error'])){?>
	   <p class="error"><?php echo $_GET['error'];}?></p>
	 <h3>Admin Login now</h3>
	     <label for="username">Username:</label><br>
		 <input type="username" name="username" id="username"  class="box"><br><br>
		 <label for="id">ID:</label><br>
		 <input type="text" name="id" id="id"   class="box"><br><br>
		   <label for="password">Password:</label><br>
		 <input type="password" name="password" id="password"  class="box">	<br><br>
		  <input type="submit" name="submit" value="login now" class="btn">
		 <a href ="index.php" class="admin_btn"> User</a>
		 
		 
	</form>
</div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {

	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	 $username =validate( $_POST['username']);
   $password = validate($_POST['password']);
   

  $sql =  "SELECT * FROM `admin` WHERE name = '$username'";

   $result=mysqli_query($conn,$sql) or die('query failed');
  
   if(!empty($username) && !empty($password)){
   
      $row = mysqli_fetch_assoc($result);

      if($row['name']===$username && password_verify($password,$row['password'])){
		  echo "Successfully logged in.";
		  $_SESSION['name']=$row['name'];
		   $_SESSION['ID']=$row['ID'];
		   echo $_SESSION['name'];
		   echo $_SESSION['ID'];
		   header("Location: AdminPage.php");
		
	  }else {
		  echo "Incorrect username or password";
		 
		  }

      }

   }
   