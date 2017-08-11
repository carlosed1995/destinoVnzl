
<link href="/public/css/bootstrap-chosen.css" media="all" rel="stylesheet" type="text/css">
<script src="/public/js/jquery.min.js"></script>
<script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>

<select data-placeholder="Seleccione" id="selecionado" name="selecionado"  class="form-control" required>
<?php
  echo $_POST['name'];
  
  ?>
 
		</select>
<script>


  
   $("#selecionado").chosen({

	});
  

</script>