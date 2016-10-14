<?php
$conexion = new conexion();
$token = $_POST["token"];
echo $token;
switch ($token) 
{
    case "Proyecto":
        $proyecto = $_POST["proyecto"];
        $consulta="SELECT * FROM cotizador_proyecto_modelo WHERE cotizador_pro_cod= '".$proyecto."' and estado_mod = 0";
        $conexion->consulta($consulta);
        while ($fila = $conexion->extraer_registro()) 
        {
            $mod = utf8_encode($fila['nombre_mod']);
            $id_mod = $fila['idcotizador_proyecto_modelo'];		
            ?>
            <option value="<?php echo $id_mod?>"><?php echo $mod?></option>
            <?php
        }            
        break;
    case "btn_credito":
            $porcentaje = $_POST["porcentaje"];
            $vivienda = $_POST["vivienda"];
            $consulta="SELECT * FROM cotizacion_vivienda WHERE id_viv= '".$vivienda."'";
            $conexion->consulta($consulta);
            while ($fila = $conexion->extraer_registro()) {
            // $valor = $fila['valor_uf_viv'];

            // NUEVO
            $aporte_iva = $fila['aporte_iva'];

            // si es 0 no lo hace
            if ($aporte_iva>0) {
                $valor = $fila['valor_uf_viv'] + ($fila['valor_uf_viv'] * $aporte_iva/100);

            } else {
                $valor = $fila['valor_uf_viv'];
            }

            }

            //$valor = $_SESSION["valor_vivienda_porcentaje"];
            $imprimir = ($porcentaje * $valor) / 100;
            $resta = $valor - $imprimir;
            //echo $imprimir." UF";
            $jsondata['valor'] = $imprimir;
            $imprimir = number_format($imprimir, 2, ',', '.');
            $jsondata['formato'] = $imprimir." UF";
            $jsondata['resta'] = $resta;
            echo json_encode($jsondata);
            exit();
        break;
    case 2:
        echo "i es igual a 2";
        break;
     default:
        echo "algo esta mal hecho";
        break;
}
    
?>
   