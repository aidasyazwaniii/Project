<?php require ("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php include "title.php"; ?></title>
	<?php require ("meta.php"); ?>
</head>

<body>
	<!-- Header section start -->
    <?php include ("header.php"); ?>
    <!-- Header section end -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cccccc;">
	    <span class="navbar-text">
	    </span>
	</nav>

	<!-- Wrapping container start-->
	<div class="container-fluid">
	  	<div class="row content">

	  		<!-- Left navigation section start -->
	    	<div class="col-sm-2 sidenav">
	    		<?php include ("menu.php"); ?>
	    	</div>
	    	<!-- Left navigation section end -->

	    	<!-- Middle content section start -->
	    	<div class="col-sm-8">

	    		<div class="card" style="width: 20rem;">
				  	<div class="card-body">

				    	<h3><center>Student Sign In</center></h3>
				    	
			    		<br>
			    		<form class="container" id="needs-validation" action="sign_in_student_process.php" method="post" novalidate>
						  	<div class="row">
						    	<div class="col mb-3">
						      		<label>Student ID</label>
						      		<input type="id" class="form-control" name="studentID" required>
						    	</div>
						  	</div>
						  	<div class="row">
						  		<div class="col mb-3">
						      		<label>Password</label>
						      		<input type="password" class="form-control" name="studentPassword" required>
						    	</div>
						  	</div>

						  	<center>
						  	<button class="btn btn-primary" type="submit">Sign In</button>
						  	</center>

						</form>
				  	</div>
				</div>

	    	</div>
	    	<!-- Middle content section end -->

	    	<!-- Right content section start -->
	    	<div class="col-sm-2 sidenav">

	    	</div>
	    	<!-- Right content section end -->

	  	</div>

	</div>
	<!-- Wrapping container end-->

	<!-- Footer section start -->
	<footer class="container-fluid text-center">
      <?php include "footer.php"; ?>
    </footer>
    <!-- Footer section end -->
</body>
</html>
