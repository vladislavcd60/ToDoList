<?php
	$task = $_POST['task'];

	if($task === '') {
		echo 'Введите задание';
		exit();
	}

	$dsn = "mysql:host=localhost;dbname=to_do_list";
	$pdo = new PDO($dsn, 'root', 'root');

	$sql = 'INCERT INTO tasks(task) VALUES(:task)';
	$query = $pdo->prepare($sql);
	$query->execute(['task' => $task]);

	header('Location: /');

