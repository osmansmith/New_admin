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
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
     default:
        echo "algo esta mal hecho";
        break;
}
    
?>
   