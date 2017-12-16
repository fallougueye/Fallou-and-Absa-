<!DOCTYPE html>
<html>
<head>
	<title>projet php</title>
	<meta charset="utf-8">
</head>
<body>
	<img src="in.jpeg" />
	<center>
		<form method="POST" action="ajout.php">
		<h1>Add a user</h1>
		<table>
			<tr>
				<td>Login</td><td><input type="text" name="login" required></td>
			</tr>
			<tr>
				<td>Profil</td>
				<td>
					<select name="profil" value="selectioner">
					<option value="">Profil</option>
					<option value="user">User</option>
					<option value="admin">Admin</option>
				</select>
			</td>
			</tr>
		</table><br>
		<input type="submit" name="submit" value="Creer">
	</form><br><br>
	<?php
		include('gener.php');
		extract($_POST);
		if (isset($submit)) {
			if ($profil == "") {
				echo "<h1>Entrer un profil</h1>";
			}
			else{
				$mot = mdp(8);
				$f = fopen("monfichier.txt", "r+");
				$a = verif($f, $login);
			}
				if ($a == 0) {
					fputs($f, "$login, $profil, $mot, complete\n");
					echo "L'utilisateur $login a bien été ajouté avec le mot de passe $mot";
				}
				else {
					echo "the user exist";
					
				fclose($f);	
			}
		}
		

	?>
	</center>
</body>
</html>