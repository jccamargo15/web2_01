<?php  
	$link = mysql_connect('localhost', 'root', '');

	mysql_select_db('web2', $link);

	$valorNome = $valorEmail = $valorPhone = $valorPhoto = $valorSenha = '';


	if (isset($_GET['action']) and !empty($_GET['action'])) {
		$action = $_GET['action'];

		if ($action == 'delet') {
			$id = $_GET['id'];
			mysql_query("DELETE FROM tb_users WHERE id_user = " . $id, $link);
		}

		if ($action == 'edit') {
			$id = $_GET['id'];
			$query = "SELECT * FROM tb_users WHERE id_user = " . $id;
			$edita = mysql_fetch_assoc(mysql_query($query, $link));
			$valorNome = $edita['name'];
			$valorEmail = $edita['email'];
			$valorPhone = $edita['phone'];
			$valorPhoto = $edita['photo'];
			$valorSenha = $edita['pass'];
		}

		if ($action == 'insert') {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['phone'];
			$pass = md5($_POST['senha']);
			$name = $_FILES['photo']['name'];
			$tmp_name = $_FILES['photo']['tmp_name'];
			$nomefoto = date("YmdHis").'_'.$name;

			// $dir = '../img/';
			// move_uploaded_file($tmp_name, $dir.$nomefoto);

			$query = 'INSERT INTO tb_users (name, email, phone, photo, pass) VALUES ("'.$nome.'", "'.$email.'",  "'.$telefone.'", "'.$nomefoto.'", "'.$pass.'")';

			mysql_query($query, $link) or die(mysql_error());
		}
	}
	else {
		$action = 'insert';
	}

	$result = mysql_query("SELECT * FROM tb_users", $link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programação Web 2 - José Carlos de Camargo</title>
</head>
<body>

	<h1>Revisão Programação Web 01</h1>

	<form action="index.php?action=<?php echo $action; ?>" method="post">
		Nome: <input type="text" name="nome" value="<?php echo $valorNome; ?>"> 
		E-mail: <input type="email" name="email" value="<?php echo $valorEmail; ?>"> 
		Telefone: <input type="text" name="phone" value="<?php echo $valorPhone; ?>"> 
		Senha: <input type="pass" name="senha" value="<?php echo $valorSenha; ?>">
		Foto: <input type="file" name="photo">
		<input type="submit" value="Enviar">
	</form>

	<hr>

	<table border="1">
		<tr>
			<td>Código</td>
			<td>E-mail</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Foto</td>
			<td>Senha</td>
			<td>Deletar</td>
			<td>Editar</td>
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
				echo '<td><a href="index.php?action=edit&id=' . $linha['id_user'] . '">Editar</a></td>'; 
				echo '</tr>';
			}
		?>
	</table>
	
</body>
</html>