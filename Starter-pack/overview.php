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

<h1>Goodcard - track your collection of Pokémon cards</h1>
<!-- PHP insert code will be here -->
 
<!-- html form here where the product information will be entered -->
	<h4>CARD LIBARY</h4>
<table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
				<td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
<?php foreach ($cards as $card) : ?>
	<tr>
		<td><?=$card['id']?></td>
        <td><?=$card['name']?></td>
		<td><?=$card['description']?></td>
         <td class="actions">
                    <a href="cardRepository.php?id=<?=$card['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="cardRepository.php?id=<?=$card['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
	<form method="post">  
	  Name: <input type="text" name="name">
	  description<input type="text" name="description">
	  <input type="submit" name="submit" value="Search">  


</body>
</html>