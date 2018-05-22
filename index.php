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

	    	<h2> Home</h2>
	    	</br>
	    		
			<p><div align="justify">Student attendance is a record of student who are came to class or an event. Regular attendance is the most important to help student get the best possible start in life and at the same time help student get better grades and a better chance of graduating from high school.</p>
			<p><div align="justify">In Universiti Teknologi MARA (Perlis), student is required attend to lectures and other learning activities with less than 80% attendance of the total contact hours for every course. Moreover, the student will be barred from taking a final examination if not fulfill this requirement. </p>


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
