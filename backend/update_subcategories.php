<?php 

	include 'dbconnect.php';

	
	$id=$_POST['id'];
	$name = $_POST['name'];
	
	$category = $_POST['category'];
	

	// print_r($photo);
	// var_dump($photo);

	// echo $codeno;

	

	// echo "$id and $name and $price and $discount and $brand and $subcategory and $description and $fullpath";


	$sql="UPDATE subcategories SET name=:subcategory_name, category_id=:subcategory_category WHERE subcategories.id=:subcategory_id";

	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcategory_id',$id);
	
	$stmt->bindParam(':subcategory_name',$name);
	$stmt->bindParam(':subcategory_category',$category);
	
	

	
	$stmt->execute();
	header("location:subcategories_list.php");

	



 ?>