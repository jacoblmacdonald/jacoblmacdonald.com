<!DOCTYPE HTML>
<html itemscope itemtype="https://schema.org/WebSite">
<head>
	<meta itemprop="name" content="Jacob Macdonald">
	<meta itemprop="image" content="/images/pic.jpg">
	<link rel="icon" href="/images/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata:400,700">
	<link rel="stylesheet" href="stylesheets/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://npmcdn.com/contentful@latest/browser-dist/contentful.min.js"></script>
	<script src="js/unsupported.js"></script>
	<script src="js/contentful.js"></script>
	<script src="js/global.js"></script>
</head>
<body data-page=0>
	<?php include("boilerplate.php"); ga(); e(); ?>
	<?php include("unsupported.php"); ?>
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