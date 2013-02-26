<?php
include "conecta.php";
include "include/valida_sessao.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");	

?>

<form name="envform" class="form-horizontal" action="registrarFalta.php" method="POST">
	
	<fieldset>
	
	<legend>Incluir Curso</legend>
	
	<!--- INPUT Nome Completo --->
	<div class="control-group">
		<label class="control-label" required for="materia">Matéria</label>
		<div class="controls">
			<select name='materia' > 
				<?php
				 $sql = "SELECT * FROM cursos_materia inner join materia on (id_materia=MATERIA_id_materia) where CURSO_id_curso='$id_curso' AND INSTITUICAO_id_instituicao='$id_instituicao'";
				 $res = mysql_query($sql) or die ("Erro: ".mysql_error());
				 $registro="";
				while ($linha = mysql_fetch_array($res, MYSQL_ASSOC)){   
					echo "<option value='".$linha["id_materia"]."'";
					echo ">".$linha["materia"]."</option>";  	
					}
				?>	
				</select>
		</div>
	</div>
	
	<!--- INPUT CPF --->
	<div class="control-group">
		<label class="control-label" for="qtd">Quantidade de Aulas</label>
		<div class="controls">
			<input type='number' name='aulas' required='required'></input>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="motivo">Motivo</label>
		<div class="controls">
			<textarea name='motivo' required='required'></textarea>
		</div>
	</div>
	
	<!--- INPUT E-mail --->
	<div class="control-group">
		<label class="control-label" for="dia">Dia da falta</label>
		<div class="controls">
			<input type='date' name='dia' required='required'></input>		
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
	$materia=$_POST['materia'];
	$qtd_aula=$_POST['aulas'];
	$dia=$_POST['dia'];
	$motivo=$_POST['motivo'];
	$campos=array
		(
			'aulas_id_aula' => $materia,
			'qtd_falta'     => $qtd_aula,   
			'dia_falta'   =>$dia,
			'motivo'   =>$motivo,
			'USUARIO_id_usuario' =>$id_usuario_login
		);
		$sucesso=inclusaobd("materia_faltas",$campos);
	
	 
			if( !$sucesso ) { // se consulta não executou
			die('<script language="JavaScript">self.location="include/erro.php?erro=Não foi possível inserir o registro no Banco De Dados.";</script>');
			
			} else {
				header("location: registrarFalta.php?mensagem=incluido");
			}
	
	
}

?>


