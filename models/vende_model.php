<?php
    # Metodo User_model() que hereda de la clase model
    class vende_model extends Model
    {
                 
      # funcion constructora heredada de model
      function __construct()
      {
          parent::__construct();
      }       
        # metodo red() con 2 parametros para consultar en la base de datos
        
        function insert_vende($dato)
        {
            
        $rut = $dato['rut'];   
        $nombres = $dato['nombres'];   
        $paterno = $dato['paterno'];   
        $materno = $dato['materno'];   
        $fono_trabajo = $dato['fono_trabajo'];   
        $fono_celular = $dato['fono_celular'];   
        $fono_casa = $dato['fono_casa'];   
        $fono_contacto = $dato['fono_contacto'];   
        $mail = $dato['mail'];   
        $direccion = $dato['direccion'];   
        $ciudad = $dato['ciudad'];   
        $comentario = $dato['comentario'];   
        $proyecto = $dato['proyecto'];   
        $modelo = $dato['modelo'];   
        $valor_vivienda = $dato['valor_vivienda'];   
        $porcentaje = $dato['porcentaje'];   
        $contrato = $dato['contrato'];   
        $credito = $dato['credito'];   
        $directo = $dato['directo'];   
        $subsidio = $dato['subsidio'];   
        $contado = $dato['contado'];  
            
        //aca consultar si existe el rut en cliente    
            
        $this->base->consulta("INSERT INTO cotizador_cliente(
        nombre_cot_cli,
        apellidop_cot_cli,
        apellidom_cot_cli,
        rut_cot_cli,
        fono_casa_cot_cli,
        correo_cot_cli,
        direccion_cot_cli,
        celular_cot_cli,
        fono_trabajo_cot_cli,
        fono_contacto_cot_cli,
        contacto_cot_cli,
        comentario_cot_cli,
        ciudad_cot_cli, estado_cot_cli)VALUES('".$nombres."','".$paterno."','".$materno."','".$rut."','".$fono_casa."','".$mail."','".$direccion."','".$fono_celular."','".$fono_trabajo."','".$fono_contacto."','','".$comentario."','".$ciudad."', 0 )");
        
            
        $ultimo = $this->base->ultimo_id();
        $id_ven = session::getValue('id');
        $fecha = date('Y-m-d H:m:s');
        $uf = session::getValue('valor_uf_sitio');
            
        $this->base->consulta("INSERT INTO cotizador_cotizacion(
        id_ven,
        id_con,
        fecha_cot,
        uf_cot,
        credito_cot,
        subsidio_cot,
        contado_cot,
        directo_cot,
        id_cliente_cot,
        id_mod,
        valor_viv_cot)
        VALUES(
        ".$id_ven.",".$contrato.",'".$fecha."',".$uf.",".$credito.",".$subsidio.",".$contado.",".$directo.",".$ultimo.",".$modelo.",".$valor_vivienda.")");
            
        header("location:".URL."vende/ingreso");
            
        }
         function update_vende($dato)
        {
           
        $rut = $dato['rut'];   
        $id_cli = $dato['id_cli'];   
        $nombres = $dato['nombres'];   
        $paterno = $dato['paterno'];   
        $materno = $dato['materno'];   
        $fono_trabajo = $dato['fono_trabajo'];   
        $fono_celular = $dato['fono_celular'];   
        $fono_casa = $dato['fono_casa'];   
        $fono_contacto = $dato['fono_contacto'];   
        $mail = $dato['mail'];   
        $direccion = $dato['direccion'];   
        $ciudad = $dato['ciudad'];   
        $comentario = $dato['comentario'];   
        $proyecto = $dato['proyecto'];   
        $modelo = $dato['modelo'];   
        $valor_vivienda = $dato['valor_vivienda'];   
        $porcentaje = $dato['porcentaje'];   
        $contrato = $dato['contrato'];   
        $credito = $dato['credito'];   
        $directo = $dato['directo'];   
        $subsidio = $dato['subsidio'];   
        $contado = $dato['contado'];  
            
        //aca consultar si existe el rut en cliente    
            
        $this->base->consulta("UPDATE cotizador_cliente SET        
        nombre_cot_cli = '".$nombres."',
        apellidop_cot_cli = '".$paterno."',
        apellidom_cot_cli = '".$materno."',
        rut_cot_cli = '".$rut."',
        fono_casa_cot_cli = '".$fono_casa."',
        correo_cot_cli = '".$mail."',
        direccion_cot_cli = '".$direccion."',
        celular_cot_cli = '".$fono_celular."',
        fono_trabajo_cot_cli = '".$fono_trabajo."',
        fono_contacto_cot_cli = '".$fono_contacto."',
        contacto_cot_cli = '',
        comentario_cot_cli = '".$comentario."',
        ciudad_cot_cli = '".$ciudad."',
        estado_cot_cli = 0  WHERE id_cot_cli = ".$id_cli." ");
        
            
       /* $ultimo = $this->base->ultimo_id();*/
        $id_ven = session::getValue('id');
        $fecha = date('Y-m-d H:m:s');
        $uf = session::getValue('valor_uf_sitio');
            
        $this->base->consulta("INSERT INTO cotizador_cotizacion(
        id_ven,
        id_con,
        fecha_cot,
        uf_cot,
        credito_cot,
        subsidio_cot,
        contado_cot,
        directo_cot,
        id_cliente_cot,
        id_mod,
        valor_viv_cot)
        VALUES(
        ".$id_ven.",".$contrato.",'".$fecha."',".$uf.",".$credito.",".$subsidio.",".$contado.",".$directo.",".$id_cli.",".$modelo.",".$valor_vivienda.")");
            
       
            
        }
        
        
        
                  
    }    
?>