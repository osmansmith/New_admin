<?php
    # Metodo User_model() que hereda de la clase model
    class admin_model extends Model
    {
                 
      # funcion constructora heredada de model
      function __construct()
      {
          parent::__construct();
      }       
        # metodo red() con 2 parametros para consultar en la base de datos
        
        function insert_user($user)
        {             
        $nombre   = $user['nombre'];   
        $usuario  = $user['usuario'];   
        $mail     = $user['mail'];                                 
        $perfil   = $user['perfil'];                                 
        $password = $user['password'];                                 
            
        $this->base->consulta("INSERT INTO cotizador_vendedor(
        nombre_ven,
        usuario_ven,
        clave_ven,
        correo_ven,
        perfil_ven)
        VALUES(
        '".$nombre."',
        '".$usuario."',
        '".$password."',
        '".$mail."',
        ".$perfil.")");
            
            
        $jsondata['envio'] = 1;
        echo json_encode($jsondata);                    
        }
        
         function update_user($user)
        {
             
        $id_usu   = $user['id_usu'];   
        $nombre   = $user['nombre'];   
        $usuario  = $user['usuario'];   
        $mail     = $user['mail'];                                 
        $perfil   = $user['perfil'];                                 
        $password = $user['password'];                                 
            
        $this->base->consulta("UPDATE cotizador_vendedor SET        
        nombre_ven = '".$nombre."',
        usuario_ven = '".$usuario."',
        clave_ven = '".$password."',
        correo_ven = '".$mail."',
        perfil_ven = ".$perfil."            
        WHERE id_ven = ".$id_usu." ");
            
            
        $jsondata['envio'] = 1;
        echo json_encode($jsondata);
        }
       
       
        
        
                  
    }    
?>