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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Potta+One&display=swap" rel="stylesheet">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>
<style>
 .navtop {
  	height: 60px;
  	width: 100%;
  	border: 0;
	margin-top:50px;

}
.navtop div {
  	display: flex;
  	margin: 0 auto;
  	width: 1000px;
  	height: 100%;
	
}


.navtop div h1 {
  	flex: 1;
  	font-size: 40px;
  	color: #429991;
	font-family: 'Black Ops One', cursive;
}
.navtop div a {
  	padding: 0 20px;
  	text-decoration: none;
  	color: #c5d2e5;
  	font-weight: bold;
}
.navtop a i {
  	padding: 2px 8px 0 0;
	color:#429991;

}

.cards {
  font-family: 'Black Ops One', cursive;
  border-collapse: collapse;
  width: 70%;
  margin-left:210px;
  margin-top:50px;
}

.cards td, .cards th {

  border: 1px solid #ddd;
  padding: 8px;
}



.cards tr:hover {background-color: #ddd;}

thead  {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#429991;
  color: white;
}
.create-contact {
  	display: inline-block;
  	font-weight: bold;
  	font-size: 30px;
  	padding: 10px 15px;
  	margin: 15px 0;
	font-family: 'Black Ops One', cursive;
	
}

</style>

<!-- PHP insert code will be here -->
 
<!-- html form here where the product information will be entered -->
<nav class="navtop">
    	<div>
    	<h1>Comics Books Collection</h1>
        <a href="post.php" class="create-contact"><i class="fas fa-folder-plus"></i>Created Card</a>
    	</div>
    </nav>
  <div class="content read">
    <table class="cards">
        <thead>
            <tr>
            <td>Id</td>
            <td>Title</td>
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
      <a href="update.php?editId=<?php echo $card['id'] ?>" style="color:green">
      <i class="fas fa-edit" aria-hidden="true"></i></a>
      <a href="delete.php?deleteId=<?php echo $card['id'] ?>" style="color:red">
     <i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
 </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</body>
</html>