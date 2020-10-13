<?php 

	include 'include/header.php';
	include 'dbconnect.php';


	$id=$_GET['id'];

	$sql="SELECT * FROM subcategories WHERE subcategories.id=:subcategory_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcategory_id',$id);
	$stmt->execute();
	$subcategory=$stmt->fetch(PDO::FETCH_ASSOC);

	// var_dump($item);
 ?>


<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
 	<h1 class="h3 mb-0 text-gray-800">Subcategories Create</h1>
 	<a href="subcategories_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
 </div>

 <div class="row">
 	<div class="offset-md-2 col-md-8">
 		<form action="update_subcategories.php" method="POST" enctype="multipart/form-data">
 			<input type="hidden" name="id" value="<?php echo $subcategory['id']; ?>">
 			<div class="form-group">
 				<label>Subcategory Name</label>
 				<input type="text" name="name" id="name" class="form-control" value="<?php echo $subcategory['name'] ?>">
 			</div>
 			<div class="form-group">
 				<label for="category">Category</label>
 				<!-- <input type="number" name="category" class="form-control" id="category"> -->

 				<select class="form-control" name="category" >
 					<option>Choose....</option>

 					<?php 

 						$sql="SELECT * FROM subcategories";
 						$stmt=$pdo->prepare($sql);
 						$stmt->execute();
 						$subcategories=$stmt->fetchAll();

 						foreach ($subcategories as $subcategory) {
 							
 					?>

 					<!-- <option value="<?php echo $category['id'];  ?>"><?php echo $category['name']; ?></option> -->


 					<option value="<?php echo $subcategory['id'];  ?>" <?php if ($subcategory['id']==$subcategory['category_id']) {
 						echo "selected";
 						} ?>><?php echo $subcategory['name']; ?></option>

 					<?php } ?>
 				</select>

 			</div>

 			

 			<input type="submit" class="btn btn-primary float-right" value="Update">

 		</form>
 	</div>
 </div>


 <?php 

 include 'include/footer.php';

  ?>