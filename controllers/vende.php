<?php  
  class vende extends Controller
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
           $this->view->render('add/menu_vende');
           $this->view->render('vendedor/index');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');           
           $this->view->render('add/cierre');           
      }
      function ingreso()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_vende');
           $this->view->render('vendedor/ingreso');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');     
           $this->view->render('vendedor/add/js_ingreso');     
           $this->view->render('add/cierre');     
      } 
      function listado()
      {
          # el metodo render admite un parametro que es la pagina de la carpeta views sin el .php
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_vende');
           $this->view->render('vendedor/lista');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('add/js_lista');           
           $this->view->render('add/cierre');           
      } 
      function procesa_ingreso()
      {
          $this->view->render('vendedor/add/procesa_ingreso');
      }
      function insert_vende()
      {
<<<<<<< Updated upstream
          // $datos = {
              
          // };
          //  $this->model->insert_vende($datos);
=======
         /* $datos = {
              
          };
           $this->model->insert_vende($datos);*/
>>>>>>> Stashed changes
      }
  }
?>