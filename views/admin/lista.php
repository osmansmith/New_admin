<section id="main-content" class="listado">
    <section class="wrapper site-min-height">
                 <div class="col-sm-12">
                  <h3><i class="fa fa-users" aria-hidden="true"></i> Seguimiento de Clientes</h3>
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>Correo</th>
                            <th>Perfil</th>                           
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>Correo</th>
                            <th>Perfil</th>                            
                            <th>Acción</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $conexion = new conexion();
                        $consulta = 
                            "
                            SELECT
                                *
                            FROM                                 
                                cotizador_vendedor                                                   
                           
                            ";
                        // echo $consulta;
                        $conexion->consulta($consulta);
                        while ($fila = $conexion->extraer_registro()) {
                            
                            $id_ven = $fila['id_ven'];
                            $nombre_ven = $fila['nombre_ven'];
                            $usuario_ven = $fila['usuario_ven'];
                            $clave_ven = $fila['clave_ven'];
                            $correo_ven = $fila['correo_ven'];
                            $perfil_ven = $fila['perfil_ven'];

                                
                            ?>
                            <tr>                        
                                <td><?php echo $id_ven;?></td>
                                <td><?php echo $nombre_ven;?></td>
                                <td><?php echo $usuario_ven;?></td>
                                <td><?php echo $clave_ven;?></td>
                                <td><?php echo $correo_ven?></td>
                                <td><?php if($perfil_ven == 0) echo 'Vendedor'; else echo 'Administrador';?></td>                               
                                <td class="acciones">
                                 <a href="" class="btn btn-sm btn-icon btn-info detalle" data-toggle="tooltip" data-original-title="Ver Usuario"><i class="fa fa-search"></i></a>
                                 <a href="" class="btn btn-sm btn-icon btn-warning edita" data-toggle="tooltip" data-original-title="Editar Usuario"><i class="fa fa-pencil-square-o"></i></a>
                                 <a href="" class="btn btn-sm btn-icon btn-danger edita" data-toggle="tooltip" data-original-title="Editar Usuario"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php  
                        }
                        ?>
                    </tbody>
                </table>
              </div>
     </section>
    </section>