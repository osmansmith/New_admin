<?php
    # Metodo User_model() que hereda de la clase model
    class user_model extends Model
    {
      private $nombre,$clave,$perfil,$idi;                   
      # funcion constructora heredada de model
      function __construct()
      {
          parent::__construct();
      }       
        # metodo red() con 2 parametros para consultar en la base de datos
        function red($nom,$pas)
        {   
            $this->nombre = $nom;
            $this->clave = $pas;            
            $this->consulta();                                                                                                      
        }        
        function consulta()
        {            
           $val=0;              
           $sql = "SELECT * FROM cotizador_vendedor WHERE usuario_ven='".$this->nombre."' and clave_ven ='".$this->clave."'";           
           $this->base->consulta($sql);                                                       
              while ($fila = $this->base->extraer_registro()) 
              {  
                session::setValue('id',$fila["id_ven"]);  
                session::setValue('nombre',$fila["nombre_ven"]); 
                session::setValue('usuario',$fila["usuario_ven"]); 
                session::setValue('pass',$fila["clave_ven"]);                  
                session::setValue('correo',$fila["correo_ven"]);
                session::setValue('perfil',$fila["perfil_ven"]);                                                                 
                $this->idi = session::getValue('id'); 
                $this->perfil = session::getValue('perfil');                   
                $val = 1;                                                                        
              }             
              if($val == 1)
              {
                if($this->perfil == 0)
                {
                 /* echo "usted es vendedor";*/
                  $jsondata['envio'] = 1;
                  $jsondata['perfil'] = 0;
                  echo json_encode($jsondata);
                }else{
                  // echo "usted es administrador";
                   $jsondata['envio'] = 1;
                  $jsondata['perfil'] = 1;
                  echo json_encode($jsondata);
                }
                /*$this->select();
*/
              }else
              {
                   $jsondata['envio'] = 2;                 
                  echo json_encode($jsondata);
                 /*echo 'datos incorrectos';*/
                 /* header("location:".URL."index/login?error=1"); */
              }
          }
        function select()
        {     

             switch($this->perfil)
             {
                case "0":
                     header("location:".URL."vende/index");             
                    break;
                case "1":
                     header("location:".URL."admin/index");             
                    break;                
            }
                        
        }         

    }    
?>