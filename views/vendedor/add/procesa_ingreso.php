<?php
$conexion = new conexion();
$token = $_POST["token"];

switch ($token) {
    case "proyecto":
        $proyecto = $_POST["proyecto"];
        $consulta="SELECT * FROM cotizacion_vivienda WHERE id_pro= '".$proyecto."' AND estado_viv <>4 ORDER BY manzana_viv, sitio_viv ASC";
        $conexion->consulta($consulta);
        while ($fila = $conexion->extraer_registro()) {
        $manzana_viv = utf8_encode($fila['manzana_viv']);
		$sitio_viv = utf8_encode($fila['sitio_viv']);
		$valor_uf_viv = number_format($fila['valor_uf_viv'], 0, '', '.');
		$id_viv = $fila['id_viv'];
        ?>
        <option value="<?=$id_viv?>"><?=$manzana_viv?>-<?=$sitio_viv?></option>
        <?php
    }
        
        
        
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}
    
?>
   