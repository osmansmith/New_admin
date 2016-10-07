<?php  
  class user extends Controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
           parent::__construct();
      }            
      # metodo index      
       public function ingreso()
      {
          if(isset($_POST['nombre']) and !empty($_POST['nombre']) and isset($_POST['pass']) and !empty($_POST['pass']))
          {
              
               # datos del formulario de login 
              $nom = $_POST['nombre'];
              $pas = $_POST['pass']; 
              
              $this->model->red($nom,$pas);
          }
        else
          {
              /*$this->view->render('login');*/
             header("location:".URL."index/login?error=2"); 
          }                             
          # metodo red que recibe 2 parametros para procesarlos en models->User_model.php                                       
      }
      public function salir()
      {
          # Se llama al metodo estatico para destruir toda sesion activa
          session::destroy();
          # Se redirige a la pagina de login 
          $this->view->render('login');                          
      }  
      
      
      
      
                     
  }
?>