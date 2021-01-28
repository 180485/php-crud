<?php
require 'setup.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();
$cardRepository = new CardRepository($databaseManager);
$cards=$cardRepository->find($_GET['deleteId']);


if(!empty($_POST["delete"])){
    $deleteId=$_GET["deleteId"];
    $cardRepository->delete($deleteId);
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
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Potta+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<style>
body {
    background-image:url("img/bg4.png");
    background-repeat: no-repeat;
    font-family: 'Black Ops One', cursive;
    background-position:center top;
    background-attachment: fixed;
    
  }


.cards{
    width:35%;
    margin-left:370px;

  

    
 
}

.cards td, .cards th {
border: 1px solid #ddd;
padding: 8px;


}

thead  {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
color: Black;
}

h3{
    font-family: 'Black Ops One', cursive;
    margin-top:360px;
    margin-left:350px;

}

button{
    margin-left:370px;
}

</style>
<div class="container">
    <table class="cards">
        <thead>
            <tr>
            <td>Id</td>
            <td>Title</td>
			<td>Description</td>
            </tr>
        </thead>
   <tbody>
<?php foreach ($cards as $card) : ?>
<tr>
	<td><?=$card['id']?></td>
    <td><?=$card['name']?></td>
	<td><?=$card['description']?></td>
 </tr>  
 <?php endforeach; ?>
 <div class="delete">
<form action="" method="post">
        <h3>Sure wanna delete this ?</h3>
        <button type="submit" name="delete" value="confirm">Confirm</button>
 </form>
</div>
</body>
</html>