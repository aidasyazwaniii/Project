<?php
	if($_SESSION["access"] == "ADMINISTRATOR") {
		echo "
			<!-- Home -->
    		<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link active' href='home.php'>Home</a>
			  	</li>
			</ul>

			<!-- Attendance -->
			<hr>
			<h2 class='display-9'>Attendance</h2>
			<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_attendance.php'>View Attendance</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='print_attendance.php'>View and Download Attendance</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_document_student.php'>View Document</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='check_attendance.php'>Percentage Attendance of Student</a>
			  	</li>
			</ul>

			<!-- Student -->
			<hr>
			<h2 class='display-9'>Student</h2>
			<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_student.php'>View Student</a>
			  	</li>
			</ul>

			<!-- Staff -->
			<hr>
			<h2 class='display-9'>Staff</h2>
			<ul class='nav flex-column'>
				<li class='nav-item'>
			    	<a class='nav-link' href='register_staff.php'>Register Staff</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_staff.php'>View Staff</a>
			  	</li>
			</ul>

			<!-- Profile -->
			<hr>
			<h2 class='display-9'>Profile</h2>
			<ul class='nav flex-column'>
				<li class='nav-item'>
			    	<a class='nav-link' href='view_my_profile_staff.php'>View My Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='update_my_profile_staff.php'>Update My Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='change_password_staff.php'>Change Password</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='sign_out_process.php'>Sign Out</a>
			  	</li>
			</ul>
		";
	} else if($_SESSION["access"] == "STAFF") {
		echo "
			<!-- Home -->
    		<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link active' href='home.php'>Home</a>
			  	</li>
			</ul>

			<!-- Attendance -->
			<hr>
			<h2 class='display-9'>Attendance</h2>
			<ul class='nav flex-column'>
				<li class='nav-item'>
			    	<a class='nav-link' href='attendance.php'>Record Attendance</a>
			  	</li>
				<li class='nav-item'>
			    	<a class='nav-link' href='generate_qrcode.php'>Generate QR Code</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_attendance.php'>View Attendance</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='print_attendance.php'>View and Download Attendance</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_document_student.php'>View Document</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='check_attendance.php'>Percentage Attendance of Student</a>
			  	</li>
			</ul>

			<!-- Student -->
			<hr>
			<h2 class='display-9'>Student</h2>
			<ul class='nav flex-column'>
			<li class='nav-item'>
			    	<a class='nav-link' href='register_student.php'>Register Student</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_student.php'>View Student</a>
			  	</li>
			</ul>

			<!-- Profile -->
			<hr>
			<h2 class='display-9'>Profile</h2>
			<ul class='nav flex-column'>
				<li class='nav-item'>
			    	<a class='nav-link' href='view_my_profile_staff.php'>View Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='update_my_profile_staff.php'>Update Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='change_password_staff.php'>Change Password</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='sign_out_process.php'>Sign Out</a>
			  	</li>
			</ul>
		";
	} else if($_SESSION["access"] == "STUDENT") {
		echo "
			<!-- Home -->
    		<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link active' href='home.php'>Home</a>
			  	</li>
			</ul>

			<!-- Attendance -->
			<hr>
			<h2 class='display-9'>Attendance</h2>
			<ul class='nav flex-column'>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_my_attendance.php'>View My Attendance</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='view_my_document.php'>View My Document</a>
			  	</li>
			</ul>

			<!-- Profile -->
			<hr>
			<h2 class='display-9'>Profile</h2>
			<ul class='nav flex-column'>
				<li class='nav-item'>
			    	<a class='nav-link' href='view_my_profile_student.php'>View Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='update_my_profile_student.php'>Update Profile</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='change_password_student.php'>Change Password</a>
			  	</li>
			  	<li class='nav-item'>
			    	<a class='nav-link' href='sign_out_process.php'>Sign Out</a>
			  	</li>
			</ul>
		";
	}
?>