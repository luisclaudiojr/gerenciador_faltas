<?php
include "conecta.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");
echo "<table class='table table-striped' >
			<tr>
				<th>Matéria</th>
				<th>Professor</th>
				<th>Suas Faltas</th>
				<th>Faltas Restantes</th>
				<th>Maximo de Faltas</th>
				<th>Frequencia</th>
			</tr>";

	$consulta	 =	"SELECT * FROM cursos_materia inner join materia on (materia.id_materia=cursos_materia.MATERIA_id_materia)";
	$resultado	 =	mysql_query($consulta);
	while($dados =	mysql_fetch_array($resultado))
	{	
		$materia 			=	$dados['materia'];
		$id_materia			=	$dados['id_materia'];
		$professor			=	$dados['professor'];
		$carga_horaria		=	$dados['carga_horaria'];
		$id_curso_materia	= 	$dados['id_curso_materia'];
		$carga_horaria_min	=	$carga_horaria*60;
		
		$consulta2			= 	"select sum(qtd_falta) from materia_faltas where CURSOS_MATERIA_id_curso_materia='$id_curso_materia' AND USUARIO_id_usuario='$id_usuario_login'";
		$resultado2			= 	mysql_query($consulta2);
		$query 				= 	mysql_fetch_array($resultado2); 
		$soma				= 	$query['sum(qtd_falta)'];
		$soma_min			=	$soma*50;
		$faltas_maximas			= 	($carga_horaria_min*0.25)/50;
		$faltas_reprovar		= 	($faltas_maximas-$soma);
		$aulas_totais			= 	($carga_horaria_min/50);
		$frequencia			=	(100-($soma/$aulas_totais)*100);
		
		$frequencia			= number_format($frequencia,2,'.',''); //coloca apenas duas casas após a virgula
		if($faltas_reprovar<0){
		       $faltas_reprovar	=	"Reprovado";
		}
		if(!isset($soma)){
			$soma		=	0;
			$frequencia	=	100;
		}
		echo"<tr>		
				<td >".$materia."</td>
				<td>".$professor."</td>
				<td>".$soma." Faltas</td>
				<td>".$faltas_reprovar." Faltas</td>
				<td>".$faltas_maximas." Faltas</td>
				<td>".$frequencia." %</td>
				</tr>";
	}	
echo "</table>";
?>