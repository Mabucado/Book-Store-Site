<?php 

?>
<html>
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
<?php echo $_SESSION['name']; ?>
<form  method="post" action="logout.php">
<input type="submit" name="submit" value=" Logout">
</form>
</div>

<div class="icons">

<a href="cart.php"><img src="Images/cart.jpg" width="45" height="45" onmouseover="changeImage(1,this)" onmouseout="changeImage(2,this)"><span class="cartCount">(00)</span></a>
<img src="Images/wishlist-1.png" width="45" height="45"  onmouseover="changeImage(3,this)" onmouseout="changeImage(4,this)"><span class="tooltip">wishlst</span>
<img src="Images/person.jpg" width="45" height="45" onclick="myFunction()" class="dropdown_btn">
</div>
</html>