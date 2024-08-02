function changeImage(x,image){
	if(x==1){
		
		image.src="cart2";
	}
		if(x==2){
		
		image.src="cart";
	}
	
}

function changeImage(y,image2){
	if(y==3){
		
		image.src="wishlist-1";
	}
		if(y==4){
		
		image.src="wishlist2";
	}
	
}
function myFunction() {
  document.getElementById("dropdown_box").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropdown_btn')) {
    var dropdowns = document.getElementsByClassName("dropdown_box");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}