# voxusprojeto
<?php
//consulta.php
include "conecta.php";
  $sel ="SELECT * FROM voxus1"; 		   
  $resultado = mysql_query($sel, $link) 
  or die("Erro de consulta!".mysql_error());
  echo mysql_num_rows($resultado)." registros";
while ($linha = mysql_fetch_assoc($resultado)) 
{      echo "<p>codigo: $linha[‘codigo’]</p>";  
          echo "<p>Nome: $linha[‘nome’]</p>";
          echo "<p>descrição: $linha[‘descricao’]</p>";
		  echo "<p>Arquivo: $linha[‘arquivo’]</p>";
 }
	else{
	echo "nenhum registro";
	}
	
  ?>
  
