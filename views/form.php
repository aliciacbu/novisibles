<form action="main/upload" method="post" id="uploadForm" enctype="multipart/form-data">
	<div class="form-group">
    	<label for="fileToUpload"><strong>Carrega l'excel novisibles.xls d'aquest mes:</strong></label>
    	<input type="file" name="fileToUpload" id="fileToUpload"  class="form-control-file">
    </div>
    <div class="form-group">
    	<input type="submit" value="Enviar i processar dades" name="submit" class="btn btn-primary" onclick="showDiv()">
    </div>
</form>
<!-- Image loader -->
<div id='loader' class="loader" style='display: none;'>
  <img src='<?php echo BASEPATH . '/src/loading-9.gif' ?>' width='480px' height='270px'>
</div> 
