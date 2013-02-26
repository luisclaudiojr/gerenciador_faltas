<?php
include "conecta.php";
include "include/valida_sessao.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");	

?>

<form name="envform" class="form-horizontal" action="registrarInstituicao.php" method="POST">
	
	<fieldset>
	
	<legend>Incluir Instituição</legend>
	
	
	<div class="control-group">
		<label class="control-label" for="nome">Nome</label>
		<div class="controls">
			<input type='text' name='nome' required='required'></input>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nome">Cidade</label>
		<div class="controls">
			<input type='text' name='cidade' required='required'></input>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nome">UF</label>
		<div class="controls">
			<input type='text' name='uf' maxlength='2' required='required'></input>
		</div>
	</div>
	
	
	<!--- INPUT Enviar e Apagar --->
	<div class="control-group">
		<div class="controls">
			<input type="submit" class="btn btn-primary" name="Enviar" value="Enviar" />
			<button type="reset" class="btn">Apagar</button>
		</div>
	</div>
	

	
	</fieldset>
	
</form>

<?php
	
if(isset($_POST['Enviar']) && $_POST['Enviar'] == "Enviar"){
	$nome=$_POST['nome'];
	$cidade=$_POST['cidade'];
	$uf=$_POST['uf'];
	$campos=array
		(
		'nome'=> $nome,
		'cidade'=>$cidade,
		'uf'=>$uf
		);
		$sucesso=inclusaobd("instituicao",$campos);
	
	 
			if( !$sucesso ) { // se consulta não executou
			die('<script language="JavaScript">self.location="include/erro.php?erro=Não foi possível inserir o registro no Banco De Dados.";</script>');
			
			} else {
				header("location: registrarInstituicao.php?mensagem=incluido");
			}
	
	
}

?>


