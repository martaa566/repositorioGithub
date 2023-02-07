<?php
$errores = '';
$enviado=true;
// Comprobamos que el formulario haya sido enviado con las variables que hayamos puesto en index.view, deben llamarse igual!
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$pages = $_POST['pages'];
    $prices = $_POST['prices'];
   	$editor = $_POST['editor'];
   	$chapters = $_POST['chapters'];
   	$authors = $_POST['authors'];


     if(!isset($title)){

         $enviado=false;
         $errores =+ 'titulo no intrododucido <br>';
     }
      if(!isset($pages)){

         $enviado=false;
         $errores =+ 'pages no intrododucido <br>';
     }
      if(!isset($prices)){

      	 $enviado=false;
         $errores =+ ' prices no intrododucido <br>';
     }
      if(!isset($editor)){
         
         $enviado=false;
         $errores =+ 'editor no intrododucido <br>';
     }
      if(!isset($chapters)){
         
         $enviado=false;
         $errores =+ 'chapters no intrododucido <br>';
     }
      if(!isset($authors)){
         
         $enviado=false;
         $errores =+ 'authors no intrododucido <br>';
     }
     

	if($enviado==false){ //lanzamos los errores que hayan podido ocurrir
		echo $errores;
	}

	else{ //si todo ok


	//conectamos con la base de datos que se llama 'prueba_datos'	
		$conexion = new mysqli('localhost', 'root', '', 'libros');


			if ($conexion->connect_errno){
				die('Lo siento hubo un problema con el servidor');
			} 
			else {

				
					

					$consulta = "SELECT id from publisher where name = '$editor'";

					$connect = $conexion->query($consulta); //La conexión se ejecuta

					if ($connect->num_rows) { /*Si esta seteado, te guarda el valor en una variable*/

                       $id_editorial =  $connect->fetch_assoc();


				$sql = "SELECT * FROM book"; //Traemos los elementos de la base de datos
	
				$connect = $conexion->query($sql); //La conexión se ejecuta
	
				
		
		//El método fetch_assoc trae la información del elemento de cada fila que queramos
					$found=false;
					while($fila = $connect->fetch_assoc()){
				
						if($fila['title']==$title){
							$found=true;
						
							//echo  "Hola ". $fila['Nombre'] . ' este usuario ya se encuentra registrado<br />';

					 	break;
						}
					}

                      

					if($found==false){


						$sql1 = "INSERT INTO book(Titulo,Paginas,Precio,ID_editor,Capitulos,Autores) VALUES ('$title','$pages','$prices','$prices','$id_editorial[id]','$chapters', '$authors')";
						$connect = $conexion->query($sql1);
							
					}
					

					}else{
						echo "No existe esa editorial";
					}

	

					
	
				
		}	
	}
}
require 'libro.view.php'; 


?>