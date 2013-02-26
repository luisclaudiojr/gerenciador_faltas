<div class="span3 sidebar">

	<p style="text-align: center">
		<a href="dashboard.php"><img class="logo" src="_assets/img/logo.png" width="90%" ></a>
		<hr />
	</p>
	
	<ul id="main-nav" class="nav nav-tabs nav-stacked">
		
		<li>
			<a href="./dashboard.php">
				<i class="icon-home icon-white"></i>
				Página Inicial
			</a>
		</li>
		
		<li>
			<a href="./RegistrarFalta.php">
				<i class="icon-plus-sign icon-white"></i>
				Registrar Faltas
				
			</a>
		</li>
		
		<li>
			<a href="./VisualizarFaltasGeral.php">
				<i class="icon-search icon-white"></i>
				Visualizar Matérias e Faltas
				
			</a>
		</li>
		
		<li>
			<a href="./VisualizarFaltasMateria.php">
			<i class="icon-search icon-white"></i>
				Visualizar Faltas Por Matérias
			</a>
		</li>
		<?php  
		if($bd_permissao==0){
		
		echo'
			<li>
				<a href="./registrarInstituicao.php">
				<i class="icon-plus-sign icon-white"></i>
					Cadastrar Instituição
				</a>
			</li>
			<li>
				<a href="./VisualizarFaltasMateria.php">
				<i class="icon-plus-sign icon-white"></i>
				Cadastrar Cursos
				</a>
			</li>
			<li>
				<a href="./VisualizarFaltasMateria.php">
				<i class="icon-plus-sign icon-white"></i>
				Cadastrar Matérias nos curso
				</a>
			</li>
	
		';
		
		
		
		}
		
		?>
	</ul>
	
	
	
</div>