<!doctype html>
<html>
<style>
#innerbox,#innerbox2{
	display: none;
	position: absolute;
    width: 100%;
	height: 100%;
	top:0;
	left:0;
    padding:1.5rem;
	/* background-color: rgba(0,0,0,0.3); Black w/ opacity */
	-webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
#SearchBox p,#SearchBox2 p{
	user-select: none;
}

#innerbox2 .btn-success{
	background: #5d50c6;
	border-color: #3e3394;
}
#innerbox2 .btn-success:hover{
	border-color: #292073;

}
#SearchBox,#SearchBox2{
	cursor : pointer;
}

#searchSchbtn{
	background:#8cc152;
}




/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0;background-color: rgba(0,0,0,0.5);} 
  to {top:0; opacity:1;background-color: rgba(0,0,0,0)}
}

@keyframes animatetop {
	from {top:-300px; opacity:0;background-color: rgba(0,0,0,0.5);} 
  to {top:0; opacity:1;background-color: rgba(0,0,0,0)}
}






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
// modal.style.display = "flex";
// Get the button that opens the modal
var btn = document.getElementById("SearchBox");
var btn2 = document.getElementById("SearchBox2");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "flex";
}
btn2.onclick = function() {
  modal2.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
	// span.onclick = function() {
	// 	modal.style.display = "none";
	// }
	
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