<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<form action=" " name="formulario" method="post"> <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->

<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
<h1><i> REGISTRO DE USUARIOS<i></h1>
<br>
		<!-- El nombre es un texto -->
		<input type="text" placeholder="Titulo:" name="title" id="title">
		<br>
		<!-- El apellido es un texto -->
		<input type="text" placeholder="Paginas:" name="pages" id="pages">
		<br>
		<input type="text" placeholder="Precio :" name="prices" id="prices">
		<!-- El password es un tipo password -->
		<br>
		<!-- El email es tipo email -->
		<input type="text" placeholder="Editor" name="editor" id="editor">
		<br><br>

	    <input type="text" placeholder="Capitulos:" name="chapters" id="chapters">
		<br>

		<input type="text" placeholder="Autores:" name="authors" id="authors">
		<br>

		<input type="submit" name="submit" class="btn btn-lg btn-primary" value="Send" style="background-color:#E3E9B3"> 
		<br>
		


	</form>


</body>
</html>