<?php
class Plato extends Controller{

  function __construct(){
    parent::__construct();
    $this->view->render('plato/index');

  }
}

?>
