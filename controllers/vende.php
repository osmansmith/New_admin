<?php  
  class vende extends Controller
  {
      # la funcion constructora hereda de controller
      function __construct()
      {
           parent::__construct();
      }            
      # metodo index      
     
      function index()234
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
           $this->view->render('add/uf');
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
            $this->view->render('pdf');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('add/js_lista');           
           $this->view->render('add/cierre');           
      } 
      function edita()
      {         
           if(isset($_GET['val'])){
               
           $this->view->render('add/head_comun');
           $this->view->render('add/menu_vende');
           $this->view->render('vendedor/edita');
           $this->view->render('add/footer');
           $this->view->render('add/js_comun');
           $this->view->render('vendedor/add/js_ingreso'); 
           $this->view->render('add/js_edita');                  
           $this->view->render('add/cierre');  
           }else{
               
               $this->listado();
           }
      }
      
      
      function procesa_ingreso()
      {
          $this->view->render('vendedor/add/procesa_ingreso');
      }
      function insert_vende()
      {
          $datos = array(   
              'rut'           => $_POST['rut'],
              'nombres'       => $_POST['nombres'],
              'paterno'       => $_POST['paterno'],
              'materno'       => $_POST['materno'],
              'fono_trabajo'  => $_POST['fono_trabajo'],
              'fono_celular'  => $_POST['fono_celular'],
              'fono_casa'     => $_POST['fono_casa'],
              'fono_contacto' => $_POST['fono_contacto'],
              'mail'          => $_POST['mail'],
              'direccion'     => $_POST['direccion'],
              'ciudad'        => $_POST['ciudad'],
              'comentario'    => $_POST['comentario'],
              'proyecto'      => $_POST['proyecto'],
              'modelo'        => $_POST['modelo'],
              'valor_vivienda'=> $_POST['valor_vivienda'],
              'porcentaje'    => $_POST['porcentaje'],
              'contrato'      => $_POST['contrato'],
              'credito'       => $_POST['credito'],
              'directo'       => $_POST['directo'],
              'subsidio'      => $_POST['subsidio'],
              'contado'       => $_POST['contado'] 
          );                                             
              $this->model->insert_vende($datos);       
      }
      function update_vende()
      {
         $datos = array(             
              'rut'           => $_POST['rut'],
              'id_cli'        => $_POST['id_cli'],
              'nombres'       => $_POST['nombres'],
              'paterno'       => $_POST['paterno'],
              'materno'       => $_POST['materno'],
              'fono_trabajo'  => $_POST['fono_trabajo'],
              'fono_celular'  => $_POST['fono_celular'],
              'fono_casa'     => $_POST['fono_casa'],
              'fono_contacto' => $_POST['fono_contacto'],
              'mail'          => $_POST['mail'],
              'direccion'     => $_POST['direccion'],
              'ciudad'        => $_POST['ciudad'],
              'comentario'    => $_POST['comentario'],
              'proyecto'      => $_POST['proyecto'],
              'modelo'        => $_POST['modelo'],
              'valor_vivienda'=> $_POST['valor_vivienda'],
              'porcentaje'    => $_POST['porcentaje'],
              'contrato'      => $_POST['contrato'],
              'credito'       => $_POST['credito'],
              'directo'       => $_POST['directo'],
              'subsidio'      => $_POST['subsidio'],
              'contado'       => $_POST['contado']
              
          );                                             
              $this->model->update_vende($datos);               
      }
  }
?>