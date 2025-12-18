<?php
include('./database/mysqli.php');
?>


<!DOCTYPE html>
<html lang="pt">
<head>
<title>Escola Website - Mostrar dados</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>
<meta charset="UTF-8">
</head>

<body>
<div class= "col-md-6 offset-md-3 text-center bg-light  border-secondary mt-5 col-sm-12">
		<h5  class=" text-secondary"> Listagem de utilizadores</h5>
		<table  id="dtBasicExample" class = "table">
			<tr>
				<th   scope="col">
					<h5> Utilizador <h2>
				</th>
				
				

				<?php
				// Implementar uma solução mais abstracta.
				$query = "SELECT * from users order by username";
				$sql = mysqli_query($conn, $query);
				$users = mysqli_fetch_all($sql, MYSQLI_ASSOC);

				foreach ($users  as $user) {
				
					
				?>
			<tr >
				<td> <?= $user['username'] ?></td>
				<!--<td> <?= $user['passw']  ?></td> -->
				<
			</tr>
			<?php
					}
			?>
		</table>
</div>

				</body>
			</html>