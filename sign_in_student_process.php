<?php
	session_start();

	$studentID = $_POST["studentID"];
	$studentPassword = $_POST["studentPassword"];

	if (!empty($studentID) && !empty($studentPassword)) {
		include ("dbconnect.php");

		$sql = "SELECT * FROM STUDENT WHERE studentID = '" . $studentID . "' AND studentPassword = '" . $studentPassword . "'";
		$result = mysqli_query($connect, $sql);
		
		if ($row = mysqli_fetch_array($result)) {
			$studentID = $row["studentID"];
			
			$studentName = $row["studentName"];
			
			$_SESSION["student_id"] = $studentID;
			$_SESSION["student_name"] = $studentName;
			$_SESSION["access"] = "STUDENT";

			header("Location: home.php");

			mysqli_close($connect);
		} else {
			echo "<script> alert('Invalid Student ID and Password.'); window.location.href='sign_in_student.php'; </script>";
		}
	} else {
		echo "<script> alert('Please enter valid Student ID and Password.'); window.location.href='sign_in_student.php'; </script>";
	}
?>