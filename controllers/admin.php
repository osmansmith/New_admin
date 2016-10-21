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
      function ingreso()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');           
           $this->view->render('admin/ingreso');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('admin/add/js_usuario');
           $this->view->render('add/cierre');     
      } 
      function listado()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/lista');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');                     
           $this->view->render('add/cierre');           
      }
      function insert_user()
      {
          if(isset($_POST['nombre']) and !empty($_POST['nombre']) and
             isset($_POST['usuario']) and !empty($_POST['usuario']) and
             isset($_POST['mail']) and !empty($_POST['mail']) and
             isset($_POST['perfil']) and !empty($_POST['perfil']) and
             isset($_POST['password']) and !empty($_POST['password']))
            {
            $user = [
            'nombre'    => $_POST['nombre'], 
            'usuario'   => $_POST['usuario'], 
            'mail'      => $_POST['mail'], 
            'perfil'    => $_POST['perfil'], 
            'password'  => $_POST['password'] 
          ];
          
          $this->model->insert_user($user);         
            }
          
      }
  }
?>