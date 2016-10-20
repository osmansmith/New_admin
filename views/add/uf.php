<?			
$fecha_hoy = date("Y-m-d H:i:s");

echo $fecha_hoy;

$url_indicadores = 'http://si3.bcentral.cl/indicadoresvalores/secure/indicadoresvalores.aspx';

if( ini_get('allow_url_fopen') ) { // Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
	$contenido_url = file_get_contents($url_indicadores);
} else { // De otra forma utilizamos cURL
	$curl = curl_init($url_indicadores);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$contenido_url = curl_exec($curl);
	curl_close($curl);
}

if ( !empty($contenido_url) ) {
	preg_match_all('/<span[^>]+>(.*?)<\/span>/', $contenido_url, $array_datos);
	//echo '<pre>'; print_r($array_datos); echo '</pre>';
	
	$indicadores[] = array( //UF
			0 => 'UF', //$array_datos[1][1],
			1 => str_replace(',', '.', preg_replace('/[^0-9,]/', '', $array_datos[1][2]))
	);
	$indicadores[] = array( //UTM
			0 => 'UTM', //$array_datos[1][3],
			1 => str_replace(',', '.', preg_replace('/[^0-9,]/', '', $array_datos[1][4]))
	);	
	$indicadores[] = array( //Dólar
			0 => 'Dólar', //$array_datos[1][5],
			1 => str_replace(',', '.', preg_replace('/[^0-9,]/', '', $array_datos[1][6]))
	);
	$clave = array_search('Euro', $array_datos[1]);
	$indicadores[] = array( //Euro
			0 => 'Euro', //$array_datos[1][7],
			1 => str_replace(',', '.', preg_replace('/[^0-9,]/', '', $array_datos[1][8])) //$array_datos[1][8]
	);
	$clave = array_search('TCM(02/01/1998=100)', $array_datos[1]);
	$indicadores[] = array( //TCM
			0 => 'TCM', //$array_datos[1][9],
			1 => str_replace(',', '.', preg_replace('/[^0-9,]/', '', $array_datos[1][10])) //$array_datos[1][10]
	);
} else {
	$indicadores[] = array(0 => 'UF', 1 => 0);
	$indicadores[] = array(0 => 'UTM', 1 => 0);
	$indicadores[] = array(0 => 'Dólar', 1 => 0);
	$indicadores[] = array(0 => 'Euro', 1 => 0);
	$indicadores[] = array(0 => 'TCM', 1 => 0);
}
//echo '<pre>'; print_r($indicadores); echo '</pre>';
//echo $indicadores[1][0]; 
//echo $indicadores[1][1]; 
?>