<?php 

	include 'dbconnect.php';  // connect the database

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	
	$photo = $_FILES['photo'];
	
	$basepath = "img/";
	$fullpath = $basepath.$photo['name'];
	move_uploaded_file($photo['tmp_name'], $fullpath);

	// echo " $name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);


	$sql = "INSERT INTO users(name,profile,email,password,phone,address)
			VALUES(:user_name,:user_photo,:user_email,:user_password,:user_phone,:user_address)"; // behind the VALES ==> label pay lite tal in the VALUES


		// sql ko check or prepare
	$stmt = $pdo->prepare($sql);


	// Data ko "bindParam " loat p htae

	
	$stmt ->bindParam('user_name',$name);
	$stmt ->bindParam('user_photo',$fullpath);
	$stmt ->bindParam('user_email',$email);
	$stmt ->bindParam('user_password',$password);
	$stmt ->bindParam('user_phone',$phone);
	$stmt ->bindParam('user_address',$address);
	

	// execute() loat mha data ka insert mhar

	$stmt ->execute();


	if($stmt->rowCount()) {
		header("location:register_list.php");
	}else{
		echo "Error";
	}



 ?>