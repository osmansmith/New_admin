<?php 
      $conexion = new Conexion;
      $id_ven = $_GET['id'];
      $consulta = "SELECT * FROM cotizador_vendedor WHERE id_ven = ".$id_ven."";
      $conexion->consulta($consulta);  
      while($fila = $conexion->extraer_registro())
      {
              $id_usu     = $fila['id_ven'];
              $nombre     = $fila['nombre_ven'];
              $usuario    = $fila['usuario_ven'];
              $clave      = $fila['clave_ven'];
              $mail       = $fila['correo_ven'];
              $perfil     = $fila['perfil_ven']; 
      }
?>
   <section id="main-content">
    <section class="wrapper site-min-height">
     <div class="row">
        <div class="col-sm-12 main-chart">
            <h3 class="text-center" style="margin-bottom:50px;" >Ingresar Usuario</h3>            
        </div>
        <form class="form-horizontal" id="formuseredita" method="post" action="<?php echo URL?>admin/update_user">
        <input type="text" value="<?php echo $id_usu?>" id="id_usu" name="id_usu" hidden="hidden">
        <div class="col-sm-6 col-sm-offset-3">
             <div class="form-group">
                 <label class="col-sm-4 control-label">Nombre Completo</label>
                 <div class="col-sm-8">
                     <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Nombre de Usuario</label>
                 <div class="col-sm-8">
                     <input type="text" id="usuario" name="usuario" value="<?php echo $usuario?>" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Correo</label>
                 <div class="col-sm-8">
                     <input type="email" id="mail" name="mail" value="<?php echo $mail?>" class="form-control" required>
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4 control-label">Perfil</label>
                 <div class="col-sm-8">
                   <select name="perfil" id="perfil" class="form-control">
                    <option value="<?php echo $perfil?>"><?php if($perfil == 0) echo 'Vendedor'; else echo 'Administrador';?></option>
                    <option value="1">Administrador</option>
                    <option value="0">Vendedor</option>
                 </select>  
                 </div>                 
             </div>
             <div class="form-group">
                 <label class="col-sm-4  control-label">Contraseña</label>
                 <div class="col-sm-8">
                     <input type="text" id="password" name="password" value="<?php echo $clave?>" class="form-control" maxlength="5" required> 
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-sm-4 control-label">Repetir Contraseña</label>
                 <div class="col-sm-8">
                     <input type="text" id="password2" name="password2" value="<?php echo $clave?>" class="form-control" maxlength="5" required>
                 </div>
             </div>                                                          
             <div class="form-group">
                  <input type="submit" class="btn btn-primary form-control" id="btn_usuario" value="Registrar" />
             </div>             
          </div>   
        </form>
      </div>     
     </section>
 </section>