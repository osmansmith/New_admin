<?php  
  class admin extends Controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
           parent::__construct();
      }            
      # metodo index      
     
      function index()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/index');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           
      }                                              
  }
?>