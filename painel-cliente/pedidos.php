<?php 
$pagina = 'pedidos';

$pagina_pag = intval(@$_GET['pagina']);
$itens_pag = intval(@$_GET['itens']);
$agora = date('Y-m-d');

?>
<div class="container ml-2 mr-2">
	<nav class="navbar navbar-expand navbar-white navbar-light">
		
		
		
		<form method="post" id="frm">
			<input type="hidden" name="pag" id="pag" value="<?php echo $pagina_pag ?>">
			<input type="hidden" name="itens_pag" id="itens_pag" value="<?php echo $itens_pag ?>">
		</form>
		

		<div class="direita">
			<!-- SEARCH FORM -->
			<form class="form-inline ml-3 float-right">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-sm mr-sm-2" type="date" name="data" id="data" value="<?php echo $agora ?>">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit" id="btn-buscar">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>

	</nav>

	<div id="listar">
		
	</div>
</div>












<!--AJAX PARA BUSCAR OS DADOS -->
<script type="text/javascript">
	$(document).ready(function(){

		var pag = "<?=$pagina?>";
		$('#btn-buscar').click(function(event){
			event.preventDefault();	
			
			$.ajax({
				url: pag + "/listar.php",
				method: "post",
				data: $('form').serialize(),
				dataType: "html",
				success: function(result){
					$('#listar').html(result)
					
				},
				

			})

		})

		
	})
</script>








<!--AJAX PARA LISTAR OS DADOS -->
<script type="text/javascript">
	$(document).ready(function(){
		
		var pag = "<?=$pagina?>";

		$.ajax({
			url: pag + "/listar.php",
			method: "post",
			data: $('#frm').serialize(),
			dataType: "html",
			success: function(result){
				$('#listar').html(result)

			},

			
		})
	})
</script>



<!--AJAX PARA BUSCAR OS DADOS PELO SELECT -->
<script type="text/javascript">
	$('#data').change(function(){
		$('#btn-buscar').click();
	})
</script>





