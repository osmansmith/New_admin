<?php

$conexion = new conexion();
$token = $_POST["token"];


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
            $valor_vivienda = $_POST["valor_vivienda"];
                      
            $imprimir = ($porcentaje * $valor_vivienda) / 100;            
            $resta = $valor_vivienda - $imprimir;            
        
            $jsondata['valor'] = $imprimir;
            $imprimir = number_format($imprimir, 2, ',', '.');
            $jsondata['formato'] = $imprimir." UF";
            $jsondata['resta'] = $resta;
            
            echo json_encode($jsondata);
            /*exit();*/
        break;
    case 2:
        echo "i es igual a 2";
        break;
     default:
        echo "algo esta mal hecho";
        break;
}
    
?>
   