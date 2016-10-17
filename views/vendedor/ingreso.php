 <?php $conexion = new Conexion;?>
   <section id="main-content">
    <section class="wrapper site-min-height">
     <div class="row">
        <div class="col-sm-12 main-chart">
            <h3 class="text-center" style="margin-bottom:50px;" >Realizar Cotizacion</h3>            
        </div>
        <form class="form-horizontal" id="commentForm" action="<?php echo URL?>vende/insert_vende">
         <div class="col-sm-4 col-sm-offset-1">
             <div class="form-group">
                     <label class="col-sm-4 control-label">Rut*</label>
                 <div class="col-sm-8">
                     <input type="text" id="rut" name="rut" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Nombres*</label>
                 <div class="col-sm-8">
                     <input type="text" id="nombres" name="nombres" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Ape. Paterno*</label>
                 <div class="col-sm-8">
                     <input type="text" id="paterno" name="paterno" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Ape. Materno</label>
                 <div class="col-sm-8">
                     <input type="text" id="materno" name="materno" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4 control-label">Fono Trabajo</label>
                 <div class="col-sm-8">
                     <input type="number" id="fono_trabajo" name="fono_trabajo" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4 control-label">Fono Celular</label>
                 <div class="col-sm-8">
                     <input type="number" id="fono_celular" name="fono_celular" class="form-control">
                 </div>
             </div>
             
             
         </div>
         <div class="col-sm-4 col-sm-offset-1">
               <div class="form-group">
                     <label class="col-sm-4 control-label">Mail*</label>
                 <div class="col-sm-8">
                     <input type="mail" id="mail" class="mail" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Dirección</label>
                 <div class="col-sm-8">
                     <input type="text" id="direccion" class="direccion" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Ciudad*</label>
                 <div class="col-sm-8">
                     <select name="ciudad" id="ciudad" class="form-control">
                         <option value="" selected> Seleccione Ciudad</option>
                        <option value="">Seleccione Ciudad</option>
                        <?php
                        $consulta = 
                            "
                            SELECT *
                            FROM 
                                ciudad_ciudad 
                            ORDER BY 
                                nombre_ciu
                            ASC 
                            ";
                        $conexion->consulta($consulta);
                        while ($fila = $conexion->extraer_registro()) {
                            $nombre_ciu = $fila["nombre_ciu"];
                        ?>
                            <option value="<?php echo utf8_encode($nombre_ciu);?>"><?php echo utf8_encode($nombre_ciu);?></option>
                        <?php
                        }
                        ?>
                     </select>
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4  control-label">Fono Casa</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4 control-label">Fono Contacto*</label>
                 <div class="col-sm-8">
                     <input type="text" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                     <label class="col-sm-4 control-label">Comentarios</label>
                 <div class="col-sm-8">
                     <textarea class="form-control" rows="3"></textarea>
                 </div>
             </div>
             
         </div>
        <div class="col-sm-10 col-sm-offset-1"><hr></div>      
          <div class="col-sm-4 col-sm-offset-1">
              <div class="form-group">
                     <label class="col-sm-4  control-label">Proyecto</label>
                 <div class="col-sm-8">
                     <select name="proyecto" id="proyecto" class="form-control">
                         <option value="" selected>Elija una opción</option>
                         <?php $sql="SELECT * FROM cotizador_proyecto";
                               $conexion->consulta($sql);
                               while($fila = $conexion->extraer_registro()){
                                   $nom = utf8_encode($fila['pro_nom']);
                                   $id  = $fila['idcotizador_proyecto'];
                                ?>
                                <option value="<?php echo $id?>"> <?php echo $nom?></option>
                          <?php   
                          }?>
                     </select>
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Modelos</label>
                 <div class="col-sm-8">
                     <select name="modelo" id="modelo" class="form-control">
                     <option value="" selected>Seleccione un Proyecto</option>                         
                     </select>
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Valor Vivienda</label>
                 <div class="col-sm-8">
                     <input type="number" id="valor_vivienda" name="valor_vivienda" class="form-control">
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Porcentaje de Credito</label>
                 <div class="col-sm-8">
                     <select name="porcentaje" id="porcentaje" class="form-control">
                         <option value="90">90</option>
                         <option value="80">80</option>
                         <option value="70">70</option>
                         <option value="60">60</option>
                     </select>
                 </div>
             </div>
             
          </div>
          <div class="col-sm-4 col-sm-offset-1">
             <div class="form-group">
                     <label class="col-sm-4  control-label">Tipo de Contrato</label>
                 <div class="col-sm-8">
                     <select name="" id="" class="form-control">
                         <option value="" selected>Seleccione tipo de contrato</option> 
                         <?php
                          $sql="SELECT * FROM cotizador_tipo_contrato";
                               $conexion->consulta($sql);
                               while($fila = $conexion->extraer_registro()){
                                   $nom_con = utf8_encode($fila['nombre_con']);
                                   $id_con  = $fila['id_con'];
                                ?>
                               <option value="<?php echo $id_con?>"><?php echo $nom_con?></option> 
                         <?php
                            }
                         ?>                       
                     </select>
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Credito*</label>
                 <div class="col-sm-8">
                     <input type="text" id="credito" name="credito" class="form-control">
                     <a class="btn btn-primary" id="boton_credito">Calcular credito</a>
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Pago Directo</label>
                 <div class="col-sm-8">
                     <input type="text" id="directo" name="directo" class="form-control" >
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Subsidio</label>
                 <div class="col-sm-8">
                     <input type="text" name="subsidio" id="subsidio" class="form-control" value="0">
                 </div>
             </div>
              <div class="form-group">
                     <label class="col-sm-4  control-label">Ahorro</label>
                 <div class="col-sm-8">
                     <input type="text" name="contado" id="contado" class="form-control" value="0">
                 </div>
             </div>  
             <div class="form-group">
                     <label class="col-sm-4  control-label">Ahorro</label>
                 <div class="col-sm-8">
                     <input type="text" name="contado" id="contado" class="form-control" value="0">
                 </div>
             </div>  
          </div>
          </form>
      </div>
     </section>
 </section>