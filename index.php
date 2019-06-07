<?php include_once "Bcrypt.php"; 
$senha = $_POST['senha'];

echo '<form action="index.php" method="post">
	<input type="txt" name="senha" placeholder="senha">
	<input type="submit" value="enviar">
</form>';

if (isset($_POST['senha'])){
	// Encriptando a senha	
	$hash = Bcrypt::hash($senha);
	// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
	// Salve $hash no banco de dados
	
	// Verificando a senha
	//$senha = 'ola mundo';
	$hash = '$2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm'; // Valor retirado do banco
	if (Bcrypt::check($senha, $hash)) {
		echo 'Senha correta!';
		} else {
			echo 'Senha incorreta!';
		}	
}
