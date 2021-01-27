<?php
require 'setup.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();
$cardRepository = new CardRepository($databaseManager);
$cards=$cardRepository->find($_GET['editId']);

 
if(!empty($_POST["submit"])){
    $cardRepository->update();

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"rel="stylesheet"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
     <link rel="stylesheet" href="Starter-pack/style.css">  
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<?php foreach ($cards as $card) : ?>
<tr>
	<td><?=$card['id']?></td>
     <td><?=$card['name']?></td>
	<td><?=$card['description']?></td>
 </tr>
            <?php endforeach; ?>
<div class="form">
    <form method="post">  
	  Name: <input type="text" name="name">
	  description<input type="text" name="description">
      <input type="submit" name="submit" value="update">  
    <form>
</div>
</body>
</html>