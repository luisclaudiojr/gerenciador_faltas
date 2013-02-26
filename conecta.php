<?php

include "config/config.php";

$con_mysql =mysql_connect($localhost,$usuario,$senha) or die("Erro ao conectar no banco de dados");
mysql_select_db($banco_de_dados,$con_mysql) or die("Erro ao selecionar o banco de dados");

?>