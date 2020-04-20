

<?php	
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$email = $_POST['email'];
	$conf = $_POST['conf'];
if ($email == $conf){
	echo "Nome do usuário: " .$nome."<br>";
	echo "Data de nascimento: " .$data."<br>";
	echo "Email: " .$email."<br><br>";
	echo "CADASTRO EFETUADO COM SUCESSO";
	echo "/ᐠ｡ꞈ｡ᐟ❁ \∫";

}

else{
	
	header('Location: http://localhost/desafio/alert.html');	
}
?>    