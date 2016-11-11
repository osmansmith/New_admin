<?php  
  class index extends Controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
           parent::__construct();
      }            
      # metodo index              
      function login()
      {                    
           $this->view->render('login');
      }  
      function perdido()
      {         
          $this->view->render('404');
      }
      function pdf()
      {              
         /* $this->view->render('add/head_comun');    */      
          $this->view->render('pdf');
      }
      function correo()
      {
          
          $this->view->render('correo');
      }
      
  }
?>