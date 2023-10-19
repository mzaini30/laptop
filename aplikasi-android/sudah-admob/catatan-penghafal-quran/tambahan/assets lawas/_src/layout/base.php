<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>
	<link rel="stylesheet" href="lib/bulma.min.css" />

<style>
@font-face {
	src: url('lib/Updock-Regular.ttf');
	font-family: Updock;
}
h1 {text-align: center;}
h1 {font-family: Updock;font-size: 2.5rem;font-style: italic;}
body {padding: 1rem;}
.list a {display: block;border-bottom: 1px solid #808080a8;padding: .3rem .7rem;color: #4e4e4e;}

.list a:last-child {border-bottom: none;}

.list {border: 1px solid #808080a8;box-shadow: #808080a8 0 0.08rem 0 0;margin: 1rem 0;}
</style>
</head>
<body>
	<?= $slot ?>
</body>
</html>