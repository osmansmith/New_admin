<?php
 $conexion = new Conexion;
 $elimina = $_GET['id2'];

 $conexion->consulta("DELETE  FROM cotizador_vendedor WHERE id_ven = ".$elimina."");

 header("location:".URL."admin/user_listado");
?>