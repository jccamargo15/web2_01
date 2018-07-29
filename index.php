<?php  
	$link = mysql_connect('localhost', 'root', '');

	$link = mysql_select_db('web2', $link);


	if (isset($_GET['action']) and !empty($_GET['action'])) {
		$action = $_GET['action'];
		$id = $_GET['id'];

		if ($action == 'delet') {
			mysql_query("DELETE FROM tb_users WHERE id_user = " . $id);
		}
	}

	$result = mysql_query("SELECT * FROM tb_users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programação Web 2 - José Carlos de Camargo</title>
</head>
<body>

	<h1>Revisão Programação Web 01</h1>

	<table border="1">
		<tr>
			<td>Código</td>
			<td>E-mail</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Foto</td>
			<td>Senha</td>
			<td>Deletar</td>
		</tr>
		<?php
			while ($linha = mysql_fetch_assoc($result)) {
				echo '<tr>';
				echo '<td>' . $linha['id_user'] . '</td>';
				echo '<td>' . $linha['email'] . '</td>';
				echo '<td>' . $linha['name'] . '</td>';
				echo '<td>' . $linha['phone'] . '</td>';
				echo '<td>' . $linha['photo'] . '</td>';
				echo '<td>' . $linha['pass'] . '</td>';
				echo '<td><a href="index.php?action=delet&id=' . $linha['id_user'] . '">Deletar</a></td>'; 
				echo '</tr>';
			}
		?>
	</table>
	
</body>
</html>