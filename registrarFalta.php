<?PHP
include 'include/valida_sessao.php';
?>
<!DOCTYPE html>
<html lang="en">
	
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
							<i class="icon-pencil icon-white"></i>
							<h3>Incluir Falta</h3>
							<span class="caret pull-right"></span>
						</div> <!-- /widget-header -->
						
						<div class="widget-content">
							<?php include 'include/alerts.php'; ?>
							
							<?php include 'cadastro/registrar_falta.php' ;?>
							
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