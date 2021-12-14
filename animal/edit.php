<?php
	session_start();
	include_once('../include/database.php');
	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("UPDATE animalstb SET name = :name, type_id = :type_id, color = :color, number_legs = :number_legs, remarks = :remarks WHERE id = :id");

            //bind 
            $sql->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':type_id', $_POST['typeID']);
			$sql->bindParam(':color', $_POST['color']);
            $sql->bindParam(':number_legs', $_POST['legs']);
            $sql->bindParam(':remarks', $_POST['remarks']);
            
			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Updated animal info successfully' : 'Something went wrong. Cannot edit animal.';	
	    
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