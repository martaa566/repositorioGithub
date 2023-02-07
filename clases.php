<?php

abstract class ReadingMaterial{
	
	private $id;
	private $title;
	private $pages;
	private $prices;
  private $editor;


  function __construct($id,$title,$pages,$prices,$editor){

      $this->id=$id;
      $this->title=$title;
      $this->pages=$pages;
      $this->prices=$prices;
      $this->editor=$editor;

  }

  public function get_id(){

    return $this->id;
  }

  public function set_idNew($id_New){

    $this->id= $id_New;

  }

  public function get_title(){

    return $this->title;

  }

  public function set_newTitle($title_New){

     $this->title=$title_New;

  }

  public function get_pages(){

    return $this->pages;

  }

  public function set_pages($new_pages){

    $this->pages= $new_pages; 

  }

  public function get_prices(){
       
    return $this->prices;
  }

  public function set_prices($new_prices){
      
    $this->prices =$new_prices;
  }

  public function get_editor(){

    return $this->editor;
  }

  public function set_editorNew($new_editor){

    $this->editor = $new_editor;
  }
}

class Book extends ReadingMaterial{

  private $chapters;
  private $authors;

  function __construct($id,$title,$pages,$prices,$editor,$chapters, $authors){
    parent::__construct($id,$title,$pages,$prices,$editor);
    $this->chapters = $chapters;
    $this->authors = $authors;
  }
  public function get_chapters(){
    return $this->chapters;
  }
  public function set_chapters($nuevo){
    return $this->chapters=$nuevo;
  } 
  public function get_authors(){
    return $this->authors;
  }
  public function set_authors($nuevoA){
    return $this->authors=$nuevoA;
  } 

}

class Magazine extends ReadingMaterial{

  private $additionalResources;
  function __construct($id,$title,$pages,$prices,$editor,$additionalResources){

    parent:: __construct($id,$title,$pages,$prices,$editor);
    $this->additionalResources=$additionalResources;
  }

  public function get_additionalResources(){
    return $this->additionalResources;
  }

  public function set_additionalResources($new_additionalResources){
   $this->additionalResources=$new_additionalResources;
  }
}

class Publisher{

  private $id;
  private $name;
  private $address;
  private $telephone;
  private $website;

  function __construct($id,$name,$address,$telephone,$website){

    $this->id=$id;
    $this->name=$name;
    $this->address=$address;
    $this->telephone=$telephone;
    $this->website=$website;

  }

  public function get_id(){

    return $this->id;
  }

  public function set_id($new_id){
    $this->id= $new_id;
  }

  public function get_name(){
    return $this->name;
  }

  public function set_name($new_name){
    $this->name= $new_name;
  }

  public function get_address(){
    return $this->address;
  }

  public function set_address($new_address){

    $this->address = $new_address;
  }

  public function get_telephone(){

    return $this->telephone;
  }

  public function set_telephone($new_telephone){

    $this->telephone =$new_telephone;
  }

  public function get_website(){

    return $this->website;
  }

  public function set_website($new_website){

    $this->website =$new_website;
  }

}

$editor = new Publisher('25','manolo','address','693254251','www.google.es');
    echo "El id es: " .$editor->get_id();
    echo '<br>';

$book = new Book('4','Argoli','362','14','SM','145','Benito Perez');
$book2 = new Book('23','El arte de hacer el payaso','362','45','SM','145','Benito Jerezz');
$book3 = new Book('25','Ballest','36','16','Elvives','145','Alma Perez');
$book4 = new Book('36','Cinco niños','362','2','SM','56','Sol Resca');
$book5 = new Book('25','Los siete magnificos','8','45','12','145','Tino Lopez');

  echo "El autor es ".$book2->get_authors();


echo '<br>';
echo '<strong>EJERCICIO 1</strong>';

function bubbleSortA(array $Array_book,bool $asc){
  //$Array_book es un array con los libros
  //$asc un booleano para el orden ascendente==true
  $size=count($Array_book);
  for($last=$size-1; $last>0;$last=$last-1){
    for($current=0;$current<$last;$current=$current+1){
      if($asc){
        if($Array_book[$current]->get_prices()>$Array_book[$current+1]->get_prices()){
          $temp=$Array_book[$current];
          $Array_book[$current]=$Array_book[$current+1];
          $Array_book[$current]=$temp;
        }
      }
      else{
        if($Array_book[$current]->get_prices()<$Array_book[$current+1]->get_prices()){
          $temp=$Array_book[$current];
          $Array_book[$current]=$Array_book[$current+1];
          $Array_book[$current+1]=$temp;
        }

      }
    }
  }
return $Array_book;
}

echo '<br>';

function mostrar($array){

  $tam = count($array);
  for ($i=0; $i <$tam ; $i++) { 

    echo "El libro  ".$array[$i]->get_title() . " tiene un PRECIO de ".$array[$i]->get_prices() ;
    echo '<br>';

  }
} 
$asc=false;
$array_libros = array($book,$book2,$book3,$book4,$book5);
$array_libros = (bubbleSortA($array_libros,$asc));

 mostrar($array_libros);


echo '<br>';
echo '<strong>EJERCICIO 2</strong>';
echo '<br>';


function ordenar(array $Array_book,bool $asc){ /*Reutilizamos la funcion del ejercicio anterior y cambiamos la variabe de precio por el titulo*/
  //$Array_book es un array con los libros
  //$asc un booleano para el orden ascendente==true
  $size=count($Array_book);
  for($last=$size-1; $last>0;$last=$last-1){
    for($current=0;$current<$last;$current=$current+1){
      if($asc){
        if($Array_book[$current]->get_title()>$Array_book[$current+1]->get_title()){
          $temp=$Array_book[$current];
          $Array_book[$current]=$Array_book[$current+1];
          $Array_book[$current]=$temp;
        }
      }
      else{
        if($Array_book[$current]->get_title()<$Array_book[$current+1]->get_title()){
          $temp=$Array_book[$current];
          $Array_book[$current]=$Array_book[$current+1];
          $Array_book[$current+1]=$temp;
        }

      }
    }
  }
return $Array_book;
}

function mostrar2($array){ /*Mostramos el titulo*/
 
  $tam = count($array);
  for ($i=0; $i <$tam ; $i++) { 

    echo $array[$i]->get_title();
    echo '<br>';

  }
} 
$asc2=false;
$array_libros = array($book,$book2,$book3,$book4,$book5);
$array_libros = (ordenar($array_libros,$asc2));

mostrar2($array_libros);


echo '<br>';
echo '<strong>EJERCICIO 3</strong>';
echo '<br>';



function sequentialSeaech_title($array,$libro){
  //La variable libro hace referencia al titulo, es decir, un string y un objeto Book
  $no_encontrado=false;

  for ($i = 0; $i < count($array); $i++) { /*Hacemos un bucle para recorrer el array de los libros*/

    if ($array[$i]->get_title() == $libro){ /*Si coinciden se devuelve la posicion*/ 

      $no_encontrado = true;
      return $i;

  
    }

  }

  if ($no_encontrado == false) {
    return false;
  }

}

function sequentialSeaech_author($array,$autor){
  
  $no_encontrado=false;

  for ($i = 0; $i < count($array); $i++) {

    if ($array[$i]->get_authors() == $autor){

      $no_encontrado = true;
      return $i;

    }
  
  }

  if ($no_encontrado == false) {
    return false;
  }

}

  
if(sequentialSeaech_title($array_libros,"Argoli")){ /*En esta sentencia lo encuentra*/
  echo "Se ha encontrado el libro ";
}else{
  echo "No se ha encontrado el autor";
}
echo '<br>';
if(sequentialSeaech_author($array_libros,"Manolo")){ /*En esta sentencia no lo encuentra*/
  echo "Se ha encontrado el autor";
}else{
  echo "No se ha encontrado el autor";
}

?>