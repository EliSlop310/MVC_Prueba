<?php

class Error extends Controller{
  
  function __construct(){
  parent::__construct();
  $this->view->render('error/index');  
  //echor "<p> Error al cargar recurso </p>"
  }
}

?>
