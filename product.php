<?php 

  include 'include/header.php';
  include 'backend/dbconnect.php';

    $sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8";

    $stmt=$pdo->prepare($sql);
  
    $stmt->execute();
    $items=$stmt->fetchAll();
    // var_dump($item);

 ?>

<div  style="background-color: white;">
		

	<!-- Our Products-->

	<div class="container" style="padding-top: 60px;">
    <h3 class="text-center">Our Products</h3>
    <hr class="divider1 my-2"/>
  </div>


<div class="container">
    <div class="row">

      <?php 

        foreach ($items as $item) {
        
       ?>
      <div class="col-md-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
            <img src="backend/<?= $item['photo'] ?>" alt="Product" class="img-responsive" />
          </div>
          <div class="wsk-cp-text">
    
            <div class="category" >
          
                <span class="view_detail" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">Detail </span>
            </div>           
            <div class="description-prod title-product">
              <h6 class="my-2">Category: <b><?= $item['c_name'] ?></b></h6>
              <p>Name: <b><?= $item['name'] ?></b></p>

            </div>
            <div class="card-footer my-2">
              <div>
                <span class="price text-center" style="padding-left:  45px">
                <b>Price: </b>
              <?php  
                if (isset($item['discount'])) {
                  echo $item['discount']." MMK";
                
              ?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del><?= $item['price']." MMK"; ?></del>
              <?php 

            }else{
              echo $item['price']." MMK";
            }
               ?>
              </span>
            </div>

  

               <div  style="padding-left: 15px" class="wcf-left ">
                <a href="" class="buy-btn" ><i class="fas fa-heart" style="padding-top: 9px;"></i></a>
              </div>
               <div  style="padding-right: 15px" class="wcf-right">
              
                <a href="javascript:void(0)" class="addtocart  item-add buy-btn" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
                  <i class="fas fa-shopping-cart item-add" style="padding-top: 9px;"></i></a>
              </div>
            


            </div>
          </div>
        </div>
      </div>

      <?php  
        }

      ?>


  
     
    </div>  <!-- end row -->

	</div>  <!--  end container -->

	


	<div class="container my-5">
		<div class="row">
			<div class="col-md-5">
				<img src="images/img2.jpg" class="img-fluid">
			</div>

			<div class="col-md-7">
				<h4>About Our Website</h4>
				<p1 class="text-justify my-4">
					<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .
				</p1>
			</div>
		</div>
	</div>


	 <?php 

  include 'include/footer.php';

   ?>

</div>  <!-- end of background-color:white -->


	


