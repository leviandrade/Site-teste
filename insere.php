# voxusprojeto
<?php
$link = mysql_connect("127.0.0.1","root","")
           or die("Erro de conexão".mysql_error( ));

		   $criabd="CREATE  DATABASE  IF NOT EXISTS  
voxus";
mysql_query($criabd,$link) 
or die("Erro na criação do banco".mysql_error( ));

mysql_select_db("voxus", $link)
or die("Erro na seleção do banco".mysql_error());
$criatab="CREATE TABLE IF NOT EXISTS  voxus1 (
         codigo VARCHAR(40) NOT NULL, 
         nome VARCHAR(40) NOT NULL,
         descricao VARCHAR(40) NOT NULL,
		 arquivo VARCHAR(40) NOT NULL,
		 
         PRIMARY KEY (codigo))";
 mysql_query($criatab) 
 or die("Erro na criação da tabela".mysql_error());
 
 $codigo1 = $_POST["codigo"];
    $nome1 = $_POST["nome"];
    $descricao1 = $_POST["descricao"];
	$arquivo1 = $_POST["arquivo"];
 $incl ="INSERT INTO `voxus`.`voxus1` (`codigo`, `nome`, `descricao`, `arquivo`) VALUES ('$codigo1', '$nome1', '$descricao1', '$arquivo1')";
 $resultado = mysql_query($incl, $link) 
 or die("Erro de inclusão!".mysql_error());
echo "SEU DADOS FORAM INCUIDOS COM SUCESSO"; 


 
 ?>
