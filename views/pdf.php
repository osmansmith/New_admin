<?
$perfil = session::getValue('perfil');
$id_cot = session::getValue('id_cot');
if(session::exist()){
    
}else{
   header("Location: ".URL."user/salir");
}
/*if($perfil<>0 || $perfil<>1){
    header("Location: ".URL."user/salir");
}*/
$conexion = new conexion();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Panel</title>
    <link href="<?php echo URL;?>public/assets/css/pdf.css" rel="stylesheet" />
    <script src="<?php echo URL?>public/assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){       
        $('#correo').click(function() {
            $.ajax({                
                url: "<?php echo URL?>index/correo",
                success: function(data) {
                    alert("Envío de correo con exito");
                }           
            })
        });
    });
    function imprimir(e){
      e.event.preventDefault();
      var objeto=document.getElementById('imprimir');  //obtenemos el objeto a imprimir
      var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
      ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
      ventana.document.close();  //cerramos el documento
      ventana.print();  //imprimimos la ventana
      ventana.close();  //cerramos la ventana
    }
    </script>
</head>
<body>
	<?
	$id = $id_cot;
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
			cotizador_cotizacion.id_viv,
			cotizador_cotizacion.id_con,
			contacto_contacto_especifica.nombre_con_esp,
			contacto_contacto_especifica.direccion_con_esp,
			contacto_contacto_especifica.papellido_con_esp,
			contacto_contacto_especifica.mapellido_con_esp,
			contacto_contacto_especifica.rut_con_esp,
			contacto_contacto_especifica.contacto_con_esp,
			contacto_contacto_especifica.fono_contacto_con_esp,
			contacto_contacto_especifica.codigo_gescon_con_esp,
			contacto_contacto_especifica.fono_casa_con_esp,
			contacto_contacto_especifica.fono_contacto_con_esp,
			contacto_contacto_especifica.correo_con_esp,
			contacto_contacto_especifica.celular_con_esp
        FROM 
            contacto_contacto_especifica,
			cotizacion_cotizacion
		WHERE	
			 cotizacion_cotizacion.id_cot = '".$id."' AND 
			 cotizacion_cotizacion.id_cotizacion_cot = contacto_contacto_especifica.id_cont_esp
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $uf_cot = $fila["uf_cot"];
		$credito_cot = $fila["credito_cot"];
		$subsidio_cot = $fila["subsidio_cot"];
		$contado_cot = $fila["contado_cot"];
		$directo_cot = $fila["directo_cot"];
		$nombre_con_esp = $fila["nombre_con_esp"];
		$direccion_con_esp = $fila["direccion_con_esp"];
		$fecha_cot = $fila["fecha_cot"];
		$papellido_con_esp = $fila["papellido_con_esp"];
		$mapellido_con_esp = $fila["mapellido_con_esp"];
		$rut_con_esp = $fila["rut_con_esp"];
		$contacto_con_esp = $fila["contacto_con_esp"];
		$fono_contacto_con_esp = $fila["fono_contacto_con_esp"];
		$fono_trabajo_con_esp = $fila["fono_trabajo_con_esp"];
		$fono_casa_con_esp = $fila["fono_casa_con_esp"];
		$fono_contacto_con_esp = $fila["fono_contacto_con_esp"];
		$codigo_gescon_con_esp = $fila["codigo_gescon_con_esp"];
		$correo_con_esp = $fila["correo_con_esp"];
		$celular_con_esp = $fila["celular_con_esp"];
		$id_ven = $fila["id_ven"];
		$id_viv = $fila["id_viv"];
		$id_con = $fila["id_con"];
		$fecha = date("d-m-Y",strtotime($fecha_cot));
    }
	$contado_cot = $contado_cot + $directo_cot;
	$consulta = 
        "
        SELECT 
			*
        FROM 
            cotizacion_proyecto
		WHERE	
			 id_pro = '".$codigo_gescon_con_esp."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $nombre_pro = $fila["nombre_pro"];
    }
	$consulta = 
        "
        SELECT 
			*
        FROM 
            cotizacion_vendedor
		WHERE	
			 id_ven = '".$id_ven."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $nombre_ven = $fila["nombre_ven"];
		$apellidop_ven = $fila["apellidop_ven"];
		$apellidom_ven = $fila["apellidom_ven"];
		$correo_vendedor_cot = $fila["correo_ven"];
		$fono_vendedor_cot = $fila["fono_ven"];
    }
	$consulta = 
        "
        SELECT 
			*
        FROM 
            cotizacion_tipo_contrato
		WHERE	
			 id_con = '".$id_con."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $nombre_con = $fila["nombre_con"];
    }
	$consulta = 
        "
        SELECT 
			*
        FROM 
            cotizacion_vivienda
		WHERE	
			 id_viv = '".$id_viv."'
        ";
    $conexion->consulta($consulta);
    while ($fila = $conexion->extraer_registro()) {
        $manzana_viv = $fila["manzana_viv"];
		$sitio_viv = $fila["sitio_viv"];

        $aporte_iva = $fila['aporte_iva'];

        // si es 0 no lo hace
        if ($aporte_iva>0) {
            $puntos = 1;
            $valor_uf_viv = $fila['valor_uf_viv'] + ($fila['valor_uf_viv'] * $aporte_iva/100);
            $iva = $fila['valor_uf_viv'] * $aporte_iva/100;
        } else {
            $puntos = 0;
            // $_SESSION["valor_vivienda_porcentaje"] = $fila['valor_uf_viv'];
            $valor_uf_viv = $fila['valor_uf_viv'];
        }
    }
	?>
	<div id="contenedor">
    	<div id="imprimir">
    	<header>
        	<table id="seccion1" width="100%">
            	<tr>
                	<td width="60%">
                        <div id="logo">
                            <img src="img/logo_iserena.jpg" width="113" height="146" alt="logo">
                        </div>
                    </td>
                    <td width="40%">
                    	<!-- EMPRESA: INMOBILIARIA SERENA<br>
                        DIRECCION: LOS CARRERA 110<br>
                        FONO 2221543 <br> -->
                        CIUDAD: LA SERENA
                    </td>
                </tr>
            </table>
            <hr width=100%>	
        </header>
        <section id="contenido">
        	<table id="seccion2" width="100%">
            	<tr>
                	<td style="font-weight:bolder;">
                        COTIZACION PROYECTO <?=$nombre_pro?> (N° <?=$id?>)
                    </td>
                </tr>
            </table>
        	<br>
            <table id="seccion3" width="800px" align="center">
            	<tr>
                	<td>
                        <b>Antecedentes del Cliente</b> <p>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Rut:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$rut_con_esp?>
                    </td>
                    <td width="25%">
                        <b>Fecha:</b>  <br>
                    </td>
                    <td width="25%">
                    	<?=$fecha?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Nombre:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$nombre_con_esp?> <?=$papellido_con_esp?> <?=$mapellido_con_esp?>
                    </td>
                    <td width="25%">
                        <b>Valor UF:</b>  <br>
                    </td>
                    <td width="25%">
                    	<?="$".number_format($uf_cot, 2, ',', '.')?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Dirección:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$direccion_con_esp?>
                    </td>
                    <td width="25%">
                        <b>Fono Casa:</b>  <br>
                    </td>
                    <td width="25%">
                    	051- <?=$fono_casa_con_esp?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                       <b>Celular:</b> <br>
                    </td>
                    <td width="25%">
                    	9-<?=$celular_con_esp?>
                    </td>
                    <td width="25%">
                        <b>Ejecutivo de Ventas:</b>  <br>
                    </td>
                    <td width="25%">
                    	<?=$nombre_ven?> <?=$apellidop_ven?> <?=$apellidom_ven?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Correo:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$correo_con_esp?>
                    </td>
                    <td width="25%">
                        <b>Fono Contacto:</b>  <br>
                    </td>
                    <td width="25%">
                    	<?=$fono_contacto_con_esp?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Correo Vendedor:</b> <br>
                    </td>
                    <td width="25%">
                    	<? //=$correo_vendedor_cot?>
                    </td>
                    <td width="25%">
                        <b>Fono Vendedor:</b>  <br>
                    </td>
                    <td width="25%">
                    	<?=$fono_vendedor_cot?>
                    </td>
                </tr>
            </table>
            <p><br>
            <table id="seccion4" width="800px" align="center" style="margin-top:-30px;">
            	<tr>
                	<td>
                        <b>Antecedentes de la Vivienda <p></p>
                    </td>
                </tr>
                <tr>
                	<td width="25%" colspan="1">
                        <b>Proyecto:</b> <br>
                    </td>
                    <td width="25%" colspan="3" align="left">
                    	<?=$nombre_pro?>
                    </td>
                </tr>
                <tr>
                	<td width="25%" colspan="1">
                        <b>Vivienda:</b> <br>
                    </td>
                    <td width="25%" colspan="3" align="left">
                    	<?=$manzana_viv?>-<?=$sitio_viv?>
                    </td>
                </tr>
                <tr>
                	<td width="25%" colspan="1">
                        <b>Tipo de Contrato:</b> <br>
                    </td>
                    <td width="25%" colspan="3" align="left">
                    	<?=$nombre_con?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Descripción</b> <br>
                    </td>
                    <td width="25%">
                    	<b>UF</b>
                    </td>
                    <td width="25%">
                        <b>Pesos</b>  <br>
                    </td>
                    <td width="25%">
                    	<b>Porcentaje</b>
                    </td>
                </tr>
                <?
				//---------------------------- FORMATO DE VALORES DE INGRESO DE LA COTIZACION(CREDITO-SUBSIDIO-AHORRO)
				if($valor_uf_viv != 0){
					$valor_uf_viv_formato = number_format($valor_uf_viv, 2, ',', '.')." UF";
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
				$valor_uf_viv_peso = $valor_uf_viv * $uf_cot;
				$credito_cot_peso = $credito_cot * $uf_cot;
				$subsidio_cot_peso = $subsidio_cot * $uf_cot;
				$contado_cot_peso = $contado_cot * $uf_cot;
				//---------------------------- FORMATO VALORES PASADOS A PESOS(CREDITO-SUBSIDIO-AHORRO)
				if($valor_uf_viv_peso != ""){
					$valor_uf_viv_peso_formato = "$ ".number_format($valor_uf_viv_peso, 0, ',', '.');
				}
				else{
					$valor_uf_viv_peso_formato = "";
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
				$credito_cot_porcentaje = ($credito_cot * 100) / $valor_uf_viv;
				$subsidio_cot_porcentaje = ($subsidio_cot * 100) / $valor_uf_viv;
				$contado_cot_porcentaje = ($contado_cot * 100) / $valor_uf_viv;
				if($credito_cot_porcentaje != 0){
					$credito_cot_porcentaje_formato = 	number_format($credito_cot_porcentaje, 2, '.', ',')."%";
				}
				else{
					$credito_cot_porcentaje_formato = "";
				}
				
				if($subsidio_cot_porcentaje != 0){
					$subsidio_cot_porcentaje_formato = 	number_format($subsidio_cot_porcentaje, 2, '.', ',')."%";
				}
				else{
					$subsidio_cot_porcentaje_formato = "";
				}
				if($contado_cot_porcentaje != 0){
					$contado_cot_porcentaje_formato = 	number_format($contado_cot_porcentaje, 2, '.', ',')."%";
				}
				else{
					$contado_cot_porcentaje_formato = "";
				}
                ?>
                <tr>
                	<td width="25%">
                        <b>Valor Vivienda:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_uf_viv_formato?>
                    </td>
                    <td width="25%">
                        <?=$valor_uf_viv_peso_formato?> <br>
                    </td>
                    <td width="25%">
                    	
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                       <b> Crédito Solicitado: </b><br>
                    </td>
                    <td width="25%">
                    	<?=$credito_cot_formato?>
                    </td>
                    <td width="25%">
                        <?=$credito_cot_peso_formato?>  <br>
                    </td>
                    <td width="25%">
                    	<?=$credito_cot_porcentaje_formato?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Subsidio Habitacional: </b><br>
                    </td>
                    <td width="25%">
                    	<?=$subsidio_cot_formato?> 
                    </td>
                    <td width="25%">
                        <?=$subsidio_cot_peso_formato?><br>
                    </td>
                    <td width="25%">
                    	<?=$subsidio_cot_porcentaje_formato?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Pago Contado:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$contado_cot_formato?> 
                    </td>
                    <td width="25%">
                        <?=$contado_cot_peso_formato?> <br>
                    </td>
                    <td width="25%">
                    	<?=$contado_cot_porcentaje_formato?>
                    </td>
                </tr>
            </table>
            <p><br>
            <?
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
			?>
            <table id="seccion4" width="800px" align="center" style="margin-top:-30px;">
            	<tr>
                	<td colspan="2">
                        <b>Antecedentes del Dividendo según Plazos <p></p>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Descripción</b> <br>
                    </td>
                    <td width="25%">
                    	<b>20 años</b>
                    </td>
                    <td width="25%">
                        <b>25 años</b>  <br>
                    </td>
                    <td width="25%">
                    	<b>30 años</b>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Tasa de interés:</b> <br>
                    </td>
                    <td width="25%">
                    	5.00 %
                    </td>
                    <td width="25%">
                        5.00 %  <br>
                    </td>
                    <td width="25%">
                    	5.00 %
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Dividendo en UF:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_uf_8_formato?>
                    </td>
                    <td width="25%">
                        <?=$valor_uf_20_formato?>  <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_uf_30_formato?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Dividendo en Pesos:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_peso_8_formato?>
                    </td>
                    <td width="25%">
                        <?=$valor_peso_20_formato?> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_peso_30_formato?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                       <b> Renta Líquida Mínima en UF:</b> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_uf_8_formato_renta?>
                    </td>
                    <td width="25%">
                        <?=$valor_uf_20_formato_renta?> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_uf_30_formato_renta?>
                    </td>
                </tr>
                <tr>
                	<td width="25%">
                        <b>Renta Líquida Mínima en Pesos: </b><br>
                    </td>
                    <td width="25%">
                    	<?=$valor_peso_8_formato_renta?>
                    </td>
                    <td width="25%">
                        <?=$valor_peso_20_formato_renta?> <br>
                    </td>
                    <td width="25%">
                    	<?=$valor_peso_30_formato_renta?>
                    </td>
                </tr>
            </table>
            
            <table style="margin-top:20px;">
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
                <?php 
                if ($puntos==1) {
                    ?>
                    <tr>
                        <td>
                            <b>7- El precio de <?php echo number_format($valor_uf_viv, 2, ',', '.');?> U.F., incluye <?php echo number_format($iva, 2, ',', '.');?> U.F., agregadas por concepto de Impuesto Al Valor Agregado (I.V.A.), establecido para la Venta Habitual de Inmuebles por la Reforma Tributaria de la ley N° 20.780 del 29/09/2014.-</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>8- Para el caso que el Prometiente Comprador obtenga y pague parte del precio con un subsidio Habitacional o se modifique la Reforma tributaria y no sea necesario pagar las <?php echo number_format($iva, 2, ',', '.');?> U.F., de I.V.A. incluidas en el precio, estas se deducirán de dicho precio para todos los efectos.-</b>
                        </td>
                    </tr>
                    <?php
                }
                 ?>
            </table>
            
            <div class="clear"></div>
        </section>
        </div>
        <table style="margin-top:30px; margin:auto">
            <tr>
            <td align="right"><input type="button" value="Volver" onclick="javascript:window.location='area_ventas.php'"/></td>
                <td align="center"><input type="button" value="Imprimir" onclick="imprimir();"/></td>
                <td  align="left"><input type="button" value="Envío por Correo" id="correo"/></td>
            </tr>
        </table>
    </div>
</body>
</html>