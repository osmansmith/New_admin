<section id="main-content">
    <section class="wrapper">
                 <div class="col-sm-12">
                  <h3><i class="fa fa-file-text" aria-hidden="true"></i>Seguimiento de Clientes</h3>
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Proyecto</th>
                            <th>Vendedor</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Departamento</th>
                            <th>Tipo Contrato</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Proyecto</th>
                            <th>Vendedor</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Departamento</th>
                            <th>Tipo Contrato</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php

                        $consulta = 
                            "
                            SELECT
                                *
                            FROM 
                                cliente_ficha_cliente
                            WHERE 
                                id_cli = '".$id_cli."'
                            ORDER BY
                                numero_ficha_fic_cli ASC
                            ";
                        $conexion->consulta($consulta);
                        while ($fila = $conexion->extraer_registro()) {
                            $fecha = date("d/m/Y",strtotime($fila['fecha_fic_cli']));
                            $fechaorden = date("Ymd",strtotime($fila['fecha_fic_cli']));
                            $hoy = date("Ymd");
                            $id_fic_cli = $fila['id_fic_cli'];
                            $id_usu = $fila['id_usu'];

                            $servicio = "";
                            $consulta = 
                                "
                                SELECT
                                    ser.nombre_ser
                                FROM 
                                    servicio_servicio as ser,
                                    cliente_servicio_cliente as cli
                                WHERE 
                                    cli.id_fic_cli = '".$id_fic_cli."' AND
                                    ser.id_ser = cli.id_ser
                                ";
                            $conexion->consulta2($consulta);
                            while ($fila_ser = $conexion->extraer_registro2()) {
                                $servicio.= $fila_ser['nombre_ser']." ";
                              }
                            ?>
                            <tr>
                                <td><?php echo $fila['numero_ficha_fic_cli'];?></td>
                                <td><?php echo utf8_encode($servicio);?></td>
                                <td><span style="display:none"><?php echo $fechaorden;?></span><?php echo $fecha;?></td>
                                <td class="acciones"><button value="<?php echo $id_fic_cli;?>" type="button" class="btn btn-sm btn-icon btn-default ver" data-toggle="tooltip" data-original-title="Ver Ficha"><i class="fa fa-search"></i></button>
                                <?php
                                if ($id_per == 1) {
                                  ?>
                                  <button value="<?php echo $id_fic_cli;?>" type="button" class="btn btn-sm btn-icon btn-danger eliminar" data-toggle="tooltip" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
                                  <?php
                                }
                                ?>
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