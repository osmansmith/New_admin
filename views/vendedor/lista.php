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
                                cotizador_cliente,
                                cotizador_cotizacion
                            WHERE 
                                cotizador_cliente.id_cot_cli = cotizador_cotizacion.id_cliente_cot AND
                                cotizador_cotizacion.id_ven = ".session::getValue('id')."
                            ORDER BY
                                cotizador_cotizacion.fecha_cot ASC
                            ";
                        $conexion->consulta($consulta);
                        while ($fila = $conexion->extraer_registro()) {
                            $fecha = date("d/m/Y",strtotime($fila['fecha_cot']));
                            $fechaorden = date("Ymd",strtotime($fila['fecha_cot']));
                            $hoy = date("Ymd");
                            $id_cot_cli = $fila['id_cot_cli'];
                            $id_usu = $fila['id_usu'];

                            $servicio = "";
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