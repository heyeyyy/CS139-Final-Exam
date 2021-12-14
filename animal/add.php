<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("INSERT INTO animalstb (name, type_id, color, number_legs, remarks) VALUES (:name, :type_id, :color, :number_legs, :remarks)");

			//bind
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':type_id', $_POST['typeID']);
			$sql->bindParam(':color', $_POST['color']);
            $sql->bindParam(':number_legs', $_POST['legs']);
            $sql->bindParam(':remarks', $_POST['remarks']);

			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Animal was added successfully' : 'Something went wrong. Cannot add Animal.';
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: ../index.php');
	
?>