<?php
	$connect = mysqli_connect("localhost", "root", "", "attendancedb")
	or die ("Error: Cannot connect to database " . mysqli_error($connect));
?>