<?php 

	session_start();
	include 'dbconnect.php';  // connect the database

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];	
	$profile = $_FILES['profile'];


	$_SESSION['old_name']=$name;
	$_SESSION['old_email']=$email;
	$_SESSION['old_password']=$password;
	$_SESSION['old_cpassword']=$cpassword;
	$_SESSION['old_phone']=$phone;
	$_SESSION['old_address']=$address;
	


	$basepath = "img/";
	$fullpath = $basepath.$profile['name'];
	move_uploaded_file($profile['tmp_name'], $fullpath);

	// echo " $name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);


	if ($name==null || $email==null || $phone==null || $address==null || $password==null || $cpassword==null  || $profile['size']==0) {
		if ($profile['size']==0) {
			$_SESSION['profile_error_msg']="User Profile is Required!";
		}elseif ($name==null) {
			$_SESSION['name_error_msg']="User Name is Required!";
		}elseif ($email==null) {
			$_SESSION['email_error_msg']="User email is Required!";
		}elseif ($phone==null) {
			$_SESSION['phone_error_msg']="User phone is Required!";
		}elseif ($password==null) {
			$_SESSION['password_error_msg']="User password is Required!";
		}elseif ($password==null) {
			$_SESSION['password_error_msg']="User password is Required!";
		}elseif ($cpassword==null) {
			$_SESSION['cpassword_error_msg']="User cpassword is Required!";
		}else {
			$_SESSION['address_error_msg']="User address is Required!";
		}
		header("location:register_create.php");
	}elseif ($password!=$cpassword) {
		$_SESSION['password_error_msg']="User password and confirm password does not match.";
		header("location:register_create.php");
	}else{

		$password=sha1($password);

		$sql = "INSERT INTO users(name,profile,email,password,phone,address)
			VALUES(:user_name,:user_profile,:user_email,:user_password,:user_phone,:user_address)"; // behind the VALES ==> label pay lite tal in the VALUES

		$stmt = $pdo->prepare($sql);
		
		$stmt ->bindParam('user_name',$name);
		$stmt ->bindParam('user_profile',$fullpath);
		$stmt ->bindParam('user_email',$email);
		$stmt ->bindParam('user_password',$password);
		$stmt ->bindParam('user_phone',$phone);
		$stmt ->bindParam('user_address',$address);

		$stmt ->execute();

		if($stmt->rowCount()) {
			header("location:login.php");
		}else{
			echo "Error";
		}

		$sql="SELECT * FROM users ORDER BY id DESC LIMIT 1";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$user=$stmt->fetch(PDO::FETCH_ASSOC);

		$user_id=$user['id'];
		$role_id=1;

		$sql="INSERT INTO model_has_roles (user_id,role_id) VALUES(:user_id,:role_id)";
		$stmt=$pdo->prepare($sql);
		$stmt->bindParam(':user_id',$user_id);
		$stmt->bindParam(':role_id',$role_id);
		$stmt->execute();

		if($stmt->rowCount()) {
			header("location:login.php");
		}else{
			echo "Error";
		}


	}





	



 ?>