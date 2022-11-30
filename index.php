<?php
     include_once 'includes/survey.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encuesta Videogames</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
       <form action="#" method="POST">
       	<?php
       	$survey = new Survey();
       	if (isset($_POST['juego'])) {
       		$survey->setOptionSelected($_POST['juego']);
       		$survey->vote();
       	 	
       	 } 
       	?>
       	<h2>¿Cual es tu juego favorito de este año?</h2>
       	<input type="radio" name="juego" id="" value="God Of War Ragnarok">God Of War Ragnarok<br>
       	<input type="radio" name="juego" id="" value="Elden Ring">Elden Ring<br>
       	<input type="radio" name="juego" id="" value="Stray">Stray<br>
       	<input type="radio" name="juego" id="" value="Resident Evil Village">Resident Evil Village<br>
       	<input type="radio" name="juego" id="" value="Busca minas">Busca minas<br>
       

       <input type="submit" name="Votar!">
       </form>
      


</body>
</html>