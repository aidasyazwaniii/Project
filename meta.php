<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!-- Optional JavaScript -->

<!-- jQuery first -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- then Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- then Bootsrap javaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<!-- Webpage stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Example starter JavaScript for disabling form submissions if there are invalid fields -->
<script>
	(function() {
			'use strict';

			window.addEventListener('load', function() {
			var form = document.getElementById('needs-validation');
			form.addEventListener('submit', function(event) {
  				if (form.checkValidity() === false) {
    				event.preventDefault();]
    				event.stopPropagation();
  				}
  				form.classList.add('was-validated');
			}, false);
			}, false);
	})();
</script>

<!-- Back button -->
<script>
	function goBack() {
	    window.history.back();
	}
</script>