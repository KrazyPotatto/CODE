<?php
require('inc/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Code | Nust Games</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-md-3"></div>
<div class="col-md-6">
<?php 
	if(!isset($_SESSION['auth'])){
		//User is not connected
		require('inc/head-not-co.php');
		require('inc/login_form.html');
	}else{
		//User is connected
		$page = "Home";
		require('inc/head-co.php');
		?>
			<h1>Home</h1><hr>
			<h3>Hello <?= $_SESSION['username'] ?></h3><hr>
			<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#confirm"> PLAY </button>
			<div class="modal fade" id="confirm">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">Continue your adventure</h4>
			      </div>
			      <div class="modal-body">
			        <p>Do you want to continue your advanture or reset it</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" id="continue-adventure" class="btn btn-success">Continue</button>
			        <button type="button" id="reset-adventure" class="btn btn-warning">Reset</button>
			      </div>
			    </div>
			  </div>
			</div>
		<?php
	} 
?>
</div>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://bootswatch.com/3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>document.write('<script src="http://' + (location.host || 'code.beta').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>