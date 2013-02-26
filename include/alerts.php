<?php // ALERTS
	
	if ( isset($_GET['mensagem']) ) {
	
		$mensagem = $_GET['mensagem'];
	
		if ( $mensagem == "alterado" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Alterado</strong> Sua alteração foi realizada com sucesso! 
				</div>
			<?php
		}

		if ( $mensagem == "email" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Esse Email já está cadastrado no sistema
				</div>
			<?php
		}
		if ( $mensagem == "curso" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Selecione o seu Curso
				</div>
			<?php
		}
		if ( $mensagem == "instituicao" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Selecione a Instituição
				</div>
			<?php
		}
		

		if ( $mensagem == "incluido" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido incluida reserva com sucesso --->
				<div class="alert fade in alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Inclusão Feita com Sucesso</strong> 
				</div>
			<?php
		}
		if ( $mensagem == "cpf" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Esse CPF já está cadastrado no sistema
				</div>
			<?php
		}
		if ( $mensagem == "cpf_falso" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Esse CPF NÃO É VALIDO
				</div>
			<?php
		}
		if ( $mensagem == "usuario" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido alterada reserva com sucesso --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Esse Usuario já está cadastrado no sistema
				</div>
			<?php
		}
		if ( $mensagem == "excluido" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido excluida --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Excluído!</strong> exclusão efetuada com sucesso! 
				</div>
			<?php
		}
		if ( $mensagem == "login" ) {
			
			?>
				<!--- Alert de sucesso casso tenha sido excluida --->
				<div class="alert fade in alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Erro</strong> Usuario ou Senha Incorretos! 
				</div>
			<?php
		}
		
	
		
	}
	?>