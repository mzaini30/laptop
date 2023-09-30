<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link rel="stylesheet" href="../../lib/bulma.min.css" />

<style>
body {padding: 1rem;}

.content > p:first-child, .content > p:nth-child(2) {text-align: center;}
</style>
</head>
<body>
	<?php  
		require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
		use Michelf\Markdown;
		$html = Markdown::defaultTransform($slot);
	?>
	<div class="content">
		<?= $html ?>
	</div>
</body>
</html>