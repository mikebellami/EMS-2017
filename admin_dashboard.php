  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logoic.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>EMS-AKGEC</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
		<a class="navbar-brand" href="index.html">
			<img src="images/headerlogo.png" height="45px" class="d-inline-block align-top" alt="">
			<div style="vertical-align: middle; font-size: 1.5em" class="d-inline-block">
			EMS	
			</div>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul style="font-size: 1.2em" class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Browse events<span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Log out</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Help</a>
				</li>
			</ul>
		</div>
	</nav>
	<img class="fixed-top" style="margin-top: 71px; vertical-align:top; " src="images/shadow.png" width="100%">
	<br><br><br>
	<div class="container">
		<div class="col-md-12" style="text-align: center;font-size: 3em">
			Welcome Admin
		</div>
		<br>
	</div>

<div class="container">
	<div class="row " style="text-align: center;">
		<div class="col-md-6 ">
			<button style="width: 85%; height: 150px; margin-top: 20px;" type="button" class="btn btstyle" onClick="location.href='event_status.php'">Approve/Deny <br> Events
			</button>
			<br><br>
			<button onClick="location.href='delete_organiser.php'" style="width: 85%; height: 150px" type="button" class="btn btstyle">Delete Event <br>Organiser</button>
		</div>

		<div class="col-md-6">
			<button onClick="location.href='view_registrations.php'" style="width: 85%; height: 150px; margin-top: 20px;" type="button" class="btn btstyle">View registrations</button>
			<br><br>
			<button onClick="location.href='delete_ongoing_event.php'" style="width: 85%; height: 150px" type="button" class="btn btstyle">Delete Ongoing <br>event</button>
		</div>
	</div>
</div>
<br>
<br>
	<footer class="footer fixed-bottom">
		<div style="text-align: center; padding: 10px; color: white;" class="bg-dark">
			EMS 2017
		</div>
	</footer>


	<!--<h1 style="color:white; background-color:rgba(4.683962264150937%,66.42415702982352%,100%,0.9)">PARAM MITTAL</h1>
	-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();</script>
</body>
</html>