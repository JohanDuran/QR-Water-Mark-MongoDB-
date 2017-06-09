<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Author</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
  		<h2>Muestra y datos del autor de la foto</h2>
	  	<h3>Autor: <?php echo " ".$item["Muestra"]['usuario']; ?></h3>
	  	<h3>Fecha: <?php print_r($item["Muestra"]['fecha']->toDateTime()->format('d-m-Y')); ?></h3>
		<br><br>
		<h2>Datos obligatorios</h2>
	  	<table class="table">
		    <thead>
	      	<tr>
	    	    <th>Elemento</th>
		    	<th>Valor</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php foreach ($obligatorios as $key => $value) {?>
		      <tr>
		        <td><?=$key?></td>
		        <td><?=$value?></td>
		      </tr>
	      	<?php } ?>
		    </tbody>
	  	</table>
	  	<br><br>
		<h2>Datos opcionales</h2>
	  	<table class="table">
		    <thead>
	      	<tr>
	    	    <th>Elemento</th>
		    	<th>Valor</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php foreach ($opcionales as $key => $value) {?>
		      <tr>
		        <td><?=$key?></td>
		        <td><?=$value?></td>
		      </tr>
	      	<?php } ?>
		    </tbody>
	  	</table>	  	
	</div>	
</body>
</html>