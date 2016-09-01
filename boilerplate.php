<?php
	define("DEV", strpos($_SERVER[HTTP_HOST], "dev") !== FALSE);

	function load_svg($path) {
		return file_get_contents("http://{$_SERVER['HTTP_HOST']}/images/$path");
	}

	function ga() {
		if(!DEV) {
			echo "<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-71714739-1', 'auto');ga('send', 'pageview');</script>";
		}
	}

	function e() {
		if(!DEV) {
			error_reporting(E_ALL);
		}
	}
?>