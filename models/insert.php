<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$firstName        = $_POST['firstName']        ?? null;
		$lastName         = $_POST['lastName']         ?? null;
		$email1           = $_POST['email1']           ?? null;
		$class1Frequency  = $_POST['class1Frequency']  ?? null;
		$email2           = $_POST['email2']           ?? null;
		$class2Frequency  = $_POST['class2Frequency']  ?? null;
		$email3           = $_POST['email3']           ?? null;
		$class3Frequency  = $_POST['class3Frequency']  ?? null;
		$email4           = $_POST['email4']           ?? null;
		$class4Frequency  = $_POST['class4Frequency']  ?? null;
		$email5           = $_POST['email5']           ?? null;
		$class5Frequency  = $_POST['class5Frequency']  ?? null;
		$email6           = $_POST['email6']           ?? null;
		$class6Frequency  = $_POST['class6Frequency']  ?? null;
		$email7           = $_POST['email7']           ?? null;
		$class7Frequency  = $_POST['class7Frequency']  ?? null;
		$email8           = $_POST['email8']           ?? null;
		$class8Frequency  = $_POST['class8Frequency']  ?? null;
		$email9           = $_POST['email9']           ?? null;
		$class9Frequency  = $_POST['class9Frequency']  ?? null;
		$email10          = $_POST['email10']          ?? null;
		$class10Frequency = $_POST['class10Frequency'] ?? null;
		$teamAffiliation  = $_POST['teamAffiliation']  ?? null;
		
		$professorEmails = [
			$email1, $email2, $email3, $email4, $email5, $email6, $email7, $email8, $email9, $email10
		];
		//ugly but the only way I could get the db to play nicely with the php.
		foreach ($professorEmails as $email) {
			if ($email === '') {
				$email = null;
			}
		}
		//Pre-production - will be removed before launch.
		try {
			$dsn      = 'mysql:host=localhost;dbname=tw_proto';
			$username = 'tw_proto';
			$password = 'tumbleweed';
			
			$db       = new PDO($dsn, $username, $password);
			
			$insert   = "INSERT INTO students 
				       (firstName, lastName, teamAffiliation)
				VALUES (:firstName, :lastName, :teamAffiliation)";
			
			$insertStatement = $db->prepare($insert);
			
			$insertStatement->bindValue(':firstName',       $firstName);
			$insertStatement->bindValue(':lastName',        $lastName);
			$insertStatement->bindValue(':teamAffiliation', $teamAffiliation);
			
			$insertStatement->execute();
			
			$studentId = $db->lastInsertId();

			$professorInfo = [
				['email' => $email1,  'frequency' =>  $class1Frequency],
				['email' => $email2,  'frequency' =>  $class2Frequency],
				['email' => $email3,  'frequency' =>  $class3Frequency],
				['email' => $email4,  'frequency' =>  $class4Frequency],
				['email' => $email5,  'frequency' =>  $class5Frequency],
				['email' => $email6,  'frequency' =>  $class6Frequency],
				['email' => $email7,  'frequency' =>  $class7Frequency],
				['email' => $email8,  'frequency' =>  $class8Frequency],
				['email' => $email9,  'frequency' =>  $class9Frequency],
				['email' => $email10, 'frequency' =>  $class10Frequency],
			];
				foreach ($professorInfo as $professor) {
					$checkProfessorQuery = "SELECT id FROM professors WHERE email = :email";
            		$checkStatement = $db->prepare($checkProfessorQuery);
            		$checkStatement->bindValue(':email', $professor['email']);
            		$checkStatement->execute();
            		$professorId = $checkStatement->fetchColumn();
				
            		if (!$professorId) {
                		$insertProfessor = "INSERT INTO professors (email, frequency) VALUES (:email, :frequency)";
                		$insertStatement = $db->prepare($insertProfessor);
                		$insertStatement->bindValue(':email', $professor['email']);
                		$insertStatement->bindValue(':frequency', $professor['frequency']);
                		$insertStatement->execute();
                		$professorId = $db->lastInsertId();

                		$insertLink = "INSERT INTO studentsProfessors (studentId, professorId) VALUES (:studentId, :professorId)";
            			$insertStatement = $db->prepare($insertLink);
            			$insertStatement->bindValue(':studentId',   $studentId);
            			$insertStatement->bindValue(':professorId', $professorId);
            			$insertStatement->execute();
            		}
        }
			} catch (PDOException $e) { //remove this error message BEFORE production
		echo 'Error: ' . $e->getMessage();
		header("Location: ../views/studentFailure.php");
	}
		header("Location: ../views/studentSuccess.php");
		exit;
	}
?>