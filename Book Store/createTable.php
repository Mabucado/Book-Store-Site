<?php
include'DBconn.php';
$sql="DELETE FROM users";
if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$file =fopen("data.txt", "r");
$username=array();
	$ID=array();
	$password=array();

while(!feof($file)){
	$line=fgets($file);
	$arr=explode(' ',$line);
	
	@list($username,$id,$email,$gender,$number,$password)=$arr;
	$hash=password_hash($password,PASSWORD_DEFAULT);
	
$sql = "INSERT INTO users (name,ID, email,password,gender,number) VALUES ('$username','$id','$email','$hash','$gender','$number')";
if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>