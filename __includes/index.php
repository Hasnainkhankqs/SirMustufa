<!doctype html>
<html>
<style>






</style>
<body>

<?php
include('header.php');
	include('our_team.php');
		include('our_services.php');
			include('footer.php');
?>





<script>
//---------------------------------------Hasnain's working start
// Get the modal
var modal = document.getElementById("innerbox");
var modal2 = document.getElementById("innerbox2");
// Get the button that opens the modal
var btn = document.getElementById("SearchBox");
var btn2 = document.getElementById("SearchBox2");


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "flex";
}
btn2.onclick = function() {
  modal2.style.display = "flex";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }

}


//---------------------------------------Hasnain's working end
</script>
</body>
</html>