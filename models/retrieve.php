<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$teamAffiliation = $_POST['teamAffiliation'] ?? null;
		try {
			$dsn      = 'mysql:host=localhost;dbname=tw_proto';
			$username = 'tw_proto';
			$password = 'tumbleweed';
			
			$db       = new PDO($dsn, $username, $password);
			
			$query    = "SELECT * FROM students 
						 WHERE teamAffiliation = :teamAffiliation";
			
			$queryStatement = $db->prepare($query);
			$queryStatement->bindValue(':teamAffiliation', $teamAffiliation);
			$queryStatement->execute();
			$students = $queryStatement->fetchAll();
			foreach($students as $student) {
				echo "<tr>";
				echo "<td>" . "{$student['firstName']}\t" . "</td>";
				echo "<td>" . "{$student['lastName']}\t"  . "</td>";
				echo "<td>" . "{$student['teamAffiliation']}\t" . "</td>"; 
			}
			//print_r($students);
			//will remove error in production
		} catch (PDOException $e){
				echo 'Error: ' . $e->getMessage();
		}
	}
?>