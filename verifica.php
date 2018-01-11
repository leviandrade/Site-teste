# voxusprojeto
<?php
/*email para fazer login=levis_maciel@hotmail.com
senha para fazer login=24052716
caso o usuário digite a senha e o email correto ele será direcionado ao formulário
caso erre o email ou a senha uma mensagem de erro é enviada
*/
$email = $_POST['email'];
$senha = $_POST['senha'];
if ($email == "levis_maciel@hotmail.com" && $senha=="24052716")
{
	header("Location: formulario.html");
}else{
	echo"senha ou email incorreto";
}

?>
