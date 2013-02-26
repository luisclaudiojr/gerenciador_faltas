<?php
function inclusaobd($tabela, $dados){

	$totcampos = count($dados); 
	$pos = array_keys($dados); 
	$ind = 0;
	$sql = "INSERT INTO $tabela ("; 
	
	while ($ind <= ($totcampos - 1))
		{
			$sql .= $pos[$ind].", ";
			$ind++;
		}
	
	$sql = substr($sql, 0, -2);
	$sql .= ") VALUES (";
	$ind = 0;
	
	while ($ind <= ($totcampos - 1 ))
		{
			$sql .= "'".$dados[$pos[$ind]]."', ";
			$ind++;
		}
	
	$sql = substr($sql, 0, -2);
	$sql .= ")";
	
	$res = mysql_query($sql) or die ("ERRO SQL: ".mysql_error());
	
	if ($res){
		return true;
	}
	else{
		return false;
	}
}

function exclusaobd($tabela, $condicao){

	$res = mysql_query("DELETE FROM $tabela WHERE $condicao");
	
	if ($res){
		return true;
	}
	else{
		
		return false;
	}
}
function alteracaobd($tabela, $dados,$condicao){

	$totcampos = count($dados);  
	$pos = array_keys($dados);
	$ind = 0;
	$sql = "UPDATE $tabela SET ";
	while ($ind <= ($totcampos - 1))   
		{
			$sql .= $pos[$ind]."= '".$dados[$pos[$ind]]."', ";
			$ind++;
		}
		
	$sql = substr($sql, 0, -2); 
	$sql .= "$condicao"; 

	
	$res = mysql_query($sql) or die ("ERRO SQL: ".mysql_error());
	if ($res){
		return true;
	}
	else{
		
		return false;
	}
}


function pesquisabd($tabela,$palavra_chave,$procura,$ordem,$limit){
if($procura ==1){	
	$qr ="SELECT * FROM $tabela  WHERE id_cidade LIKE '%".$palavra_chave."%' ORDER BY id_cidade $ordem LIMIT $limit";
	return $qr;
}else if($procura ==2){	
	$qr ="SELECT * FROM $tabela  WHERE nome LIKE '%".$palavra_chave."%' ORDER BY nome $ordem LIMIT $limit";
	return $qr;
}else{
		$qr ="SELECT * FROM $tabela  ORDER BY nome $ordem LIMIT $limit";
		return $qr;
     }
}

function grafico($dados){
$ind = 0;
$totcampos = count($dados);
while ($ind <= ($totcampos - 1))   
		{
	$testearray[$ind];
	$res=$testearray[$ind];
	}
	if ($res){
		return true;
	}
	else{
		
		return false;
	}
}