<?php
	$conn=mysqli_connect("localhost","root","root", "alphaware") ;

	
	if(!$conn) {
		die("connection failed: ". mysqli_connect_error());
	}
?>
