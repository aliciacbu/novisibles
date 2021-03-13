<div class="jumbotron">
	<h1 class="display-4">Horaris no visibles</h1>
	<p class="lead">Procediment mensual</p>
	<p class="lead">Descripció</p>
	<p>Aquesta aplicació carrega un l'arxiu d'horaris no visibles al servidor, llegeix la primera columna amb l'ID de l'agenda, forma la URL completa i cerca si apareixen els horaris. Finalment retorna un llistat de les URLS analitzades (trigarà uns 30 segons ⏳ depenent de la llargada de l'arxiu).</p>
	<p class="lead">Requeriments</p>
	<ul>
		<li>Format arxiu: <kbd>xls</kbd></li>
		<li>A la primera columna de l'excel hi ha d'haver l'ID de l'agenda</li>
		<li>L'excel té capçalera a la primera fila</li>
	</ul>
	<p class="lead">Limitacions</p>
	<p>Si en un futur cal pujar l'arxiu en format <kbd>xlsx</kbd> caldrà habilitar la llibreria <kbd>core/SimpleXLSX.php</kbd> (requereix desenvolupament).</p>		
</div>
<?php
	
	if(isset($_GET['alert']) && $_GET['alert'] == 1){
		echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Error!</h4>
             	L'arxiu no s'ha pogut carregar: tipus d'arxiu no permès.
            </div>";
	}
	elseif(isset($_GET['alert']) && $_GET['alert'] == 2){
		echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Error!</h4>
             	L'arxiu no s'ha pogut carregar al servidor.
            </div>";
	}

?>