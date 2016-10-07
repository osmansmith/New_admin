<?php
class Conexion
{
	private $servidor;
	private $usuario;
	private $pass;
	private $base_datos;
	private $descriptor;
	private $close;
	private $sql;
	private $sql2;
	private $sql3;
	
	// -------PARAMETROS DE CONEXION
	function __construct(){
		$this->servidor = DB_HOST;
		$this->usuario = DB_USER;
		$this->pass = DB_PASS;
		$this->base_datos = DB_NAME;
		$this->conectar_base_datos();
	}
	// -------CONEXION A UNA BASE DE DATOS
	private function conectar_base_datos(){
		$this->descriptor = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->base_datos);
		if (mysqli_connect_errno()) {
    		?>
			<script language="JavaScript" type="text/javascript">
				alert ("Falló conexión al servidor:<?php printf("%s\n", mysqli_connect_error());?>"); 
			</script>
			<?
			exit();
		}
	}
	// -------PROTECCION PARA INYECCIONES SQL
	public function sanear($valor){
		$variable = mysqli_real_escape_string($this->descriptor,$valor);
		return $variable;
	}
	// -------CIERRA UNA CONEXION
	public function cerrar (){
		$this->close = mysqli_close($this->descriptor);
	}
	// -------EJECUTA UNA CONSULTA A LA BASE DE DATOS
	public function consulta($consulta){
		$this->sql = mysqli_query($this->descriptor,$consulta) ;
		if(!$this->sql){
			$jsondata['envio'] = 3;
			echo json_encode($jsondata);
			exit();
			?>
			<script language="JavaScript" type="text/javascript">
				alert ("Error: <?php //printf("%s\n", mysqli_error($this->descriptor));?>"); 
			</script>
			<?
		}
	}
	// -------EXTRAE LOS REGISTROS DE UNA TABLA
	public function extraer_registro (){
		if ($fila = mysqli_fetch_array($this->sql)){
			return $fila;
		} 
		else {
			return false;
		}
	}
	// -------DEVUELVE EL ULTIMO ID DESPUES DE UNA INSERCION
	public function ultimo_id (){
		$id= mysqli_insert_id($this->descriptor);
		return $id;
	}
	// -------CANTIDAD DE REGISTROS DE UNA CONSULTA
	public function total(){
		$cantidad= mysqli_num_rows($this->sql);
		return $cantidad;
	}
	
	//-------------- CONSULTAS EN CASO DE QUE EXISTAN CONSULTAS MULTIPLES (DECENDENTES)
	public function consulta2($consulta){
		$this->sql2 = mysqli_query($this->descriptor,$consulta) ;
		if(!$this->sql2){
			$jsondata['envio'] = 3;
			echo json_encode($jsondata);
			exit();
			?>
			<script language="JavaScript" type="text/javascript">
				//alert ("Error: <?php //printf("%s\n", mysqli_error($this->descriptor));?>"); 
			</script>
			<?
		}
	}
	//extrae los registros de una consulta
	public function extraer_registro2(){
		if ($registro2 = mysqli_fetch_array($this->sql2)){
			return $registro2;
		} 
		else {
			return false;
		}
	}
	public function total2(){
		$cantidad= mysqli_num_rows($this->sql2);
		return $cantidad;
	}
	public function consulta3($consulta){
		$this->sql3= mysqli_query($this->descriptor,$consulta);
		if(!$this->sql3){
			$jsondata['envio'] = 3;
			echo json_encode($jsondata);
			exit();
			?>
			<script language="JavaScript" type="text/javascript">
				//alert ("Error: <?php //printf("%s\n", mysqli_error($this->descriptor));?>"); 
			</script>
			<?
		}
	}
	public function extraer_registro3(){
		if ($registro3 = mysqli_fetch_array($this->sql3)){
			return $registro3;
		} 
		else {
			return false;
		}
	}
	public function total3(){
		$cantidad= mysqli_num_rows($this->sql3);
		return $cantidad;
	}
}
?>
