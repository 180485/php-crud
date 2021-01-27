<?php
require 'setup.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();
$cardRepository = new CardRepository($databaseManager);

if(!empty($_POST["delete"])){
    $deleteId=$_GET["deleteId"];
    $cardRepository->delete($deleteId);
}
var_dump($_GET);
echo "<br>";
var_dump($_POST);

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
<style>
.update form {
  	padding: 15px 0;
  	display: flex;
  	flex-flow: wrap;
}
.update form label {
  	display: inline-flex;
  	width: 400px;
  	padding: 10px 0;
  	margin-right: 25px;
}
.update form input {
  	padding: 10px;
  	width: 400px;
  	margin-right: 25px;
  	margin-bottom: 15px;
  	border: 1px solid #cccccc;
}
.update form input[type="submit"] {
  	display: block;
  	background-color: #38b673;
  	border: 0;
  	font-weight: bold;
  	font-size: 14px;
  	color: #FFFFFF;
  	cursor: pointer;
  	width: 200px;
	margin-top: 15px;
}
.update form input[type="submit"]:hover {
  	background-color: #32a367;
}
.delete .yesno {
  	display: flex;
}
.delete .yesno a {
  	display: inline-block;
  	text-decoration: none;
  	background-color: #38b673;
  	font-weight: bold;
  	color: #FFFFFF;
  	padding: 10px 15px;
  	margin: 15px 10px 15px 0;
}
.delete .yesno a:hover {
  	background-color: #32a367;
}
</style>
<div class="content delete">
<form action="" method="post">
        delete this ?
        <button type="submit" name="delete" value="confirm">Confirm</button>
    </form>
</div>
</body>
</html>