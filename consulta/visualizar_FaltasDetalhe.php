<?php

$id_materia=$_GET['id'];
include "conecta.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");
$consulta	 =	"SELECT * FROM cursos_materia inner join materia_faltas on (CURSOS_MATERIA_id_curso_materia=id_curso_materia) where materia_id_materia='$id_materia' AND USUARIO_id_usuario='$id_usuario_login'";
$resultado	 =	mysql_query($consulta);

echo 
"	<form name='exclusao' method='POST' action='exclusao/Excluir_Falta.php'>
		<table class='table table-striped' >
			<tr>
				<th>Data</th>
				<th>Quantidade de aulas</th>
				<th>Motivo</th>
				<th>Excluir Falta</th>
			</tr>";
			while($dados =	mysql_fetch_array($resultado))
			{	
				$dia_falta 		   =	$dados['dia_falta'];
				$qtd_falta		   =	$dados['qtd_falta'];
				$motivo 		   = 	$dados['motivo'];
				$id_materia_falta  = 	$dados['id_materia_falta'];
				$dia_falta=date("d/m/Y", strtotime($dia_falta));
				echo"<tr>		
						<td >".$dia_falta."</td>
						<td>".$qtd_falta." Aulas </td>
						<td>".$motivo."</td>
					
							<input type='hidden' name='id' value='$id_materia_falta'>
							<input type='hidden' name='id_materia_selecionada' value='$id_materia'>
						<td><button type='submit' class='btn btn-danger'>Excluir Falta</button></a></td>
						</form> 
					</tr>";
			}	
echo "
		</table>";
?>