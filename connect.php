<?php 
	try {
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', '');
	} catch (PDOException $e) {
		// die('Could not connect');
		die($e->getMessage()); //give a description of the error
	}

	$statement = $pdo->prepare('select * from dbtable');
	$statement->execute();

	$results = $statement->fetchAll(PDO::FETCH_OBJ);





	function connectToDb()
	{
		try {
				$pdo = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', '');
			} catch (PDOException $e) {
				// die('Could not connect');
				die($e->getMessage()); //give a description of the error
			}
	}

	$pdo = connectToDb(); //but you can make this call in another file


	function fetchAllTasks($pdo)
	{
		$statement = $pdo->prepare('select * from dbtable');
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}

	$tasks = fetchAllTasks($pdo);
?>