<?PHP
include 'include/valida_sessao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
	
	<!--- Head --->
	<?php include 'include/head.php' ?>
	
	
<body>
	
	<!--- Loading --->
	<?php include 'include/loading.php' ?>
	
	<!--- Navbar --->
	<?php include 'include/layout_navbar.php' ?>
	
	<div class="larguraDoSite content">
		<div class="container-fluid">
			<div class="row-fluid">
			
				<!--- Sidebar --->
				<?php include 'include/layout_sidebar.php' ?>
				
				<!--- Conteúdo desta página --->
				<div class="span9">
					
					<!--- widget --->
					<div class="widget">
						
						<div class="widget-header">
							<i class="icon-th-list icon-white"></i>
							<h3>Visualizar Faltas Detalhadas</h3>
							<span class="caret pull-right"></span>
						</div> <!-- /widget-header -->
						
						<div class="widget-content">
						
							<?php include 'include/alerts.php' ?>
						
							<legend>Relatório de Faltas Detalhadas</legend>
							<?php include 'consulta/visualizar_faltasDetalhe.php' ?>
							
						</div> <!-- /widget-content -->
						
					</div>
					<!---/ widget --->
					
				</div>
				<!---/ Conteúdo desta página --->
			
			</div>
			<!---/ row --->
			
		</div>
		<!---/ Container --->
		
	</div>
	<!---/ Content --->
	
	
	<!--- Footer --->
	<?php include 'include/footer.php' ?>
	
	<!--- Javascript --->
	<?php include 'include/javascript.php' ?>
	
	
	
</body>
</html>