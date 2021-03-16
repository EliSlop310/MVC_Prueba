<?php
class Mimain extends Controller{

  function __construct(){
    parent::__construct();
    $this->view->render('mimain/index');

  }
}

?>