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

.cards {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.cards td, .cards th {
  border: 1px solid #ddd;
  padding: 8px;
}

.content {
  	width: 1000px;
  	margin: 0 auto;
}
.content h2 {
  	margin: 0;
  	padding: 25px 0;
  	font-size: 22px;
  	border-bottom: 1px solid #ebebeb;
  	color: #666666;
}
.create-contact {
  	display: inline-block;
  	text-decoration: none;
  	background-color: #0099CC;
  	font-weight: bold;
  	font-size: 14px;
  	color: #FFFFFF;
  	padding: 10px 15px;
  	margin: 15px 0;
}
.create-contact:hover {
  	background-color: #32a367;
}

.cards tr:hover {background-color: #ddd;}

#cards thead .th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<!-- PHP insert code will be here -->
 
<!-- html form here where the product information will be entered -->
    <div class="content read">
    <h4>Comics collection</h4>
	<a href="post.php" class="create-contact">Create Card</a>
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
     <a href="delete.php?editId=<?php echo $card['id'] ?>" style="color:green">
     <i class="fas fa-edit" aria-hidden="true"></i></a>

    <a href="delete.php?deleteId=<?php echo $card['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete ??')">
     <i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
 </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
</body>
</html>