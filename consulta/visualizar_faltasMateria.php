<?php
include "conecta.php";
include "funcoes/funcoesbd/funcoesbd.php";
mysql_query("SET NAMES UTF8");
echo "<table class='table table-striped' >
		<tr>
			<th>Matéria</th>
			<th>Professor</th>
			<th>Carga Horaria</th>
			<th>Número de Faltas</th>
			<th>Verificar Faltas</th>
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
		$consulta2			= 	"select sum(qtd_falta) from materia_faltas where CURSOS_MATERIA_id_curso_materia='$id_curso_materia' AND USUARIO_id_usuario='$id_usuario_login'";
		$resultado2			= 	mysql_query($consulta2);
		$query 				= 	mysql_fetch_array($resultado2); 
		$num_faltas			= 	$query['sum(qtd_falta)'];
		
		if(!isset($num_faltas)){
			$num_faltas=0;
		}
		
			echo"<tr>		
				<td >".$materia."</td>
				<td>".$professor."</td>
				<td>".$carga_horaria." Horas</td>
				<td>".$num_faltas." Faltas </td>";
				if($num_faltas!=0){
					echo"
					<td><a href='visualizarFaltasDetalhe.php?id=$id_materia'><button type='reset' class='btn btn-success'>Ver-Faltas</button></a></td> 
					</tr>";
				}else{echo"<td>&nbsp;</td>";}	
	}
echo "</table>";
?>