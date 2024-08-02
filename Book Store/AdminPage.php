<?php
include 'DBconn.php';

if (isset($_POST['submit'])) {
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$id=validate($_POST['id']);
    $name = validate($_POST['name']);
	$email = validate($_POST['email']);
    $gender = validate($_POST['gender']);
	 $number = validate($_POST['number']);
	  $password = validate($_POST['password']);
	$hash=password_hash($password,PASSWORD_DEFAULT);
	if(isset($_POST['accept']))  {
    $sql = "INSERT INTO users (ID,Name, Email,Gender,Number,Password) VALUES ('$id','$name', '$email','$gender','$number','$hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
if (isset($_POST['save'])) {
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$Aid=validate($_POST['Aid']);
    $Aname = validate($_POST['Aname']);
	$Aemail = validate($_POST['Aemail']);
    $Agender = validate($_POST['Agender']);
	 $Anumber = validate($_POST['Anumber']);
	  $Apassword = validate($_POST['Apassword']);
	$hash=password_hash($password,PASSWORD_DEFAULT);
	if(isset($_POST['accept']))  {
    $sql = "INSERT INTO users (ID,Name, Email,Gender,Number,Password) VALUES ('$id','$name', '$email','$gender','$number','$hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
if (isset($_POST['dele'])) {
	$del=$_POST['del'];
	 $sql = "DELETE  users WHERE VALUES name=$del";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
}

?>
<html>
<head>
 
  <title>Admin</title>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="Style.css">
  


<div class="title">
<h1 >Welcome to Thandi's Second Hand Book Store</h1>
</div>
<div class="links">
<a href="About Us.html">About Us<a>
<a href="Books.html">Books<a>
<a href="Education.html">Education<a>
<a href="Fiction.html">Fiction<a>
<a href="Non-Fiction.html">Non-Fiction<a>
</div>
<div class="dropdown_box" id="dropdown_box">

<form  method="post" action="logout.php">
<input type="submit" name="submit" value=" Logout">
</form>
</div>

<div class="icons">

<a href="cart.php"><img src="Images/cart.jpg" width="45" height="45" onmouseover="changeImage(1,this)" onmouseout="changeImage(2,this)"><span class="cartCount">(00)</span></a>
<img src="Images/wishlist-1.png" width="45" height="45"  onmouseover="changeImage(3,this)" onmouseout="changeImage(4,this)"><span class="tooltip">wishlst</span>
<img src="Images/person.jpg" width="45" height="45" onclick="myFunction()" class="dropdown_btn">
</div>

</head>
<body>
<div class="reg-confirmation">
<p> Accept<?php echo $name ;?> into the system</p>
<form method="post" action="">
<input type="submit" name="accept" value="Accept" >
</form>
</div>
<div>
<div class="addition">
<form action="" method="post">
<p>Add User</p>
 <label for="id">ID:</label><br>
        <input type="text" name="Aid" id="Aid" required><br><br>

	
        <label for="name">Username:</label><br>
        <input type="text" name="Aname" id="Aname" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="Aemail" id="Aemail" required><br><br>
		
		    <label for="gender">Gender:</label><br>
        <input type="text" name="Agender" id="Agender" required><br><br>

         <label for="number">Number:</label><br>
        <input type="number" name="Anumber" id="Anumber" required><br><br>
		
		<label for="password">Password:</label><br>
        <input type="password" name="Apassword" id="Apassword" required><br><br>


        <input type="submit" name="save" value="Save"><input type="reset" value="Clear">
</form>
</div>
<div class="deletion">
<form>
	<label for="del">Enter record to delete:</label><br>
        <input type="text name="del" id="del" required><br><br>


        <input type="submit" name="dele" value="Submit"><input type="reset" value="Clear">
</form>
</div>
</body>
</html>