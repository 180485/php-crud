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
     <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Potta+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<style>
body {
    background-image:url("img/bg2.png");
    background-repeat: no-repeat;
    
  }

.cards {
  font-family: 'Black Ops One', cursive;
  border-collapse: collapse;
  width: 50%;
  margin-left:570px;

}

.cards td, .cards th {

  border: 1px solid #ddd;
  padding: 8px;
}



thead  {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#429991;
  color: white;
}


.form{
  width: 500px;
  height: 400px;
  margin-left:630px;
  
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
  margin-left: 640px;
  margin-top:40px;
  	font-size: 40px;
  	color: #429991;
	font-family: 'Black Ops One', cursive;
}

</style>
    	<h1>Update Your Collection</h1>
    </nav>
<div class="main">
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
  <div class="form">
    <form method="post">  
	  <label>Name : <input type="text" name="name"></label>
	  <label>description :<input type="text" name="description"></label>
      <input type="submit" name="submit" value="Update">  
    <form>
  </div>
</div>
    
 </tr>
 <?php endforeach; ?>
</body>
</html>