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
					
					
					
					
					<div class="row-fluid">
					
						<div class="span6">
						
							<!--- widget --->
							<div class="widget">
								
								<div class="widget-header">
									<i class=" icon-info-sign icon-white"></i>
									<h3>Bem-Vindo</h3>
									<span class="caret pull-right"></span>
								</div> <!-- /widget-header -->
								
								<div class="widget-content">
								
									<h4>Saiba um pouco sobre isto</h4>
								
									<p>Use o menu lateral para executar as funções.</p>
									<p>O sistema é capaz de inserir matérias e suas respectivas faltas nessa materia, contabilizando suas faltas para controle das mesmas.</p>
									<p>Esse Sistema de Controle de Faltas foi desenvolvido por <strong>Luis Cláudio Padilha - TSI12</strong>.</p>
									
								</div>
								
							</div>
							<!---/ widget --->
						
							<!--- widget --->
							<div class="widget">
								
								<div class="widget-header">
							<i class="icon-th-list icon-white"></i>
							<h3>Visualizar Materias e Faltas possiveis.</h3>
							<span class="caret pull-right"></span>
						</div> <!-- /widget-header -->
						
							<div class="widget-content">
							
									<?php include 'include/alerts.php' ?>
									
								<?php include 'consulta/visualizar_faltasDashboard.php' ?>
						
							</div>
						
							</div>
							<!---/ widget --->
						
						</div>
						
						<div class="span6">
							
						
							
							<!--- widget --->
							<div class="widget">
								
								<div class="widget-header">
									<i class="icon-thumbs-up icon-white"></i>
									<h3>Dicas</h3>
									<span class="caret pull-right"></span>
								</div> <!-- /widget-header -->
								
								<div class="widget-content">

									
									<h4>Use estas dicas para melhorar sua experiência na utilização deste sistema.</h4>
									
									<ol>
									  <li>Você pode clicar na parte Preta doa Boxes, aonde está o título, para escondê-los. Tente!</li>
									
									</ol>
									
								</div>
								
							</div>
							<!---/ widget --->
							
						</div>
						
					</div>
					<!---/ row --->
					
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