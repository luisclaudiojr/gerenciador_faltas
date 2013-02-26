<?php
ob_start();
session_start();
include "conecta.php";
include "funcoes/funcoesbd/funcoesbd.php";
include "funcoes/valida_cpf.php";
	if(isset($_POST['Enviar2']) && $_POST['Enviar2'] == ""){
		
		$usuariologin	=	$_POST['usuario'];
		$senhalogin		=	$_POST['senha'];
		$senha2			=	$_POST['senha2'];
		$email			=	$_POST['email'];
		$cpf			=	$_POST['cpf'];
		$curso			=	$_POST['curso'];
		$instituicao	=	$_POST['instituicao'];
	
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
<script>	
//MÁSCARA DE VALORES
function txtBoxFormat(objeto, sMask, evtKeyPress) {
    var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;


if(document.all) { // Internet Explorer
    nTecla = evtKeyPress.keyCode;
} else if(document.layers) { // Nestcape
    nTecla = evtKeyPress.which;
} else {
    nTecla = evtKeyPress.which;
    if (nTecla == 8) {
        return true;
    }
}

    sValue = objeto.value;

    // Limpa todos os caracteres de formatação que
    // já estiverem no campo.
    sValue = sValue.toString().replace( "-", "" );
    sValue = sValue.toString().replace( "-", "" );
    sValue = sValue.toString().replace( ".", "" );
    sValue = sValue.toString().replace( ".", "" );
    sValue = sValue.toString().replace( "/", "" );
    sValue = sValue.toString().replace( "/", "" );
    sValue = sValue.toString().replace( ":", "" );
    sValue = sValue.toString().replace( ":", "" );
    sValue = sValue.toString().replace( "(", "" );
    sValue = sValue.toString().replace( "(", "" );
    sValue = sValue.toString().replace( ")", "" );
    sValue = sValue.toString().replace( ")", "" );
    sValue = sValue.toString().replace( " ", "" );
    sValue = sValue.toString().replace( " ", "" );
    fldLen = sValue.length;
    mskLen = sMask.length;

    i = 0;
    nCount = 0;
    sCod = "";
    mskLen = fldLen;

    while (i <= mskLen) {
      bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/") || (sMask.charAt(i) == ":"))
      bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))

      if (bolMask) {
        sCod += sMask.charAt(i);
        mskLen++; }
      else {
        sCod += sValue.charAt(nCount);
        nCount++;
      }

      i++;
    }

    objeto.value = sCod;

    if (nTecla != 8) { // backspace
      if (sMask.charAt(i-1) == "9") { // apenas números...
        return ((nTecla > 47) && (nTecla < 58)); } 
      else { // qualquer caracter...
        return true;
      } 
    }
    else {
      return true;
    }
 }
</script>			   
  </head>
  <body>

    <div class="container">

      <form class="form-signin" action="cad_usuario.php" method="post" name="login" id="login">
        <h2 class="form-signin-heading">Cadastrar Usuario </h2>
        <input type="text" class="input-block-level" name="usuario" <?php if(isset($_POST['Enviar2']) && $_POST['Enviar2'] == ""){ echo "value=$usuariologin"; }?> required placeholder="Usuario">
		<Label> Instituição </label>
		<select name='instituicao'>
			<option value="0"></option>
			<?php
				$sql = "SELECT * FROM instituicao ORDER BY nome";
				$res = mysql_query($sql) or die ("Erro: ".mysql_error());
				$registro="";
				while ($linha = mysql_fetch_array($res, MYSQL_ASSOC)){
					echo "<option value='".$linha["id_instituicao"]."'";
					echo ">".$linha["nome"]."</option>";  	
				}
			?>
		</select>
		<Label> Curso </label>
		<select name='curso'>
			<option value="0"></option>
			<?php
				$sql = "SELECT * FROM curso ORDER BY nome_curso";
				$res = mysql_query($sql) or die ("Erro: ".mysql_error());
				$registro="";
				while ($linha = mysql_fetch_array($res, MYSQL_ASSOC)){
					echo "<option value='".$linha["id_curso"]."'";
					echo ">".$linha["nome_curso"]."</option>";  	
				}
			?>
		</select>
		<input type="text" name="cpf" required  placeholder="CPF" <?php if(isset($_POST['Enviar2']) && $_POST['Enviar2'] == ""){ echo "value=$cpf"; }?> onkeypress="return txtBoxFormat(this, '999.999.999-99', event);"  maxlength="14">
		<input type="email" class="input-block-level" name="email" <?php if(isset($_POST['Enviar2']) && $_POST['Enviar2'] == ""){ echo "value=$email"; }?> required placeholder="Email">
        <input type="password"  class="input-block-level" required placeholder="Senha" name='senha'>
		<input type="password" class="input-block-level" required placeholder="Repita a senha" name='senha2'>
		
	<?php include 'include/alerts.php'  ?>
        <center><button class="btn btn-large btn-primary" name="Enviar2" id="Enviar2" type="submit">Cadastrar</button></center>
	<a href='index.php'>Voltar</a>
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
if(isset($_POST['Enviar2']) && $_POST['Enviar2'] == ""){

$cont=0;
	if($senhalogin==$senha2){
		
		$res				=	mysql_query("SELECT * FROM usuario2  WHERE cpf='$cpf'");
		$linhas				=	mysql_num_rows($res);
		$res2				=	mysql_query("SELECT * FROM usuario2  WHERE email='$email'");
		$linhas2			=	mysql_num_rows($res2);
		$res3				=	mysql_query("SELECT * FROM usuario2  WHERE usuario='$usuariologin'");
		$linhas3			=	mysql_num_rows($res3);
		
		if($linhas){
			header ("Location:Cad_usuario.php?mensagem=cpf");			
			$cont++;
		}
		if($linhas2){
			header ("Location:Cad_usuario.php?mensagem=email");	
			$cont++;
		}
		if($linhas3){
			header ("Location:Cad_usuario.php?mensagem=usuario");	
			$cont++;	
		}
		if($curso==0){
			header ("Location:Cad_usuario.php?mensagem=curso");	
			$cont++;	
		}
		if($instituicao==0){
			header ("Location:Cad_usuario.php?mensagem=instituicao");	
			$cont++;	
		}
		$cpf_valida=validaCPF($cpf);
		if($cpf_valida == False){
			header ("Location:Cad_usuario.php?mensagem=cpf_falso");		
			$cont++;	
		}
		IF($cont==0){
		
			$campos=array
			(
				'usuario' => $usuariologin,
				'senha'     => $senhalogin,   
				'cpf'   =>$cpf,
				'email'   =>$email,
				'permissao' =>1,
				'instituicao_id_instituicao' =>$instituicao,
				'curso_id_curso' =>$curso				
			);
			$sucesso=inclusaobd("usuario2",$campos);
			header ("Location:index.php?mensagem=incluido");	
		
		}
	}
}	
?>

