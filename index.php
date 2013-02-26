<?php
ob_start();
session_start();

	if(isset($_POST['Enviar']) && $_POST['Enviar'] == ""){
		
		$usuariologin	=	$_POST['usuario'];
		$senhalogin		=	$_POST['senha'];
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Gerenciador de Faltas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="_assets/css/bootstrap.css" rel="stylesheet">
      <script src="_assets/js/jquery-1.8.3.min.js"></script>
      <script src="_assets/js/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="_assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="_assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="_assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="_assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="_assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="_assets/ico/favicon.png">
  </head>
  <body>

    <div class="container">
      <form class="form-signin" action="index.php" method="post" name="login" id="login">
        <h2 class="form-signin-heading">Insira os Dados </h2>
        <input type="text" class="input-block-level" name="usuario" required placeholder="Usuario">
        <input type="password" class="input-block-level" required placeholder="Senha" name='senha'>
	<p><a href="Cad_usuario.php">Cadastre-se</a></p>
	<?php include 'include/alerts.php'  ?>

        <button class="btn btn-large btn-primary" name="Enviar" id="Enviar" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="_assets/js/jquery.js"></script>
    <script src="_assets/js/bootstrap-transition.js"></script>
    <script src="_assets/js/bootstrap-alert.js"></script>
    <script src="_assets/js/bootstrap-modal.js"></script>
    <script src="_assets/js/bootstrap-dropdown.js"></script>
    <script src="_assets/js/bootstrap-scrollspy.js"></script>
    <script src="_assets/js/bootstrap-tab.js"></script>
    <script src="_assets/js/bootstrap-tooltip.js"></script>
    <script src="_assets/js/bootstrap-popover.js"></script>
    <script src="_assets/js/bootstrap-button.js"></script>
    <script src="_assets/js/bootstrap-collapse.js"></script>
    <script src="_assets/js/bootstrap-carousel.js"></script>
    <script src="_assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
<?php	
if(isset($_POST['Enviar']) && $_POST['Enviar'] == ""){

include "conecta.php";

	if(($usuariologin!=	"") && ($senhalogin!=	"")){
		$senha1				=	$senhalogin;
		$res				=	mysql_query("SELECT * FROM usuario2  WHERE senha='$senha1'  and usuario='$usuariologin' ");
		$linhas				=	mysql_num_rows($res);
		$dados				=	mysql_fetch_array($res);
		$bd_usuario			=	$dados['usuario'];
		$bd_senha			=	$dados['senha'];
		$id_usuario_login	=	$dados['id_usuario'];
		$id_instituicao		=	$dados['INSTITUICAO_id_instituicao'];
		$id_curso			=	$dados['CURSO_id_curso'];
		
	if(($bd_usuario	==  $usuariologin) && ($senha1	==  $bd_senha) ){
		$bd_permissao					=	$dados['permissao'];							
		$_SESSION['usuario']			=	$usuariologin;
		$_SESSION['id_usuario_login']	=	$id_usuario_login;
		$_SESSION['permissao']			=	$bd_permissao;
		$_SESSION['id_instituicao']		=	$id_instituicao;
		$_SESSION['id_curso']			=	$id_curso;
		$_SESSION['id_sessao']			=	session_id();
		
		header ("Location:dashboard.php");	
	}
		else{
		header ("Location:index.php?mensagem=login");
			}
	}
}	
?>
