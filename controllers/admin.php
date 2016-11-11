<?php  
  class admin extends Controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
           parent::__construct();
      }            
      # metodo index      
     
      function index() este si
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/index');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('add/cierre');
           
      } 
      function user_ingreso()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');           
           $this->view->render('admin/user_ingreso');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('admin/add/js_usuario');
           $this->view->render('add/cierre');     
      } 
      function user_listado()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/user_lista');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('add/js_lista');                      
           $this->view->render('add/cierre');           
      }
       function cot_listado()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/cot_lista');
           $this->view->render('pdf');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');                     
           $this->view->render('add/js_lista');                     
           $this->view->render('add/cierre');           
      }
      function insert_user()
      {
                 
            $user = array(
            'nombre'    => $_POST['nombre'], 
            'usuario'   => $_POST['usuario'], 
            'mail'      => $_POST['mail'], 
            'perfil'    => $_POST['perfil'], 
            'password'  => $_POST['password'] 
          );
          
          $this->model->insert_user($user);         
            
          
      }
      function update_user()
      {
         
            $user = array(
            'id_usu'    => $_POST['id_usu'], 
            'nombre'    => $_POST['nombre'], 
            'usuario'   => $_POST['usuario'], 
            'mail'      => $_POST['mail'], 
            'perfil'    => $_POST['perfil'], 
            'password'  => $_POST['password'] 
          );
          
          $this->model->update_user($user);         
           
      }      
      function user_edita()
      { 
          if(isset($_GET['id']) and !empty($_GET['id']))
          {
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_admin');
           $this->view->render('admin/user_edita');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('admin/add/js_usuario');  
           $this->view->render('add/cierre');          
          }else{
              $this->user_listado();
          }
      }      
      function user_elimina()
      {
          if(isset($_GET['id2']) and !empty($_GET['id2'])){
              $this->view->render('admin/user_elimina');
          }else{
              $this->user_listado();
          }
          
      }
      
  }
?>