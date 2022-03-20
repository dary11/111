<?php
	$conn = new mysqli('www.onesystemas.com', 'teone102_userm', 'userm20', 'teone102_asistenciam');


	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>