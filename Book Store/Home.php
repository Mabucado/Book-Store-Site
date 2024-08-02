<?php
session_start();
include'DBconn.php';
// Retrieve data from the database
$sql = "SELECT * FROM books" ;
$result = $conn->query($sql);
$books=array();
$count=0;
if ($result->num_rows > 0) {
	
    while ($row = $result->fetch_assoc()) {
		
		$books[$count]=$row['name'];
		$count++;
		
	}
}
if(isset($_POST['submit0'])){
	echo '<script>alert("English added to cart")</script>';
	
}
if(isset($_POST['submit1'])){
	echo '<script>alert("Afrikaans added to cart")</script>';
	
}
if(isset($_POST['submit2'])){
	echo '<script>alert("Agriculture added to cart")</script>';
	
}
if(isset($_POST['submit3'])){
	echo '<script>alert("Business added to cart")</script>';
	
}
if(isset($_POST['submit4'])){
	echo '<script>alert("Civil added to cart")</script>';
	
}
if(isset($_POST['submit5'])){
	echo '<script>alert("Happily Homemade added to cart")</script>';
	
}
if(isset($_POST['submit6'])){
	echo '<script>alert("From Cook To Cook added to cart")</script>';
	
}
if(isset($_POST['submit7'])){
	echo '<script>alert("The Cook  added to cart")</script>';
	
}
if(isset($_POST['submit8'])){
	echo '<script>alert("Airfryer Cook Book added to cart")</script>';
	
}
if(isset($_POST['submit9'])){
	echo '<script>alert("The Flexaterian added to cart")</script>';
	
}
if(isset($_POST['submit10'])){
	echo '<script>alert("Home Sweet Home added to cart")</script>';
	
}
if(isset($_POST['submit11'])){
	echo '<script>alert("Hello Little Egg added to cart")</script>';
	
}
if(isset($_POST['submit12'])){
	echo '<script>alert("Alice In Wonderland  added to cart")</script>';
	
}
if(isset($_POST['submit13'])){
	echo '<script>alert("Cinderella added to cart")</script>';
	
}
if(isset($_POST['submit11'])){
	echo '<script>alert("School added to cart")</script>';
	
}


?>
<html>
<head>
<title>Home</title>
 <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Style.css">
</head>
<body>
<?php include 'header.php'?>
<div class="Box-container">

<div id="english">

<img src="Images/english.jpg" width="150" height="200"><br>
<?php echo $books[0];?>
<form action="" method="POST">
Quantity:<input type="number" id="engQuant" name="engQuant">
<input type="submit" name="submit0" Value="Order">
</form>
</div>

<div id="afrikaans">
<img src="Images/afrikaans.jpg" width="150" height="200"><br>
<?php echo $books[1];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="afriQuant" name="afriQuant">
<input type="submit"  name="submit1" Value="Order">
</form>
</div>

<div id="agriculture">
<img src="Images/agriculture.jpeg" width="150" height="200"><br>
<?php echo $books[2];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="agriQuant" name="agriQuant">
<input type="submit"  name="submit2" Value="Order">
</form>
</div>

<div id="business">
<img src="Images/business.jpeg" width="150" height="200"><br>
<?php echo $books[3];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="busiQuant" name="busiQuant">
<input type="submit"  name="submit3" Value="Order">
</form>
</div>

<div id="civil">
<img src="Images/civil tech.jpg" width="150" height="200"><br>
<?php echo $books[4];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="civilQuant" name="civilQuant">
<input type="submit"  name="submit4" Value="Order">
</form>
</div>

<div id="happily">
<img src="Images/happily.jpeg" width="150" height="200"><br>
<?php echo $books[5];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="happQuant" name="happQuant">
<input type="submit"  name="submit5" Value="Order">
</form>
</div>

<div id="from_cook">
<img src="Images/from cook.jpg" width="150" height="200"><br>
<?php echo $books[6];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="fromQuant" name="fromQuant">
<input type="submit"  name="submit6" Value="Order">
</form>
</div>
<div id="the_cook">
<img src="Images/the cook.jpg" width="150" height="200"><br>
<?php echo $books[7];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="theQuant" name="theQuant">
<input type="submit"  name="submit7" Value="Order">
</form>
</div>

<div id="epic">
<img src="Images/epic.jpeg" width="150" height="200"><br>
<?php echo $books[8];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

Quantity:<input type="number" id="epicQuant" name="epicQuant">
<input type="submit"  name="submit8" Value="Order">
</form>
</div>

<div id="flexiterian">
<img src="Images/flexitarian.jpeg" width="150" height="200"><br>
<?php echo $books[9];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="flexQuant" name="flexQuant">
<input type="submit"  name="submit9" Value="Order">
</form>
</div>


<div id="hello">
<img src="Images/hello.jpg" width="150" height="200"><br>
<?php echo $books[11];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="helloQuant" name="helloQuant">
<input type="submit"  name="submit11" Value="Order">
</form>
</div>
<div id="home">
<img src="Images/home.jpg" width="150" height="200"><br>
<?php echo $books[10];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="homeQuant" name="homeQuant">
<input type="submit"  name="submit10" Value="Order">
</form>
</div>
<div id="cinderella">
<img src="Images/cinderella.jpg" width="150" height="200"><br>
<?php echo $books[13];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="cindQuant" name="cindQuant">
<input type="submit"  name="submit13" Value="Order">
</form>
</div>
<div id="alice">
<img src="Images/alice.jpg" width="150" height="200"><br>
<?php echo $books[12];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="aliceQuant" name="aliceQuant">
<input type="submit"  name="submit12" Value="Order">
</form>
</div>
<div id="school">
<img src="Images/school.jpg" width="150" height="200"><br>
<?php echo $books[14];?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Quantity:<input type="number" id="schoQuant" name="schoQuant">
<input type="submit"  name="submit14" Value="Order">
</form>

</div>
</div>
</body>
<script src="script.js"></script>
</html>
<?php //}
	?>