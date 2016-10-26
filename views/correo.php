<?
$perfil = session::getValue('perfil');
// $id_cot = session::getValue('id_cot');
if(session::exist()){
    header("Location: ".URL."user/salir");
}
$conexion = new conexion();
?>
<!doctype html>
<html>
<head>
	<meta charset="iso-8859-1">
	<title>Panel</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/assets/css/pdf.css">  
    
</head>
<body>
	<?
	$id = $_POST["id"];
    $consulta = 
        "
        SELECT 
            cotizador_cotizacion.uf_cot,
            cotizador_cotizacion.directo_cot,
            cotizador_cotizacion.credito_cot,
            cotizador_cotizacion.subsidio_cot,
            cotizador_cotizacion.contado_cot,
            cotizador_cotizacion.fecha_cot,
            cotizador_cotizacion.id_ven,
            cotizador_cotizacion.valor_viv_cot,
            cotizador_cotizacion.id_mod,
            cotizador_cotizacion.id_con,
            cotizador_cliente.nombre_cot_cli,
            cotizador_cliente.direccion_cot_cli,
            cotizador_cliente.apellidop_cot_cli,
            cotizador_cliente.apellidom_cot_cli,
            cotizador_cliente.rut_cot_cli,
            cotizador_cliente.contacto_cot_cli,
            cotizador_cliente.fono_contacto_cot_cli,
            cotizador_cliente.fono_casa_cot_cli,
            cotizador_cliente.correo_cot_cli,
            cotizador_cliente.celular_cot_cli
        FROM 
            cotizador_cliente,
            cotizador_cotizacion
        WHERE   
             cotizador_cotizacion.id_cot = '".$id."' AND 
             cotizador_cotizacion.id_cliente_cot = cotizador_cliente.id_cot_cli
        ";
    // echo $consulta;
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $uf_cot = $fila["uf_cot"];
        $credito_cot = $fila["credito_cot"];
        $subsidio_cot = $fila["subsidio_cot"];
        $contado_cot = $fila["contado_cot"];
        $directo_cot = $fila["directo_cot"];
        $nombre_cot_cli = utf8_encode($fila["nombre_cot_cli"]);
        $direccion_cot_cli = utf8_encode($fila["direccion_cot_cli"]);
        $fecha_cot = $fila["fecha_cot"];
        $apellidop_cot_cli = utf8_encode($fila["apellidop_cot_cli"]);
        $apellidom_cot_cli = utf8_encode($fila["apellidom_cot_cli"]);
        $rut_cot_cli = $fila["rut_cot_cli"];
        $contacto_cot_cli = $fila["contacto_cot_cli"];
        $fono_contacto_cot_cli = $fila["fono_contacto_cot_cli"];
        $fono_trabajo_cot_cli = $fila["fono_trabajo_cot_cli"];
        $fono_casa_cot_cli = $fila["fono_casa_cot_cli"];
        $correo_cot_cli = $fila["correo_cot_cli"];
        $celular_cot_cli = $fila["celular_cot_cli"];
        $id_ven = $fila["id_ven"];
        $id_mod = $fila["id_mod"];
        $valor_viv_cot = $fila["valor_viv_cot"];
        $id_con = $fila["id_con"];
        $fecha = date("d-m-Y",strtotime($fecha_cot));
    }
    $contado_cot = $contado_cot + $directo_cot;
    $consulta = 
        "
        SELECT 
            cotizador_proyecto.pro_nom,
            cotizador_proyecto_modelo.nombre_mod
        FROM 
            cotizador_proyecto,
            cotizador_proyecto_modelo
        WHERE   
            cotizador_proyecto_modelo.idcotizador_proyecto_modelo = ".$id_mod." AND
            cotizador_proyecto_modelo.cotizador_pro_cod = cotizador_proyecto.idcotizador_proyecto
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $pro_nom = $fila["pro_nom"];
        $nombre_mod = $fila["nombre_mod"];
    }
    $consulta = 
        "
        SELECT 
            *
        FROM 
            cotizador_vendedor
        WHERE   
             id_ven = '".$id_ven."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $nombre_ven = $fila["nombre_ven"];
        $correo_ven = $fila["correo_ven"];
    }
    $consulta = 
        "
        SELECT 
            *
        FROM 
            cotizador_tipo_contrato
        WHERE   
             id_con = '".$id_con."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $nombre_con = $fila["nombre_con"];
    }

				//---------------------------- FORMATO DE VALORES DE INGRESO DE LA COTIZACION(CREDITO-SUBSIDIO-AHORRO)
                if($valor_viv_cot != 0){
                    $valor_viv_cot_formato = number_format($valor_viv_cot, 2, ',', '.')." UF";
                }
                else{
                    $valor_uf_viv_formato= "";
                }
                if($credito_cot != 0){
                    $credito_cot_formato = number_format($credito_cot, 2, ',', '.')." UF";
                }
                else{
                    $credito_cot_formato= "";
                }
                if($subsidio_cot != 0){
                    $subsidio_cot_formato = number_format($subsidio_cot, 2, ',', '.')." UF";
                }
                else{
                    $subsidio_cot_formato= "";
                }
                if($contado_cot != 0){
                    $contado_cot_formato = number_format($contado_cot, 2, ',', '.')." UF";
                }
                else{
                    $contado_cot_formato= "";
                }
                //---------------------------- VALORES PASADOS A PESOS(CREDITO-SUBSIDIO-AHORRO)
                $valor_viv_cot_peso = $valor_viv_cot * $uf_cot;
                $credito_cot_peso = $credito_cot * $uf_cot;
                $subsidio_cot_peso = $subsidio_cot * $uf_cot;
                $contado_cot_peso = $contado_cot * $uf_cot;
                //---------------------------- FORMATO VALORES PASADOS A PESOS(CREDITO-SUBSIDIO-AHORRO)
                if($valor_viv_cot_peso != ""){
                    $valor_viv_cot_peso_formato = "$ ".number_format($valor_viv_cot_peso, 0, ',', '.');
                }
                else{
                    $valor_viv_cot_peso_formato = "";
                }
                if($credito_cot_peso != ""){
                    $credito_cot_peso_formato = "$ ".number_format($credito_cot_peso, 0, ',', '.');
                }
                else{
                    $credito_cot_peso_formato = "";
                }
                if($subsidio_cot_peso != ""){
                    $subsidio_cot_peso_formato = "$ ".number_format($subsidio_cot_peso, 0, ',', '.');
                }
                else{
                    $subsidio_cot_peso_formato = "";
                }
                if($contado_cot_peso != ""){
                    $contado_cot_peso_formato = "$ ".number_format($contado_cot_peso, 0, ',', '.');
                }
                else{
                    $contado_cot_peso_formato = "";
                }
                //---------------------------- PORCENTAJE Y FORMATO VALORES(CREDITO-SUBSIDIO-AHORRO)
                $credito_cot_porcentaje = ($credito_cot * 100) / $valor_viv_cot;
                $subsidio_cot_porcentaje = ($subsidio_cot * 100) / $valor_viv_cot;
                $contado_cot_porcentaje = ($contado_cot * 100) / $valor_viv_cot;
                if($credito_cot_porcentaje != 0){
                    $credito_cot_porcentaje_formato =   number_format($credito_cot_porcentaje, 2, '.', ',')."%";
                }
                else{
                    $credito_cot_porcentaje_formato = "";
                }
                
                if($subsidio_cot_porcentaje != 0){
                    $subsidio_cot_porcentaje_formato =  number_format($subsidio_cot_porcentaje, 2, '.', ',')."%";
                }
                else{
                    $subsidio_cot_porcentaje_formato = "";
                }
                if($contado_cot_porcentaje != 0){
                    $contado_cot_porcentaje_formato =   number_format($contado_cot_porcentaje, 2, '.', ',')."%";
                }
                else{
                    $contado_cot_porcentaje_formato = "";
                }
			function PMT($i, $n, $p){
                $valor = $i * $p * pow((1 + $i), $n) / (1 - pow((1 + $i), $n));
                return $valor;
            }
            //------------------------------- CALCULO DIVIDENDO A 8 AÑOS
            $credito = -$credito_cot;
            $numero_pago = 12 * 20;
            $interes = 5.00;
            
            $valor_uf_8 = PMT($interes / 1200, $numero_pago, $credito);
            $valor_uf_8_formato = number_format($valor_uf_8, 2, ',', '.');
            $valor_peso_8 = $valor_uf_8_formato * $uf_cot;
            $valor_peso_8_formato = "$ ".number_format($valor_peso_8, 2, ',', '.');
            
            $valor_uf_8_formato_renta = $valor_uf_8_formato * 4;
            $valor_peso_8_renta = $valor_uf_8_formato_renta * $uf_cot;
            $valor_peso_8_formato_renta = "$ ".number_format($valor_peso_8_renta, 2, ',', '.');
            $valor_uf_8_formato_renta = $valor_uf_8_formato_renta." UF";
            $valor_uf_8_formato = $valor_uf_8_formato." UF";
            
            //------------------------------- CALCULO DIVIDENDO A 20 AÑOS
            $credito = -$credito_cot;
            $numero_pago = 12 * 25;
            $interes = 5.00;
            
            $valor_uf_20 = PMT($interes / 1200, $numero_pago, $credito);
            $valor_uf_20_formato = number_format($valor_uf_20, 2, ',', '.');
            $valor_peso_20 = $valor_uf_20_formato * $uf_cot;
            $valor_peso_20_formato = "$ ".number_format($valor_peso_20, 2, ',', '.');
            
            $valor_uf_20_formato_renta = $valor_uf_20_formato * 4;
            $valor_peso_20_renta = $valor_uf_20_formato_renta * $uf_cot;
            $valor_peso_20_formato_renta = "$ ".number_format($valor_peso_20_renta, 2, ',', '.');
            $valor_uf_20_formato_renta = $valor_uf_20_formato_renta." UF";
            $valor_uf_20_formato = $valor_uf_20_formato." UF";
            
            //------------------------------- CALCULO DIVIDENDO A 30 AÑOS
            $credito = -$credito_cot;
            $numero_pago = 12 * 30;
            $interes = 5.00;
            
            $valor_uf_30 = PMT($interes / 1200, $numero_pago, $credito);
            $valor_uf_30_formato = number_format($valor_uf_30, 2, ',', '.');
            $valor_peso_30 = $valor_uf_30_formato * $uf_cot;
            $valor_peso_30_formato = "$ ".number_format($valor_peso_30, 2, ',', '.');
            
            $valor_uf_30_formato_renta = $valor_uf_30_formato * 4;
            $valor_peso_30_renta = $valor_uf_30_formato_renta * $uf_cot;
            $valor_peso_30_formato_renta = "$ ".number_format($valor_peso_30_renta, 2, ',', '.');
            $valor_uf_30_formato_renta = $valor_uf_30_formato_renta." UF";
            $valor_uf_30_formato = $valor_uf_30_formato." UF";


$email_msg1 = "<div id='contenedor' style='font-family: Arial; font-size: 12px'>
        <div id='imprimir'>
        <header>
            <table id='seccion1' width='100%'>
                <tr>
                    <td style='text-align: center'>
                        <div id='logo' style='text-align:center; margin: 0 auto 10px'>
                            <img src='http://www.inmobiliarianova.cl/cotizador/public/assets/img/logo-nova.jpg' width='200' alt='logo'>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 style='font-size:14px; text-align:center; margin: 0px'>INMOBILIARIA NOVA - Avda. El Santo Nº 1656 - (51) 2558 201 - LA SERENA</h4>
                    </td>
                </tr>
            </table>
        <hr width='100%' style='margin-top:5px'>    
        </header>
        <section id='contenido'>
            <table id='seccion2' width='100%'>
                <tr>
                    <td style='font-weight:bolder;'>
                        COTIZACION PROYECTO ".strtoupper($pro_nom)."
                    </td>
                </tr>
            </table>
            <br>
            <table class='cliente' style='border: 1px solid #ccc; border-collapse: collapse; width: 800px; margin: 0px auto 14px;'>
                <thead>
                    <tr>
                        <th colspan='4' style='text-align: left; padding:5px'>Información del Cliente</th>
                    </tr>
                </thead>
                <tr>
                    <td style='padding: 2px 5px'><b>Rut:</b></td>
                    <td style='padding: 2px 5px'>".$rut_cot_cli."</td>
                    <td style='padding: 2px 5px'>
                        <b>Ejecutivo de Ventas:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        ".$nombre_ven."
                    </td>
                </tr>
                <tr>
                    <td style='padding: 2px 5px'><b>Nombre:</b></td>
                    <td style='padding: 2px 5px'>".$nombre_cot_cli." ".$apellidop_cot_cli." ".$apellidom_cot_cli."</td>
                    <td style='padding: 2px 5px'>
                        <b>Fecha:</b><br>
                    </td>
                    <td style='padding: 2px 5px'>
                        ".$fecha."
                    </td>
                </tr>
                <tr>
                    <td style='padding: 2px 5px'><b>Dirección:</b></td>
                    <td style='padding: 2px 5px'>".$direccion_cot_cli."</td>
                    <td style='padding: 2px 5px'>
                        <b>Valor UF:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        $ ".number_format($uf_cot, 2, ',', '.')."
                    </td>
                </tr>
                <tr>
                    <td style='padding: 2px 5px'>
                       <b>Celular:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        ".$celular_cot_cli."
                    </td>
                    <td style='padding: 2px 5px'>
                        <b>Fono Casa:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        51-".$fono_casa_cot_cli."
                    </td>
                </tr>
                <tr>
                    <td style='padding: 2px 5px'>
                        <b>Correo:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        ".$correo_cot_cli."
                    </td>
                    <td style='padding: 2px 5px'>
                        <b>Fono Contacto:</b>
                    </td>
                    <td style='padding: 2px 5px'>
                        ".$fono_contacto_cot_cli."
                    </td>
                </tr>
            </table><br>
            <table id='seccion4' style='border-collapse: collapse; width: 800px; margin: 0px auto 10px;'>
                <tr>
                    <td>
                        <b>Antecedentes de la Vivienda <p></p>
                    </td>
                </tr>
                <tr>
                    <td width='25%' colspan='1'>
                        <b>Proyecto:</b> <br>
                    </td>
                    <td width='25%' colspan='3' align='left'>
                        ".$pro_nom."
                    </td>
                </tr>
                <tr>
                    <td width='25%' colspan='1'>
                        <b>Modelo:</b> <br>
                    </td>
                    <td width='25%' colspan='3' align='left'>
                        ".$nombre_mod."
                    </td>
                </tr>
                <tr>
                    <td width='25%' colspan='1'>
                        <b>Tipo de Contrato:</b> <br>
                    </td>
                    <td width='25%' colspan='3' align='left'>
                        ".$nombre_con."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Descripción</b> <br>
                    </td>
                    <td width='25%'>
                        <b>UF</b>
                    </td>
                    <td width='25%'>
                        <b>Pesos</b>  <br>
                    </td>
                    <td width='25%'>
                        <b>Porcentaje</b>
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Valor Vivienda:</b>
                    </td>
                    <td width='25%'>
                        ".$valor_viv_cot_formato."
                    </td>
                    <td width='25%'>
                        ".$valor_viv_cot_peso_formato."
                    </td>
                    <td width='25%'>
                        
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                       <b> Crédito Solicitado: </b><br>
                    </td>
                    <td width='25%'>
                        ".$credito_cot_formato."
                    </td>
                    <td width='25%'>
                        ".$credito_cot_peso_formato."
                    </td>
                    <td width='25%'>
                        ".$credito_cot_porcentaje_formato."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Subsidio Habitacional: </b><br>
                    </td>
                    <td width='25%'>
                        ".$subsidio_cot_formato." 
                    </td>
                    <td width='25%'>
                        ".$subsidio_cot_peso_formato."
                    </td>
                    <td width='25%'>
                        ".$subsidio_cot_porcentaje_formato."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Pago Contado:</b> <br>
                    </td>
                    <td width='25%'>
                        ".$contado_cot_formato." 
                    </td>
                    <td width='25%'>
                        ".$contado_cot_peso_formato."
                    </td>
                    <td width='25%'>
                        ".$contado_cot_porcentaje_formato."
                    </td>
                </tr>
            </table><br>
            <table id='seccion4' style='border-collapse: collapse; width: 800px; margin: 0px auto 14px;'>
                <tr>
                    <td colspan='2'>
                        <b>Antecedentes del Dividendo según Plazos <p></p>
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Descripción</b> <br>
                    </td>
                    <td width='25%'>
                        <b>20 años</b>
                    </td>
                    <td width='25%'>
                        <b>25 años</b>  <br>
                    </td>
                    <td width='25%'>
                        <b>30 años</b>
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Tasa de interés:</b> <br>
                    </td>
                    <td width='25%'>
                        5.00 %
                    </td>
                    <td width='25%'>
                        5.00 %  <br>
                    </td>
                    <td width='25%'>
                        5.00 %
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Dividendo en UF:</b> <br>
                    </td>
                    <td width='25%'>
                        ".$valor_uf_8_formato."
                    </td>
                    <td width='25%'>
                        ".$valor_uf_20_formato."
                    </td>
                    <td width='25%'>
                        ".$valor_uf_30_formato."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Dividendo en Pesos:</b> <br>
                    </td>
                    <td width='25%'>
                        ".$valor_peso_8_formato."
                    </td>
                    <td width='25%'>
                        ".$valor_peso_20_formato."
                    </td>
                    <td width='25%'>
                        ".$valor_peso_30_formato."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                       <b> Renta Líquida Mínima en UF:</b> <br>
                    </td>
                    <td width='25%'>
                        ".$valor_uf_8_formato_renta."
                    </td>
                    <td width='25%'>
                        ".$valor_uf_20_formato_renta."
                    </td>
                    <td width='25%'>
                        ".$valor_uf_30_formato_renta."
                    </td>
                </tr>
                <tr>
                    <td width='25%'>
                        <b>Renta Líquida Mínima en Pesos: </b><br>
                    </td>
                    <td width='25%'>
                        ".$valor_peso_8_formato_renta."
                    </td>
                    <td width='25%'>
                        ".$valor_peso_20_formato_renta."
                    </td>
                    <td width='25%'>
                        ".$valor_peso_30_formato_renta."
                    </td>
                </tr>
            </table>
            
            <table style='margin-top:20px;'>
                <tr>
                    <td>
                        <b>NOTAS</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>1- Esta cotización no es un contrato, por lo tanto no garantiza la compra.</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2- La presente cotización tiene una validez de 3 dias.</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>3- El valor del dividendo no incluye seguros ni impuestos.</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4- El monto exacto del dividendo debe ser proporcionado por la institución financiera que otarga el crédito.</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5- El dividendo calculado es solo referencial.</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>6- La superficie del terreno es aproximada y puede sufrir variaciones.</b>
                    </td>
                </tr>
            </table>
            
            <div class='clear'></div>
        </section>
        </div>";

$headers1  = "From: Inmobiliaria Nova<info@inmobiliarianova.cl>\r\n";
$headers1 .= "Content-Type: text/html; charset=UTF-8\n";
$asunto1 = 'Cotización Inmobiliaria Nova - Proyecto: '.$pro_nom;

  /**************************************/
	mail($correo_cot_cli,$asunto1,$email_msg1,$headers1);

/****************************************/
?>
	
</body>
</html>