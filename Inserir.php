<?php 
include '../database/mysqli.php' ;

?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// The request is using the POST method{ // Se existir um post, entra!

	$username =  $_POST['username']); 
	// video explicativo do SQL injection  https://youtu.be/nTgFPcYRkys
	$password = $_POST['password']);
	$password = md5($password);
	 
	$sql = "INSERT INTO users (username, passw) VALUES ('$username','$password')";
	if (mysqli_query($conn, $sql)) {
		echo "Novo registo adicionado com sucesso!";
	 } else {
		echo "Erro: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	

    //header("Location: menu.php \n"); // Não existe o utilizador, redirect  para a p�gina de inicio de sess�o.
}

?>