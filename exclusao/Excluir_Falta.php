<?php
include "../conecta.php";
include "../funcoes/funcoesbd/funcoesbd.php";
$id_falta				=	$_POST['id'];
$id_materia_selecionada	=	$_POST['id_materia_selecionada'];
// define a instrução SQL a ser executada
$delete = "id_materia_falta='$id_falta'";
$sucesso=exclusaobd("materia_faltas",$delete);

header("location:../visualizarFaltasDetalhe.php?id=$id_materia_selecionada&mensagem=excluido");
?>
