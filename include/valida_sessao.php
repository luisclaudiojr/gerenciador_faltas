<?php
    ob_start();
    @session_start ();
	
    if (!isset($_SESSION['id_sessao']))
	 {
	  unset ($_SESSION['id_sessao']);
?>             
			<script language="javascript">
		alert("SESSÃO NÃO INICIADA - insira USUARIO e SENHA");
				location="index.php";
		</script>

<?php
	  exit;
     } else {
	    if ($_SESSION['id_sessao'] != session_id())
		{
		       unset ($_SESSION['id_sessao']);
		?>             
			<script language="javascript">
					alert("SESSÃO NÃO INICIADA - insira USUARIO e SENHA");
					location="index.php";
		</script>
		<?php
		       exit;
	    }else {
		
				$id_usuario_login	=	$_SESSION['id_usuario_login'];
				$usuariologin		=	$_SESSION['usuario'];
				$usuariologin		=	$_SESSION['usuario'];
				$usuariologin		=	$_SESSION['usuario'];
				$id_instituicao		=	$_SESSION['id_instituicao'];
				$id_curso			= 	$_SESSION['id_curso'];
				$bd_permissao		=	$_SESSION['permissao'];
			}
        }

	//mysql_close($conexao);
?>