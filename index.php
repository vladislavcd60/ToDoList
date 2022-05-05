<?php


	$db = mysqli_connect('mysql', 'root', 'root', 'to_do_list');



	if(isset($_POST['submit'])) {
		$task = $_POST['task'];
		mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Список дел</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>ToDO List</h1>
		<form action="index.php" method="post">
			<input type="text" name="task" id="task" placeholder="Нужно сделать..." class="text">
			<button type="submit" name="submit" class="btn">Добавить</button>
		</form>

		<?php
			$db = mysqli_connect('mysql', 'root', 'root', 'to_do_list');
			$test = mysqli_query($db,'SELECT * FROM tasks');

			while ($row = mysqli_fetch_array($test)) { ?>
					<td><?php echo $row['id']; ?></td>
					<td class="task"><?php echo $row['task']; ?></td> <br>
				</tr>
			<?php }
		?>
	</div>
</body>
</html>