<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>
<!-- PHP insert code will be here -->
 
<!-- html form here where the product information will be entered -->




<ul>
<?php foreach ($cards as $card) : ?>
    <li><?= $card['name'] ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>