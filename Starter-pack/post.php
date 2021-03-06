<?php
require 'setup.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();



if(!empty($_POST["submit"]) && !empty($_POST["name"])){
    $cardRepository->create();
    $cards=$cardRepository->get();
    echo '<div class="alert alert-success" role="alert"> Your COMIC is Added ! </div>';
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
     <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Potta+One&display=swap" rel="stylesheet">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<style>
body {
    background-image:url("img/bg1.png");
	background-repeat: no-repeat;

    
  }
    .navtop {
  	background-color:#429991;
  	height: 60px;
  	width: 100%;
  	border: 0;
	font-family: 'Black Ops One', cursive;
}
.navtop div {
  	display: flex;
  	margin: 0 auto;
  	width: 1000px;
  	height: 100%;
}
.navtop div h1, .navtop div a {
  	display: inline-flex;
  	align-items: center;
}
.navtop div h1 {
  	flex: 1;
  	font-size: 24px;
  	padding: 0;
  	margin: 0;
  	color: #ecf0f6;
  	font-weight: normal;
}
.navtop div a {
  	padding: 0 20px;
  	text-decoration: none;
  	color: #c5d2e5;
  	font-weight: bold;
}
.navtop div a i {
  	padding: 2px 8px 0 0;
}
form{
  width: 500px;
  height: 400px;
  margin-left:730px;
  margin-top:40px;
  
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #427F99;
  border-radius: 4px;
  box-sizing: border-box;
 
}

input[type=submit] {
  width: 100%;
  background-color:#429991;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: 'Black Ops One', cursive;
}

input[type=submit]:hover {
  background-color: #427F99;
}

label{
	font-family: 'Black Ops One', cursive;
	color:#429991;
	width: 100%;

}

h1{
	font-family: 'Black Ops One', cursive;
	color:#429991;
	margin-left:730px;
	margin-top:150px;

}

</style>
<nav class="navtop">
    	<div>
    		<h1>Comics Books Collection</h1>
            <a href="index.php"><i class="fas fa-address-book"></i></i>Comics Albums </a>
    	</div>
    </nav>
<div class="form">
<h1>Created Your Collection</h1>
    <form method="post">  
	  <label>Name : <input type="text" name="name"></label>
	  <label>description :<input type="text" name="description"></label>
      <input type="submit" name="submit" value="Save">  
    <form>
</div>
</body>
</html>