<?php

class Errores extends Controller{
  
  function __construct(){
  parent::__construct();
  $this->view->mensaje="¡¡¡Oh no!!!, Pagina no encontrada, Error de carga :(";  
  $this->view->render('errores/index');  
  //echor "<p> Error al cargar recurso </p>"
  }
}

?>
