<?php 

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM subcategories WHERE subcategories.id=:subcategory_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcategory_id',$id);
	$stmt->execute();

	if($stmt->rowCount()) {
		header("location:subcategories_list.php");
		
	}else{
		echo "Error";
	}



	

 ?>


