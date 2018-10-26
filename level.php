<?php
require('inc/init.php');
force_connect();
$page = "Missions";
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Code Missions | Nust Games</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<div class="col-md-3"></div>
<div class="col-md-6 level-selection">
	<?php require('inc/head-co.php'); ?>
	<h2>Levels List</h2><hr>
	<div class="cb">
		<button class="mission btn btn-link 1">Mission 1</button>
		<button class="mission btn btn-link 2">Mission 2</button>
		<button class="mission btn btn-link 3">Mission 3</button>
	</div>
	<div id="progress" class="hide">
		<h3>Loading Game ...</h3>
		<div class="progress progress-striped active">
		  <div class="progress-bar" style="width: 100%"></div>
		</div>
	</div>
</div>
<div class="game col-sm-6 hide">
	<?php require('inc/head-co.php'); ?>
	<div class="alert alert-dismissible alert-danger" id="alert-error">
		<p class="message" id="message-error">Actually, no error.</p>
	</div>
	<form method="POST" id="form">
		<input type="hidden" id="mission-form" name="mission" value="0" />
		<input type="hidden" id="mission-code" name="code" value="1" />
		<div class="form-group">
			<label class="control-label" id="label">Nothing to show</label>
			<input type="text" name="answer" id="answer" class="form-control" />
		</div>
		<input type="submit" class="btn btn-primary btn-block btn-large" value="Submit Code">
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://bootswatch.com/3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>document.write('<script src="http://' + (location.host || 'code.beta').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>