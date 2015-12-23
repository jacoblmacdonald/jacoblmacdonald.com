<!DOCTYPE HTML>
<html>
<head>
	<link rel="icon" href="/images/favicon.png">
	<link rel="stylesheet" href="stylesheets/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/global.js"></script>
</head>
<body data-page=0>
	<?php include("boilerplate.php"); ga(); e(); ?>
	<div id="header">
		<p class="logo"><span>.</span><span class="logo-expand first">jacob.</span><span class="logo-expand last">macdonald</span> <span>{</span></p>
		<div class="header-items">
			<p><span class="page-select" data-page=1>about</span><span class="page-select-border"></span></p>
			<p><span class="page-select" data-page=2>projects</span><span class="page-select-border"></span></p>
			<p><span class="page-select" data-page=3>contact</span><span class="page-select-border"></span></p>
		</div>
	</div>
	<div id="bracket"><p>}</p></div>
	<div id="intro" class="panel" data-page=0>
		<?php include("intro.php"); ?>
	</div>
	<div id="about" class="panel top" data-page=1>
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