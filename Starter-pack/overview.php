<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>
<div class="form">
	<form action="signup.php" method="POST">
  		Host: <input type="text" name="username" /><br />
  		Email: <input type="text" name="email" /><br />
  		Password: <input type="text" name="password" /><br />
  		Confirm password: <input type="text" name="password_confirm" /><br />
 		 <input type="submit" value="Register" />
	</form>
<div>



<ul>
<?php foreach ($cards as $card) : ?>
    <li><?= $card['name'] ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>