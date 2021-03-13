<?php
$url = $this->urls;

$parts = explode('/', $this->file);
$nom_arxiu = end($parts);

?>
<h1>Anàlisi de les URL de l'arxiu <em><?php echo $nom_arxiu ?></em></h1>
<h2>URL trobades amb la paraula horaris</h2>
<?php
for ($j=0; $j< count($url) -1; $j++){
	if (isset($url[$j][0])){
	 	echo '<pre>' . $url[$j][0] . '</pre>';
	}
}
?>
<h2>URL que no s'han pogut carregar</h2>
<?php
for ($k=0; $k< count($url) -1; $k++){
	if (isset($url[$k][1])){
	echo '<pre>'. $url[$k][1] . '</pre>';
	}
}
?>
<h2>URL que estan OK (no tenen horaris)</h2>
<?php
for ($l=0; $l< count($url) -1; $l++){
	if (isset($url[$l][2])){
	echo '<pre>'. $url[$l][2] . '</pre>';
	}
}
?>
<a href="<?php echo BASEPATH ?>" class="btn btn-primary">&laquo; Torna a l'inici</a>