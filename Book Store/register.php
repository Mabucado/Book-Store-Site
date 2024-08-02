

<?php

include'DBconn.php';
// Save data to the database


// Retrieve data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
		"ID: " . $row["ID"] . "<br>";
       "Name: " . $row["name"] . "<br>";
        "Email: " . $row["email"] . "<br>";
		 "Gender: " . $row["gender"] . "<br>";
		"Number: " . $row["number"] . "<br>";
	   "Password: " . $row["password"] . "<br><br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>

<html>
<head>
<title>Register</title>
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
    <form method="post" action="AdminPage.php">
	<h3>Register now</h3>
	    <label for="id">ID:</label><br>
        <input type="text" name="id" id="id" required><br><br>

	
        <label for="name">Username:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>
		
		    <label for="gender">Gender:</label><br>
        <input type="text" name="gender" id="gender" required><br><br>

         <label for="number">Number:</label><br>
        <input type="number" name="number" id="number" required><br><br>
		
		<label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>


        <input type="submit" name="submit" value="Save"><input type="reset" value="Clear">
		 <p>Alredy have an account? <a href ="index.php">Login</p>
</div>

</body>
</form>

</html>