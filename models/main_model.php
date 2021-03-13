<?php
/**
 * main page model example
 *
 * */
class Main_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function upload(){

		$dir_subida =  $_SERVER['DOCUMENT_ROOT'].'/novisibles/xls/';
		$fichero_subido = $dir_subida . basename($_FILES['fileToUpload']['name']);


		if( function_exists( "check_doc_mime" ) ) {
			if ( !check_doc_mime( $_FILES['fileToUpload']['tmp_name'] ) ) {
				/*
				 * Not a MIME type we want uploaded to our site, stop here
				 * and return an error message, or just die();
				 */
				header("location:" . BASEPATH . 'main'.'?alert=1');
			} else {
				/*
				 * a MIME type we support is uploaded. Continue with our
				 * upload script
				 */
				if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $fichero_subido)) {
				    //echo "El fitxer s'ha pujat correctament.\n";
				    return $fichero_subido;
		    
				} else {
				    //echo "El fitxer no s'ha pogut pujar al servidor!\n";
				    header("location:" . BASEPATH . 'main'.'?alert=2');
				    /*echo 'Más información de depuración:';
					print_r($_FILES);

					echo($_FILES['fileToUpload']['name']);
					echo $fichero_subido;*/
				}

			}
		}




		

	}


	function parse_arxiu($arxiu){
	set_time_limit(300);
	if ( $xls = SimpleXLS::parse($arxiu) ) {
	$excel = $xls->rows();

	//recórrer la primera columna amb els ID
	for ($i=0; $i< count($excel) -1; $i++){

		try {
		    $response = fetchUrl('https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html');
		    if (preg_match_all('/Horaris/', $response, $matches)){
		 		//desar les URL amb la paraula horaris en un array- columna 0
				$urls[$i][0] = '<a href=" https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html">https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html</a>';
		    	//echo 'Trobat a: https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html </br>';
		    } else{
		    	//desar URL que no tenen horaris - columna 2
		    	$urls[$i][2] = '<a href=" https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html">https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html</a>';
		    	//echo 'No match  </br>';
		    }
		    //curl_close($response);
		} catch (Exception $e) {
		    // desar les URL 404 a l'array- columna 1
		    $urls[$i][1] = '<a href=" https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html">https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html</a> (Error: ' . $e->getMessage() . ')';
		    //echo('Fetch URL failed: ' . $e->getMessage() . ' for https://guia.barcelona.cat/ca/detall/_'.$excel[$i+1][0].'.html  </br>');
		}

	}

	return $urls;

	} else {
		//error al llegir l'excel
		echo SimpleXLS::parseError();
	}
}

}
