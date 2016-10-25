 
      <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <div class="row">
                    <div class="col-lg-12 main-chart">
                        <h3><i class="fa fa-tachometer" aria-hidden="true"></i> Escritorio</h3>
                        
                    </div>
                     <div class="col-lg-6 main-chart">
                            <div id="grafico_venta" class="height-250" style="width: 100%; margin-top: 0px;"></div>
                     </div>
                    <div class="col-lg-6 main-chart">
                        <div class="row mtbox">
                            <div class="col-md-4 col-sm-6 box0">
                                <div class="box1">
                                    <?php 
                                    $conexion = new Conexion;
                                    $consulta_clientes = 
                                        "
                                        SELECT
                                            DISTINCT(rut_cot_cli)
                                        FROM
                                            cotizador_cliente
                                        WHERE
                                            estado_cot_cli = 0
                                        ";

                                    $conexion->consulta($consulta_clientes);
                                    $nquery_clientes = $conexion->total();
                                     ?>
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <h3><?php echo $nquery_clientes; ?></h3>
                                </div>
                                <p><?php echo $nquery_clientes; ?> Clientes Cotizados</p>
                            </div>
                            <div class="col-md-4 col-sm-6 box0">
                                <div class="box1">
                                    <?php 
                                    $consulta_cotiza = 
                                        "
                                        SELECT
                                            id_cot
                                        FROM
                                            cotizador_cotizacion
                                        WHERE
                                            YEAR(fecha_cot) = '".date("Y")."'
                                        ";

                                    $conexion->consulta($consulta_cotiza);
                                    $nquery_cotiza = $conexion->total();
                                     ?>
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    <h3><?php echo $nquery_cotiza; ?></h3>
                                </div>
                                <p><?php echo $nquery_cotiza; ?> Cotizaciones Ingresadas</p>
                            </div>
                            <div class="col-md-4 col-sm-6 box0">
                                <div class="box1">
                                    <?php 
                                    $consulta_vende = 
                                        "
                                        SELECT
                                            id_ven
                                        FROM
                                            cotizador_vendedor
                                        WHERE
                                            perfil_ven = 0
                                        ";

                                    $conexion->consulta($consulta_vende);
                                    $nquery_vende = $conexion->total();
                                     ?>
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <h3><?php echo $nquery_vende; ?></h3>
                                </div>
                                <p><?php echo $nquery_vende; ?> Vendedor</p>
                            </div>
                        </div>
                    </div>                                                           
                </div><!--/row -->
            </section>
        </section>

      <!--main content end-->

