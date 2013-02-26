<?php
include "conecta.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");
echo "<table class='table table-striped' >
			<tr>
				<th>Matéria</th>
				<th>Pode Faltar</th>
			</tr>";
	$consulta	 =	"SELECT * FROM cursos_materia inner join materia on (materia.id_materia=cursos_materia.MATERIA_id_materia) ";
	$resultado	 =	mysql_query($consulta);
	while($dados =	mysql_fetch_array($resultado))
	{	
		$materia 			=	$dados['materia'];
		$id_materia 		=	$dados['id_materia'];
		$carga_horaria		=	$dados['carga_horaria'];
		$carga_horaria_min	=	$carga_horaria*60;
		$id_curso_materia	= 	$dados['id_curso_materia'];
		
		$consulta2			= 	"select sum(qtd_falta) from materia_faltas where CURSOS_MATERIA_id_curso_materia='$id_curso_materia' AND USUARIO_id_usuario='$id_usuario_login'";
		$resultado2			= 	mysql_query($consulta2);
		$query 				= 	mysql_fetch_array($resultado2); 
		$soma				= 	$query['sum(qtd_falta)'];
		$soma_min			=	$soma*50;
		
		$faltas_reprovar=($carga_horaria_min*0.25-$soma_min)/50;
		
		if($faltas_reprovar<0){
			$faltas_reprovar="Reprovado";
		}
		echo"<tr>		
				<td >".$materia."</td>
				<td>".$faltas_reprovar." Aulas </td>
				</tr>";
	}	
echo "</table>";
?>