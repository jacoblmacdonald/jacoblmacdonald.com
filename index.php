<!DOCTYPE HTML>
<html>
<head>
	<link rel="icon" href="/images/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="stylesheets/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/global.js"></script>
	<script src="https://use.typekit.net/obd1tvr.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body data-page=0>
	<?php include("boilerplate.php"); ga(); e(); ?>
	<?php include("header.php"); ?>
	<div id="intro" class="panel top" data-page=0>
		<?php include("intro.php"); ?>
	</div>
	<div id="about" class="panel" data-page=1>
		<?php include("about.php"); ?>
	</div>
	<div id="projects" class="panel" data-page=2>
		<?php include("projects.php"); ?>
	</div>
	<div id="contact" class="panel" data-page=3>
		<?php include("contact.php"); ?>
	</div>
</body>
</html>