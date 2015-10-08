<?php 
	
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		
		$username = $_SESSION['username'];

		

		$records = $databaseConnection->prepare('SELECT id,username,password, nom_prenom, dateconx  FROM  houda_login WHERE username = :username');
		$records->bindParam(':username', $username);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		if ( $results['username'] == $username){
			//allow
		}
		else {
			header('location:index.php');
		}
	}
	else {
			header('location:index.php');
	}

?>