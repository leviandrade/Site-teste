# voxusprojeto
<?php
//conecta.php
$host="127.0.0.1";
$user="root";
$pass="";
$banco="BD_trabalho";
mysql_connect($host , $user , $pass , $banco) or die("Erro de conexão".mysql_error( ));
mysql_select_db($banco) or die(mysql_error());

?>
