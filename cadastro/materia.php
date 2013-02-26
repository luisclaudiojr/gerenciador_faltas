<?php
include "../conecta.php";
include "../funcoes/funcoesbd/funcoesbd.php";


if(isset($_POST['Enviar']) && $_POST['Enviar'] == "Enviar"){
$materia=$_POST['materia'];
$professor=$_POST['professor'];
$ch=$_POST['ch'];

$campos=array
	(
		'materia' => $materia,
		'professor'     => $professor,   
		'carga_horaria'   =>$ch          								  
	);
	$sucesso=inclusaobd("materia",$campos);	
	
}
?>
<!DOCTYPE HTML>
<html>
<form name="cadastro_materia" method="POST" action="materia.php">
	<fieldset>
		<legend>Cadastro de Matérias</legend>
			<p>
				<label>Matéria</label>
				<input type='text' name='materia' required='required'></input>
			</p>
			<p>
				<label>Professor</label>
				<input type='text' name='professor' required='required'></input>
			<p>	
			<p>
				<label>Carga Horária </label>
				<input type='text' name='ch' maxlength='4'  required='required'></input>
			<p>	
			<p>
			<input type='submit' value="Enviar" name='Enviar' id='Enviar'>
			</p>
</html>
