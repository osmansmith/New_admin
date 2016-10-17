<section id="main-content" class="listado">
    <section class="wrapper site-min-height">
                 <div class="col-sm-12">
                  <h3><i class="fa fa-users" aria-hidden="true"></i> Seguimiento de Clientes</h3>
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Proyecto</th>
                            <th>Fecha</th>
                            <th>Vendedor</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Modelo</th>
                            <th>Tipo Contrato</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Proyecto</th>
                            <th>Fecha</th>
                            <th>Vendedor</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Modelo</th>
                            <th>Tipo Contrato</th>
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
                                cotizador_cliente,
                                cotizador_cotizacion
                            WHERE 
                                cotizador_cliente.id_cot_cli = cotizador_cotizacion.id_cliente_cot AND
                                cotizador_cotizacion.id_ven = ".session::getValue('id')."
                            ORDER BY
                                cotizador_cotizacion.fecha_cot ASC
                            ";
                        // echo $consulta;
                        $conexion->consulta($consulta);
                        while ($fila = $conexion->extraer_registro()) {
                            $fecha = date("d/m/Y",strtotime($fila['fecha_cot']));
                            $fechaorden = date("Ymd",strtotime($fila['fecha_cot']));
                            $hoy = date("Ymd");
                            $id_cot_cli = $fila['id_cot_cli'];
                            $nombre_cot_cli = $fila['nombre_cot_cli'];
                            $apellidop_cot_cli = $fila['apellidop_cot_cli'];
                            $apellidom_cot_cli = $fila['apellidom_cot_cli'];
                            $rut_cot_cli = $fila['rut_cot_cli'];
                            $id_mod = $fila['id_mod'];
                            $id_con = $fila['id_con'];
                            $id_ven = $fila['id_ven'];

                                $consulta_mod = 
                                    "
                                    SELECT
                                        *
                                    FROM 
                                        cotizador_proyecto_modelo,
                                        cotizador_proyecto
                                    WHERE 
                                        cotizador_proyecto_modelo.idcotizador_proyecto_modelo = ".$id_mod." AND
                                        cotizador_proyecto_modelo.cotizador_pro_cod = cotizador_proyecto.idcotizador_proyecto
                                    ";
                                // echo $consulta_mod;
                                $conexion->consulta2($consulta_mod);
                                while ($fila_mod = $conexion->extraer_registro2()) {
                                    $pro_nom = $fila_mod['pro_nom'];
                                    $nombre_mod = $fila_mod['nombre_mod'];
                                }

                                $consulta_ven = 
                                    "
                                    SELECT
                                        *
                                    FROM 
                                        cotizador_vendedor
                                    WHERE 
                                        id_ven = ".$id_ven."
                                    ";
                                $conexion->consulta2($consulta_ven);
                                while ($fila_ven = $conexion->extraer_registro2()) {
                                    $nombre_ven = $fila_ven['nombre_ven'];
                                }

                                $consulta_con = 
                                    "
                                    SELECT
                                        *
                                    FROM 
                                        cotizador_tipo_contrato
                                    WHERE 
                                        id_con = ".$id_con."
                                    ";
                                $conexion->consulta2($consulta_con);
                                while ($fila_con = $conexion->extraer_registro2()) {
                                    $nombre_con = $fila_con['nombre_con'];
                                }
                            ?>
                            <tr>
                                <td><?php echo $id_cot_cli;?></td>
                                <td><?php echo $pro_nom;?></td>
                                <td><span style="display:none"><?php echo $fechaorden;?></span><?php echo $fecha;?></td>
                                <td><?php echo $nombre_ven;?></td>
                                <td><?php echo $nombre_cot_cli." ".$apellidop_cot_cli." ".$apellidom_cot_cli;?></td>
                                <td><?php echo $rut_cot_cli;?></td>
                                <td><?php echo $nombre_mod;?></td>
                                <td><?php echo $nombre_con;?></td>
                                <td class="acciones">
                                    <button value="<?php echo $id_cot_cli;?>" type="button" class="btn btn-sm btn-icon btn-info detalle" data-toggle="tooltip" data-original-title="Ver Cotización"><i class="fa fa-search"></i></button>
                                    <button value="<?php echo $id_cot_cli;?>" type="button" class="btn btn-sm btn-icon btn-warning edita" data-toggle="tooltip" data-original-title="Ingresar Nueva Cotización al Cliente"><i class="fa fa-pencil-square-o"></i></button>
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