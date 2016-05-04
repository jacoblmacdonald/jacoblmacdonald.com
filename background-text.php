<?php
	$files = array(
		"index.php",
		"projects.php",
		"contact.php",
		"sass/_global.scss",
		"sass/_intro.scss",
		"sass/_projects.scss",
		"sass/_contact.scss"
	);
	for($i = 0; $i < 2; $i++) {
		$index = floor(rand(0, count($files) - 1));
		$file_name = $files[$index];
		$file = fopen($file_name, "r");
		if($file) {
			$html = fread($file, filesize($file_name));
			echo "<pre class='desktop background-text b" . $i . (isset($color) ? " " . $color : "") . "'>" . htmlspecialchars(trim($html)) . "</pre>";
		}
		array_splice($files, $index, 1);
	}
?>