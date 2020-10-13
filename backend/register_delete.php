<?php 

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM users WHERE users.id=:user_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':user_id',$id);
	$stmt->execute();

	if($stmt->rowCount()) {
		header("location:register_list.php");
		
	}else{
		echo "Error";
	}



	

 ?>